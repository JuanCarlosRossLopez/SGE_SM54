<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Students;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books= Books::all();
        $students =Students::all();

        return view('super_admin.book', compact("books", "students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students =Students::all();
        return view('super_admin.add_book_modal', ['students'=>$students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $libro = new Books();
        $libro->book_name = $request->input('book_name');
        $libro->book_front_page = $request->input('book_front_page');
        $libro->book_description = $request->input('book_description');
        $libro->author = $request->input('author');
        $libro->price = $request->input('price');
        $libro -> students_id = $request->input('students_id');
        $libro->save();
        return back();
        // return redirect()->route('super_admin.book');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro = books::find($id);
        return view('super_admin.show_book', compact("books"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
