<?php

namespace App\Http\Controllers\Roles;
use App\Models\Students;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $roles = Role::all();
        $permissions = Permission::all();
        
        return view('admin.manage_rol', compact('roles','permissions'));
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
        $role_name = $request->input('role_name');
        $role = Role::create(['name' => $role_name]);
        $permissions = $request->input('permissions', []);
        $role->syncPermissions($permissions);
        return redirect()->route('roles.index');
    }

    public function store_permision(Request $request)
    {
        $permision_name = $request->input('permision_name');
         Permission::create(['name' => $permision_name]);

        return redirect()->route('roles.index');

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
        $role = Role::findOrFail($id);
    
        // Update the role name if it's provided in the request
        $role->name = $request->input('role_name', $role->name);
    
        // Sync permissions
        $permissions = $request->input('permissions', []); // Get selected permissions from the request
        $role->syncPermissions($permissions); // Sync the permissions with the role
    
        $role->save(); // Save the changes
    
        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');
        
    }

    public function delete_permission(string $id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('roles.index');
    }
}
