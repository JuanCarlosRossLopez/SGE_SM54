<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Division;
use App\Models\Career;
use App\Models\Teachers;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $Divisions = Division::all();
        $users = User::paginate(10);
        $careers = Career::all();
        $Teachers = Teachers::all();

        return view('UserManagement.users', compact('users', 'roles','Divisions','careers','Teachers'));
    }


    public function filterByRole(Request $request)
    {
        $roleName = $request->input('role');

        if ($roleName == 'Todos') {
            $users = User::paginate(10);
        } else {
            $users = User::role($roleName)->paginate(10);
        }

        $roles = Role::all();
        $Divisions = Division::all();
        $careers = Career::all();

        return view('UserManagement.users', compact('users', 'roles', 'Divisions','careers'));
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
            'name' => 'required|unique:users|max:250',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);

        $users = new User();
        // $users->name_user = $request->input('name_user');
        // $users->lastname_user = $request->input('lastname_user');
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->save();

        $role = Role::where('name', 'Administrador')->first();


        $users->assignRole($role);





        

        return redirect('usuarios')->with('notificacion', "Usuario creado correctamente");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        // return view('UserManagement.modal-users.modal-view', ['user' => $user]);
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
            'name' => 'required|max:250|unique:users,name,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required'
        ]);

        $users = User::find($id);
        $users->name = $request->input('name');
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

        return redirect("usuarios")->with('notificacion', "Usuario eliminado correctamente");
    }
}