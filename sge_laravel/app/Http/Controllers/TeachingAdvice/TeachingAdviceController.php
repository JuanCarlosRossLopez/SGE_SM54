<?php

namespace App\Http\Controllers\TeachingAdvice;

use App\Http\Controllers\Controller;
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
        //
        return view('teaching_advice');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teaching_advice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'teacher_id'=>'required',
            'student_id'=>'required'
        ]);

        Teaching_advice::find($request->all());

        redirect()->route('teaching_advice')->with('success','Docente asignado al Alumno correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);
        return view('teaching_advice');
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
    public function update(Request $request, string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);

        $teaching_advice->update($request->all());

        return redirect('teaching_advice')->with('success','Docente-Alumno actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $teaching_advice=Teaching_advice::find($id);
        $teaching_advice->delete();
        return redirect('teaching_advice')->with('success','Docente-Alumno eliminado correctamente');

    }
}
