<?php

namespace App\Http\Controllers\TeacherDashboard;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\Students;
use App\Models\Teaching_advice;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Usuario autenticado
            $usuario = Auth::user();

            // Verifica si el usuario tiene un maestro asociado
            if ($usuario->teachers) {
                // Accede al maestro asociado
                $maestro = $usuario->teachers;
                // Accede a las propiedades del maestro
                $id = $maestro->id;
                // Realiza acciones basadas en la relación con el maestro
                $students = Teaching_advice::where('teacher_id', $id)->get();
                return "$students.";
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
        //
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
