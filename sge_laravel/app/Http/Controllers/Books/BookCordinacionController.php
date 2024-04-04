<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Students;
use Illuminate\Http\Request;

class BookCordinacionController extends Controller
{
    public function index()
    {
        $books = Books::all();
        $students = Students::all();

        return view('super_admin.book', compact("books", "students"));
        
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Students::all();
        return view('super_admin.add_book_modal', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      /*$request->validate([
            'book_name' => 'required|max:255|min:3',
            'book_description' => 'required|max:255|min:3',
            'author' => 'required|max:255|min:3',
            'students_id' => 'required'
        ]);*/

        $libro = new Books();
        $libro->book_name = $request->input('book_name');
        $libro->voucher = $request->input('voucher');
        $libro->book_front_page = $request->input('book_front_page');
        $libro->book_description = $request->input('book_description');
        $libro->author = $request->input('author');
        $libro->price = $request->input('price');
        
         $libro->save();
         $student_id=$request->input('student_id');
        $libro->students()->attach($student_id);
        
       
        

        
        
        return back();
        // return redirect()->route('super_admin.book');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $students = Students::all();
        $libro = books::find($id);
        return view('super_admin.show_book', compact("books", "students"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $students = Students::all();
        return view('super_admin.edit_book_modal', ['students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*$request->validate([
            'book_name' => 'required|max:255|min:3',
            'book_front_page' => 'required',
            'book_description' => 'required|max:255|min:3',
            'author' => 'required|max:255|min:3',
            'price' => 'required|numeric|min:13',
        ]);*/


        $books = Books::findOrFail($id);
        $books->book_name = $request->input('book_name');
        $books->voucher = $request->input('voucher');
        $books->book_front_page = $request->input('book_front_page');
        $books->book_description = $request->input('book_description');
        $books->author = $request->input('author');
        $books->price = $request->input('price');
        //$books->students_id = $request->input('students_id');
        $books->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);
        
        $books->delete();
        return back();
    }
}

