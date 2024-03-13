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
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
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
            'division_id' => 'required|exists:divisions,id',
            'anteproject_id' => 'required|exists:anteprojects,id',
            'adviser_id' => 'required|exists:teachers,id',
            'evaluation_date_id' => 'required|exists:activity_histories,id',
        ]);
        //crea la informacion del estudiante
        Students::create($request->all());
        //lo manda a su respectivo apartado 
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Students::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student=Students::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentsRequest $request, $id): RedirectResponse
    {
        //Busca el estudiante
        $student=Students::find($id);
        //actualiza
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
        return redirect()->route('students.index');
    }
}