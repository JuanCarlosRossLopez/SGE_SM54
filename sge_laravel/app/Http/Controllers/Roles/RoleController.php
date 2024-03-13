<?php

namespace App\Http\Controllers\Roles;
use App\Models\Students;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $users = User::all();

        return view('admin.manage_rol', compact('users'));
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
        $userId = $request->input('user_id');
        $user = User::find($userId);
        $user->assignRole($request->role);
        return view('admin.manage_rol');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::all();
        return view('admin.view-modal-rol', compact('role'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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
