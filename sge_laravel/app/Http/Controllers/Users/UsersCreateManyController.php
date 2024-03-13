<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UsersCreateManyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'number_of_users' => 'required|integer|min:1',
            'role_name' => 'required|string',
        ]);
    
        $number_of_users = $request->input('number_of_users');
        $role_name = $request->input('role_name');
    
        $role = Role::where('name', $role_name)->first();
        if (!$role) {
            return redirect()->back()->with('error', 'El rol especificado no existe.');
        }
    
        for ($i = 0; $i < $number_of_users; $i++) {
            $username = 'usuario' . ($i + 1);
    
            while (User::where('username', $username)->exists()) {
                $username = 'usuario' . ($i + 1) . '_' . mt_rand(100, 999);
            }
    
            $user = new User();
            $user->username = $username;
            $user->email = $username . '@utcancun.edu.mx';
            $user->password = bcrypt('SGE2024');
            $user->save();
            $user->assignRole($role);
        }
    
        return redirect()->back()->with('success', 'Usuarios creados con éxito.');
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
