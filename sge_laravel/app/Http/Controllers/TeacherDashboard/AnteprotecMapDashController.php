<?php

namespace App\Http\Controllers\TeacherDashboard;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Project_management;
use App\Models\Students;
use App\Models\Teaching_advice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnteprotecMapDashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            // Usuario autenticado
            $usuario = Auth::user();

            // Verifica si el usuario tiene un maestro asociado
            if ($usuario->teachers) {
                // Accede al maestro asociado
                $maestro = $usuario->teachers;
                $id = $maestro->id;
                $Project_management = Teaching_advice::where('teacher_id', $id)->get();
        
                foreach ($Project_management as $project_management) {
                    $project_management->student->load('projectManagement');
                }
        
                $Students = Students::all();
                return view('teachers.teacher_dashboard', compact('Students', 'Project_management'));
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project_management = Project_management::find($id);
        $comments = Comments::where('project_management_id', $id)->get();
        return view('teacher_dates.information_project',["project_management"=>$project_management, "comments"=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}
