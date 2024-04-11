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

        $request->validate([

            /*'student_ids.*' => 'required|exists:students,id',
            'book_name' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'voucher' => 'required|mimes:jpeg,png,jpg',
            'book_front_page' => 'required|mimes:jpeg,png,jpg',
            'book_description' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'author' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'price' => 'required|numeric|',*/

        ]);

        $libro = new Books();

        if ($request->hasFile('voucher') && $request->hasFile('book_front_page')) {
            $file = $request->file('voucher');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/books/', $name);
            $libro->voucher = $name;

            $file = $request->file('book_front_page');
            $name = time() . "_front_page_" . $file->getClientOriginalName();
            $file->move(public_path() . '/books/', $name);
            $libro->book_front_page = $name;
        }

        $libro->book_name = $request->input('book_name');


        $libro->book_description = $request->input('book_description');
        $libro->author = $request->input('author');
        $libro->price = $request->input('price');

        $libro->save();
        
      
        
        
       
        

        
        
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
        $books->status = '0'; // or whatever status you want to set
        $books->save();;
        //$books->students_id = $request->input('students_id');
        return redirect('gestion_libros')->with('notificacion', 'El libro fue aceptado correctamente');
    }


    public function updateStatus(Request $request, string $id)
    {
        $book = Books::findOrFail($id);
        $book->status = '0'; // or whatever status you want to set
        $book->save();
    
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);
        if ($books->students()->exists()) {
            // Detach all related students from the pivot table
            $books->students()->detach();
        }
        $books->delete();
        return back();
    }
}


