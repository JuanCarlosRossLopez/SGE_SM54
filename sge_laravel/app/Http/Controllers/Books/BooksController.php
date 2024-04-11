<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\book_student;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->student ? Auth::user()->student->id : 'Sin estudiante asociado';
        $userBooks = Books::whereHas('students', function ($query) use ($userId) {
            $query->where('students.id', $userId);
        })->get();
        $books = Books::where('status', 0)->get();
        $students = DB::select("
        SELECT id,student_name FROM students WHERE NOT EXISTS 
        ( SELECT * FROM books JOIN books_students ON books.id = books_students.books_id WHERE students.id = books_students.students_id );");

        return view('students.libros.index', compact("books", "students", "userBooks"));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $libro = Books::find($id);
        $students = Students::whereDoesntHave('books', function ($query) use ($libro) {
            $query->where('books.id', $libro->id);
        })->get();
        return view('students.libros.addBookStudent', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'student_ids.*' => 'required|exists:students,id',
            'book_name' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'voucher' => 'required|mimes:jpeg,png,jpg',
            'book_front_page' => 'required|mimes:jpeg,png,jpg',
            'book_description' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'author' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'price' => 'required|numeric|',

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

        $first_student_id = $request->input('student_id');
        $libro->students()->attach($first_student_id);

        // Obtén los IDs de los estudiantes del request. Asegúrate de que el nombre del campo en el formulario coincida con 'student_ids'
        $additional_student_ids = $request->input('student_ids');

        // Si student_ids no es un array, conviértelo en uno
        if (!is_array($additional_student_ids)) {
            $additional_student_ids = [$additional_student_ids];
        }

        // Asegúrate de que no haya más de 3 estudiantes, incluyendo el que está posteando el libro
        if (count($additional_student_ids) > 2) {
            return back()->with('notificacion', 'No puedes agregar más de tres estudiantes');
        }

        // Adjunta los estudiantes al libro
        foreach ($additional_student_ids as $student_id) {
            if (!empty($student_id)) {
                $libro->students()->attach($student_id);
            }
        }



        return back()->with('notificacion', 'Su libro se agrego y correctamente esta en revisión');;
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
        //return view('super_admin.edit_book_modal', ['students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'book_name' => 'required|max:255|min:3',
            'book_front_page' => 'required',
            'book_description' => 'required|max:255|min:3',
            'author' => 'required|max:255|min:3',
            'price' => 'required|numeric|min:13',
        ]);


        $books = Books::findOrFail($id);
        $books->book_name = $request->input('book_name');
        $books->book_front_page = $request->input('book_front_page');
        $books->book_description = $request->input('book_description');
        $books->author = $request->input('author');
        $books->price = $request->input('price');
        $books->students_id = $request->input('students_id');
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
