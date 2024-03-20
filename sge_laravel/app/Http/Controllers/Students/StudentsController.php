<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Students\StudentsRequest;
use App\Models\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::paginate(10);
        return view('students.manager_student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Students::all();
        return view('students.student_create', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'id_student' => 'required|integer',
            'project_creator' => 'required|string',
            'strike' => 'required|string',
            'user_id' => 'required|exists:users,id',
            ' ' => 'required|exists:divisions,id',
            'anteproject_id' => 'required|exists:anteprojects,id',
            'adviser_id' => 'required|exists:teachers,id',
            'evaluation_date_id' => 'required|exists:activity_histories,id',
        ]);

        //crear un nuevo estudiante

        $student = new Students();
        $student->student_name = $request->student_name;
        $student->id_student = $request->id_student;
        $student->project_creator = $request->project_creator;
        $student->strike = $request->strike;
        $student->user_id = $request->user_id;
        $student->division_id = $request->division_id;
        $student->anteproject_id = $request->anteproject_id;
        $student->adviser_id = $request->adviser_id;
        $student->evaluation_date_id = $request->evaluation_date_id;

        $student->save();
 
        //lo manda a su respectivo apartado
        return redirect()->route('manager_student')->with('notificacion','Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Students::find($id);
        return view('students.show_student', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentsRequest $request, $id): RedirectResponse
    {
        //Busca el estudiante
        $student = Students::find($id);
        //actualiza
        $student->student_name = $request->input('student');
        $student->id_student = $request->input('id_student');
        $student->project_creator = $request->input('project_creator');
        $student->strike = $request->input('strike');
        $student->user_id = $request->input('user_id');
        $student->division_id = $request->input('division_id');
        $student->anteproject_id = $request->input('anteproject_id');
        $student->adviser_id = $request->input('adviser_id');
        $student->evaluation_date_id = $request->input('evaluation_date_id');
        //guarda
        $student->update($request->all());
        //lo manda a la vista de estudiante
        return redirect()->route('students.show')->with('notificacion','Estudiante editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Encuentra el estudiante por ID
        $student = Students::find($id);
        //Elimina el estudiante
        $student->delete();
        //lo manda a la vista del estudiante
        return back()->with('notificacion','Estudiante eliminado correctamente');
    }
}