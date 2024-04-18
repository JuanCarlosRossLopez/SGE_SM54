<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\Career;
use Illuminate\Support\Facades\Hash;






class Aspirante extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('aspirante.aspirantes', compact('user'));
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
        $request->validate([
            'password' => 'required|string|min:8', // Asegúrate de ajustar las reglas de validación según tus necesidades
        ]);

        // Buscar el usuario
        $user = User::findOrFail($id);

        // Actualizar la contraseña si se proporcionó
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->removeRole('Aspirante'); 
        $user->assignRole('Estudiante'); 

        // Guardar los cambios
        $user->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('students.activities_calendar')->with('success', '¡Contraseña actualizada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
