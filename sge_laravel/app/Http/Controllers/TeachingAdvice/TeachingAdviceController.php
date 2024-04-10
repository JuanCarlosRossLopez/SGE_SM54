<?php

namespace App\Http\Controllers\TeachingAdvice;

use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Teaching_advice;
use Illuminate\Http\Request;

class TeachingAdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Teachers = Teachers::all();
        $Students = Students::all();

        $Teaching_advice = Teaching_advice::paginate(10);
        return view('teaching_advice.teaching_advice', compact('Students','Teachers','Teaching_advice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teaching_advice.teaching_advice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'teacher_id'=>'required',
        //     'student_id'=>'required'
        // ]);
        
        $request->validate([
            'adviser_id' => 'required|exists:teachers,id',
            'student_id' => 'required|exists:students,id',
        ]);

        // Verificar si el estudiante ya está asignado a un docente
        $existingAssignment = Teaching_advice::where('student_id', $request->input('student_id'))->exists();
        if ($existingAssignment) {
            return redirect('asignar_alumnos')->with('error', 'El estudiante ya está asignado a un docente.');
        }

        $teaching_advice = new Teaching_advice();
        
        $teaching_advice->teacher_id=$request->input('adviser_id');
        $teaching_advice->student_id=$request->input('student_id');
        $teaching_advice-> save();

        
        return redirect('asignar_alumnos')->with('notificacion','Docente asignado al Alumno correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);
        return redirect('asignar_alumnos');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);
        return view('teaching_advice');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos enviados desde el formulario
        $validatedData = $request->validate([
            'adviser_id' => 'required|exists:teachers,id',
            'student_id' => 'required|exists:students,id',
        ]);
        $existingAssignment = Teaching_advice::where('student_id', $request->input('student_id'))->exists();
        if ($existingAssignment) {
            return redirect('asignar_alumnos')->with('error', 'El estudiante ya está asignado a un docente.');
        }
        // Actualizar la asignación en la base de datos
        $teaching_advice=Teaching_advice::find($id);
        // Actualizar la asignación con los datos validados
        $teaching_advice->teacher_id = $validatedData['adviser_id'];
        $teaching_advice->student_id = $validatedData['student_id'];
        $teaching_advice->save();

        // Redirigir o mostrar un mensaje de éxito
        return redirect('asignar_alumnos')->with('notificacion', 'La asignación se actualizó correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);
        $teaching_advice->delete();
        return redirect('asignar_alumnos')->with('notificacion','Docente-Alumno eliminado correctamente');

    }
}
