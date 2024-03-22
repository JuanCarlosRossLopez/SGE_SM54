<?php

namespace App\Http\Controllers\TeacherDashboard;

use App\Http\Controllers\Controller;
use App\Models\Project_management;
use App\Models\Students;
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
                // Accede a las propiedades del maestro
                $id = $maestro->id;

                // Obtener los estudiantes asesorados por el maestro
                $students = Students::where('adviser_id', $id)->paginate(10); // Cambia el número 10 según tu necesidad de resultados por página
                // Obtener los proyectos de gestión de proyectos paginados
                $Project_management = Project_management::paginate(10);


                return view('teachers.teacher_dashboard', compact('students', 'Project_management'));
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
         return view('teacher_dates.information_project',["project_management"=>$project_management]);
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
