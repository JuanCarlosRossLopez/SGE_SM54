<?php

namespace App\Http\Controllers\Projects_management;

use App\Http\Controllers\Controller;
use App\Models\Anteproject;
use Illuminate\Http\Request;
use App\Models\Project_management;
use Illuminate\Http\RedirectResponse;
use DragonCode\Contracts\Cashier\Auth\Auth as CashierAuth;
use Illuminate\Support\Facades\Auth;

class Projects_managementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project_management = Project_management::all();
        return view('students.anteproyecto', compact('project_management'));
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

        if(Anteproject::where('student_id', $request->input('student_id'))->exists()){
            return back()->with('status', 'Ya existe un anteproyecto registrado con esa matrícula');
        }

        if(Anteproject::where('user_id', Auth::id())->exists()){
            return back()->with('status', 'Ya existe un anteproyecto registrado con ese usuario');
        }

        $data = $request->all();
        $data['user_id'] = Auth::id();

        //
        $request->validate([
        'project_title' => 'required', // Título del Anteproyecto 
        'student_name' => 'required|max:255', // Nombre del estudiante 
        'student_group' => 'required|string', // Grupo 
        'student_email' => 'required', // Correo electrónico 
        'start_date' => 'required|date', // Fecha de inicio 
        'end_date' => 'required|date', // Fecha de finalización 
        'student_phone' => 'required|string|max:10', // Teléfono 
        'student_id' => 'required|max:8', // Matrícula 
        'project_company' => 'required', // Empresa 
        'project_advisor' => 'required', // Asesor Empresarial
        'project_advisor_phone' => 'required', // Teléfono del Asesor 
        'general_objective' => 'required', // Objetivo General 
        'problem_statement' => 'required', // Planteamiento del Problema 
        'justification' => 'required', // Justificación
        'activities' => 'required', // Actividades a realizar
        ]);

        $projects_management = new Project_management();
        $projects_management -> project_title = $request -> input('project_title');
        $projects_management -> student_name = $request -> input('student_name');
        $projects_management -> student_group = $request -> input('student_group');
        $projects_management -> student_email = $request -> input('student_email');
        $projects_management -> student_phone = $request -> input('student_phone');
        $projects_management -> student_id = $request -> input('student_id');
        $projects_management -> project_company = $request -> input('project_company');
        $projects_management -> project_advisor = $request -> input('project_advisor');
        $projects_management -> project_advisor_phone = $request -> input('project_advisor_phone');
        $projects_management -> general_objective = $request -> input('general_objective');
        $projects_management -> problem_statement = $request -> input('problem_statement');
        $projects_management -> justification = $request -> input('justification');
        $projects_management -> activities = $request -> input('activities');
        $projects_management -> start_date = $request -> input('start_date');
        $projects_management -> end_date = $request -> input('end_date');
        $projects_management -> save();
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
