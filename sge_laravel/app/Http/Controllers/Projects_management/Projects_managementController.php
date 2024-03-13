<?php

namespace App\Http\Controllers\Projects_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project_management;
use Illuminate\Http\RedirectResponse;

class Projects_managementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects_management = Project_management::all();
        return view('Projects_management', compact('Projects_management'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create-project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'student_name' => 'required|max:255', // Nombre del estudiante 
        'student_group' => 'required|string', // Grupo 
        'student_email' => 'required|email', // Correo electrónico 
        'student_phone' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/', // Teléfono 
        'student_id' => 'required|exists:students,id', // Matrícula 
        'project_title' => 'required', // Título del Anteproyecto 
        'project_company' => 'required', // Empresa 
        'project_advisor' => 'required', // Asesor Empresarial 
        'project_advisor_phone' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/', // Teléfono del Asesor 
        'general_objective' => 'required', // Objetivo General 
        'specific_objectives' => 'required', // Objetivos Específicos 
        'project_scope' => 'required', // Alcance del Proyecto 
        'start_date' => 'required|date', // Fecha de inicio 
        'end_date' => 'required|date', // Fecha de finalización 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $projects_management = Project_management::find($id);
        return view('projects_management.show', compact('projects_management'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $projects_management = Project_management::find($id);
        return view('projects_management.edit', compact('projects_management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
        $projects_management = Project_management::find($id);
        $projects_management->update($request->all());
        return redirect()->route('projects_management.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $projects_management = Project_management::find($id);
        $projects_management->delete();
        return redirect()->route('projects_management.index');
    }
}
