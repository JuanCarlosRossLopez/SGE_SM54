<?php

namespace App\Http\Controllers\Projects_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project_management;
use App\Models\Students;
use Illuminate\Http\RedirectResponse;
use DragonCode\Contracts\Cashier\Auth\Auth as CashierAuth;
use Illuminate\Support\Facades\Auth;
use App\Models\Comments;

class Projects_managementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project_management = Project_management::all();
        $comments = Comments::all();
        

        return view('students.anteproyecto', compact('project_management', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $project_management = Project_management::all();
        return view('create-project', compact('project_management'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $request->validate([
            'educational_program' => 'required|string', // Programa Educativo
            'project_title' => 'required', // Título del Anteproyecto
            'student_name' => 'required|max:255', // Nombre del estudiante
            'student_group' => 'required|string', // Grupo
            'student_email' => 'required', // Correo electrónico
            'start_date' => 'required|date', // Fecha de inicio
            'end_date' => 'required|date', // Fecha de finalización
            'student_phone' => 'required|string|max:10', // Teléfono
            'student_id' => 'required|max:8', // Matrícula
            'project_company' => 'required', // Empresa 
            'direction' => 'required|string', // Dirección
            'position' => 'required|string', // Puesto
            'email_asesor' => 'required', // Correo del Asesor
            'project_advisor' => 'required', // Asesor Empresarial
            'project_advisor_phone' => 'required', // Teléfono del Asesor
            'general_objective' => 'required', // Objetivo General
            'problem_statement' => 'required', // Planteamiento del Problema
            'justification' => 'required', // Justificación
            'activities' => 'required', // Actividades a realizar
            'likes' => 'required'
        ]);
        
        $projects_management = new Project_management();
        $projects_management->educational_program = $request->input('educational_program');
        $projects_management->project_title = $request->input('project_title');
        $projects_management->student_name = $request->input('student_name');
        $projects_management->student_group = $request->input('student_group');
        $projects_management->student_email = $request->input('student_email');
        $projects_management->student_phone = $request->input('student_phone');
        $projects_management->student_id = $request->input('student_id');
        $projects_management->id_student = $request->input('id_student');
        $projects_management->project_company = $request->input('project_company');
        $projects_management->direction = $request->input('direction');
        $projects_management->position = $request->input('position');
        $projects_management->email_asesor = $request->input('email_asesor');
        $projects_management->project_advisor = $request->input('project_advisor');
        $projects_management->project_advisor_phone = $request->input('project_advisor_phone');
        $projects_management->general_objective = $request->input('general_objective');
        $projects_management->problem_statement = $request->input('problem_statement');
        $projects_management->justification = $request->input('justification');
        $projects_management->activities = $request->input('activities');
        $projects_management->likes = $request->input('likes');
        $projects_management->start_date = $request->input('start_date');
        $projects_management->end_date = $request->input('end_date');
        $projects_management->save();
        return back()->with('status', 'Anteproyecto registrado correctamente');
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
        return back()->with('status', 'Anteproyecto registrado correctamente');
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
