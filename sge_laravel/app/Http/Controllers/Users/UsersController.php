<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('UserManagement.users', compact('users'));
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
        $request->validate([
            //'name_user' => 'required|max:250',
            //'lastname_user' => 'required|max:250',
            'username' => 'required|unique:users|max:250',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);

        $users = new User();
        // $users->name_user = $request->input('name_user');
        // $users->lastname_user = $request->input('lastname_user');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->save();
        $roleName = $request->input('role');


        
        
        $role = Role::where('name', $roleName)->first();
if($role) {
    $users->assignRole($role);
}


        return redirect('usuarios')->with('notificacion', "Usuario creado correctamente");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('UserManagement.modal-users.modal-view', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('UserManagement.modal-users.modal4', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            //'name_user' => 'required|max:250',
            //'lastname_user' => 'required|max:250',
            'username' => 'required|max:250|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required'
        ]);

        $users = User::find($id);
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->save();
        
        $users->roles()->detach();

        if ($request->role) {
            $role = Role::where('name', $request->role)->first();
            $users->assignRole($role);
        }

        $users->assignRole($request->role);

        return redirect('usuarios')->with('notificacion', "Usuario editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect("usuarios")->with('notificacion', "Usuario editado correctamente");
    }
}