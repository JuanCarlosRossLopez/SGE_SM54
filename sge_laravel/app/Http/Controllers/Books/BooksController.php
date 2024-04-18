<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\book_student;
use App\Models\Teachers;
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


         $teacherId = Auth::user()->teachers ? Auth::user()->teachers->id : 'null';


         

if ($teacherId) {
    $studentIds = DB::table('teaching_advices')
        ->where('teacher_id', $teacherId)
        ->pluck('student_id');

    $advicesBooks = Books::whereHas('students', function ($query) use ($studentIds) {
        $query->whereIn('students.id', $studentIds);
    })->get();
} else {
    $advicesBooks = 'No es profesor o no tiene estudiantes asesorados';
}




        $books = Books::where('status', 0)->paginate(8);
        $students = DB::select("
        SELECT id,student_name FROM students WHERE NOT EXISTS 
        ( SELECT * FROM books JOIN books_students ON books.id = books_students.books_id WHERE students.id = books_students.students_id );");

        return view('students.libros.index', compact("books", "students", "userBooks", "advicesBooks", "teacherId"));
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

        $messages =  [
            'book_name.required' => 'El nombre del libro es requerido',
            'book_name.max' => 'El nombre del libro no puede tener más de 255 caracteres',
            'book_name.min' => 'El nombre del libro no puede tener menos de 1 caracteres',
            'book_name.regex' => 'El nombre del libro solo puede contener letras y números',
            'voucher.required' => 'La imagen del comprobante es requerido',
            'voucher.mimes' => 'La imagen del comprobante debe ser un archivo de tipo: jpeg, png, jpg',
            'book_front_page.required' => 'La imagen de la portada del libro es requerido',
            'book_front_page.mimes' => 'La imagen de la portada del libro debe ser un archivo de tipo: jpeg, png, jpg',
            'book_description.required' => 'La descripción del libro es requerido',
            'book_description.max' => 'La descripción del libro no puede tener más de 255 caracteres',
            'book_description.min' => 'La descripción del libro no puede tener menos de 3 caracteres',
            'book_description.regex' => 'La descripción del libro solo puede contener letras y números',
            'author.required' => 'El autor del libro es requerido',
            'author.max' => 'El autor del libro no puede tener más de 255 caracteres',
            'author.min' => 'El autor del libro no puede tener menos de 3 caracteres',
            'author.regex' => 'El autor del libro solo puede contener letras y números',
            'price.required' => 'El precio del libro es requerido',
            'price.numeric' => 'El precio del libro debe ser un número',
            'student_ids.*.required' => 'El nombre del estudiante es requerido',

        ];

        $request->validate([

            'student_ids.*' => 'required|exists:students,id',
            'book_name' => 'required|max:255|min:1|regex:/^[a-zA-Z0-9\s:áéíóúÁÉÍÓÚ]+$/',
            'voucher' => 'required|mimes:jpeg,png,jpg',
            'book_front_page' => 'required|mimes:jpeg,png,jpg',
            'book_description' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s:áéíóúÁÉÍÓÚ]+$/',
            'author' => 'required|max:255|min:3|regex:/^[a-zA-Z0-9\s:áéíóúÁÉÍÓÚ]+$/',
            'price' => 'required|numeric|',

        ], $messages);

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



        return back()->with('notificacion', 'Su libro se agrego y correctamente esta en revisión');
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
        return back()->with('notificacion', 'Se elimino el libro correctamente');
    }
}
