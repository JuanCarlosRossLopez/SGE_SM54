<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros= Books::all();
        return view('super_admin.book', [ 'books'=> $libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.modal_book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name'=>'required'|'max:255|min:3|regex:/^(?!.*\b(OR|AND|&&)\b).*$/i',
            'book_front_page'=>'required'|'max:255|min:3|regex:/^(?!.*\b(OR|AND|&&)\b).*$/i',
            'book_description'=>'required'|'max:255|min:3|regex:/^(?!.*\b(OR|AND|&&)\b).*$/i',
            'author'=>'required'|'max:255|min:3|regex:/^(?!.*\b(OR|AND|&&)\b).*$/i',
            'price'=>'required'|'max:255|min:3|regex:/^(?!.*\b(OR|AND|&&)\b).*$/i',
        ]);
        $libro = new Books();
        $libro->book_name = $request->input('book_name');
        $libro->book_front_page = $request->input('book_front_page');
        $libro->book_description = $request->input('book_description');
        $libro->author = $request->input('author');
        $libro->price = $request->input('price');
        $libro->save();
        return redirect()->route('super_admin.book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
