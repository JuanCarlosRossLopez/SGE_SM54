<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookCordinacionController extends Controller
{
    public function index()
    {
        $books = Books::all();
        $students = DB::select("
        SELECT id,student_name FROM students WHERE NOT EXISTS 
        ( SELECT * FROM books JOIN books_students ON books.id = books_students.books_id WHERE students.id = books_students.students_id );");

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
       
    $book = Books::find($id);

    if ($book) {
        $students = $book->students;
        return view('super_admin.show_book', compact('book', 'students'));
    } else {
        // Manejar el caso en el que el libro no se encuentra...
    }
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




    public function updateBook(Request $request, string $id)
    {
        $messages = [
            'book_name.required' => 'El nombre del libro es requerido',
            'book_name.max' => 'El nombre del libro no puede tener más de 255 caracteres',
            'book_name.min' => 'El nombre del libro no puede tener menos de 3 caracteres',
            'voucher.required' => 'La imagen del comprobante es requerido',
            'voucher.mimes' => 'La imagen del comprobante debe ser un archivo de tipo: jpeg, png, jpg',
            'book_front_page.required' => 'La imagen de la portada del libro es requerido',
            'book_front_page.mimes' => 'La imagen de la portada del libro debe ser un archivo de tipo: jpeg, png, jpg',
            'book_description.required' => 'La descripción del libro es requerido',
            'book_description.max' => 'La descripción del libro no puede tener más de 255 caracteres',
            'book_description.min' => 'La descripción del libro no puede tener menos de 3 caracteres',
            'author.required' => 'El autor del libro es requerido',
            'author.max' => 'El autor del libro no puede tener más de 255 caracteres',
            'author.min' => 'El autor del libro no puede tener menos de 3 caracteres',
            'price.required' => 'El precio del libro es requerido',
            'price.numeric' => 'El precio del libro debe ser un número',
            
        ];
    
        $request->validate([
            'book_name' => 'required|max:255|min:3',
            'voucher' => 'nullable|mimes:jpeg,png,jpg', // 'voucher' => 'required|mimes:jpeg,png,jpg
            'book_front_page' => 'nullable|mimes:jpeg,png,jpg',
            'book_description' => 'required|max:255|min:3',
            'author' => 'required|max:255|min:3',
            'price' => 'required|numeric',
        ], $messages);
    
        $books = Books::findOrFail($id);
        // Obtén los IDs de los estudiantes del formulario
        
        $new_student_ids = (array) $request->input('students_id');
    

    // Obtén los IDs de los estudiantes actualmente asociados al libro
    $current_student_ids = $books->students->pluck('id')->toArray();

    // Encuentra los estudiantes que necesitan ser agregados y los que necesitan ser eliminados
    $students_to_add = array_diff($new_student_ids, $current_student_ids);
    $students_to_remove = array_diff($current_student_ids, $new_student_ids);

    // Agrega los nuevos estudiantes al libro
    foreach ($students_to_add as $student_id) {
        $books->students()->attach($student_id);
    }

    // Elimina los estudiantes que ya no están asociados al libro
    foreach ($students_to_remove as $student_id) {
        $books->students()->detach($student_id);
    }
    
        if ($request->hasFile('book_front_page')) {
            $file = $request->file('book_front_page');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/books/', $name);
            $books->book_front_page = $name;
        }
        if ($request->hasFile('voucher')) {
            $file = $request->file('voucher');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/books/', $name);
            $books->voucher = $name;
        }
    
        $books->book_name = $request->input('book_name');
        $books->book_description = $request->input('book_description');
        $books->author = $request->input('author');
        $books->price = $request->input('price');
        
        $books->save();
    
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

