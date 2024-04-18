<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Students;
use App\Models\Teachers;

class MasiveActionsUsers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
    public function destroy(Request $request)
    {
        $userIds = explode(',', $request->input('user_ids'));
        
        // Validar si hay usuarios seleccionados
        if (empty($userIds)) {
            return redirect()->back()->with('error', 'No se seleccionaron usuarios para eliminar');
        }
        $email = User::where('id', $userIds)->value('email');
    
        foreach ($userIds as $userId) {
            try {
                // Buscar si el usuario es un estudiante
                $student = Students::where('user_id', $userId)->first();
                if ($student) {
                    $student->delete();
                }
    
                // Buscar si el usuario es un profesor
                $teacher = Teachers::where('user_id', $userId)->first();
                if ($teacher) {
                    $teacher->delete();
                }


                User::destroy($userId);
            } catch (\Exception $e) {
                // Manejar la excepción y continuar con el siguiente usuario
                return redirect()->back()->with('error', 'No se puede eliminar el usuario con correo ' . $email . '. Está relacionado con otra tabla.');
            }
        }
    
        return redirect()->back()->with('success', 'Usuarios eliminados exitosamente');
    }
    
  
}
