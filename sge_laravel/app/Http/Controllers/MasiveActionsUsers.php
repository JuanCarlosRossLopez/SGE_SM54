<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Students;
use App\Models\Teachers;
use App\Mail\SendCredentials;

use Illuminate\Support\Facades\Mail;

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

public function sendEmails(Request $request)
{
    $userIds = explode(',', $request->input('user_ids_email'));
    
    // Validar si hay usuarios seleccionados
    if (empty($userIds)) {
        return redirect()->back()->with('error', 'No se seleccionaron usuarios para enviar correos');
    }

    foreach ($userIds as $userId) {
        $user = User::find($userId);
        if ($user) {
            // Verificar si el usuario tiene roles usando Spatie
            if ($user->hasAnyRole(['Aspirante', 'Asesor'])) {
                // El usuario tiene al menos uno de los roles especificados
                // Obtener el rol del usuario
                $roles = $user->getRoleNames();

                // Definir las credenciales predeterminadas según el rol
                $email = $user->email;
                $password = '';

                // Personalizar las credenciales según el rol
                if ($user->hasRole('Aspirante')) {
                    $password = 'SGE2024';
                    $name = $user->student->student_name;
                    $id = $user->student->id_student;
                    $role = 'Aspirante';
                } elseif ($user->hasRole('Asesor')) {
                    $password = 'ASGE2024';
                    $name = $user->teachers->name_teacher;
                    $id = $user->teachers->payroll;
                    $role = 'Asesor';
                }

                // Enviar el correo electrónico con las credenciales
                Mail::to($email)->send(new SendCredentials($email, $password, $name, $id, $role));
            } else {
                // El usuario no tiene ninguno de los roles especificados
            }
        }
    }

    return redirect()->back()->with('success', 'Correos enviados exitosamente');
}

    
    public function destroy(Request $request)
    {
        $userIds = explode(',', $request->input('user_ids'));
        
        // Validar si hay usuarios seleccionados
        if (empty($userIds)) {
            return redirect()->back()->with('error', 'No se seleccionaron usuarios para eliminar');
        }
    
        foreach ($userIds as $userId) {
            // Buscar si el usuario es un estudiante
            $student = Students::where('user_id', $userId)->first();
            if ($student) {
                $student->delete();
            }
    
            // Buscar si el usuario es un profesor
            $teacher = Teachers::where('id_user', $userId)->first();
            if ($teacher) {
                $teacher->delete();
            }
    
            // Eliminar el usuario después de eliminar el estudiante o el profesor
            User::destroy($userId);
        }
    
        return redirect()->back()->with('success', 'Usuarios eliminados exitosamente');
    }
    
  
}
