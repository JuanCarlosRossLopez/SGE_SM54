<?php

namespace App\Http\Controllers\Presidencies;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Division;
use App\Models\presidencies;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class PresidenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $users = User::all();
    $careers = Career::all();
    $divisions = Division::all();
    $presidencies = Presidencies::paginate(10); // Corregido: 'presidencies' en minúscula y usando el modelo Presidencies

    return view('presidencies.presidencies', compact('presidencies', 'users', 'careers', 'divisions'));
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
            'president_name' => 'required|max:250',
            'president_lastname' => 'required|max:250',
            'payroll' => 'required'
        ]);

        $user = new User();

        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user_id = $user->id;
        $role = Role::where('name', 'Presidente')->first();
        $user->assignRole($role);


        $presidencies = new presidencies();
        $presidencies->president_name = $request->input('president_name');
        $presidencies->president_lastname = $request->input('president_lastname');
        $presidencies->payroll_president = $request->input('payroll');
        $presidencies->user_id = $user_id;
        $presidencies->division_id = $request->division_id;
        $presidencies->career_id = $request->career_id;



        $presidencies->save();



        return redirect('presidentes')->with('notificacion', "Presidente creado correctamente");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $president = presidencies::find($id);
        //return view();
        //no tenemos modal de showXDD
        return view('UserManagement.view_modal_teachers', compact('presidencies'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $president = presidencies::find($id);
        return view('UserManagement.edit_presidencies', compact('president'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'president_name' => 'required|max:250',
            'president_lastname' => 'required|max:250',
            'payroll_president' => 'required'
        ]);

        $user = user::find($id);
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user_id = $user->id;
        $role = Role::where('name', 'Presidente')->first();
        $user->assignRole($role);
        $user->update();

        $president_id = $user->presidencies->id;
        
        $presidencies = presidencies::find($president_id);
        $presidencies->president_name = $request->input('president_name');
        $presidencies->president_lastname = $request->input('president_lastname');
        $presidencies->payroll_president = $request->input('payroll_president');
        $presidencies->user_id = $user_id;
        $presidencies->career_id = $request->career_id;
        $presidencies->division_id = $request->division_id;
        $presidencies->update();


        if ($presidencies->update()){
            return redirect('usuarios')->with('notificacion', "Actualizado creado correctamente");
        }else{
            return redirect('usuarios')->with('notification', 'Error al actualizar el presidente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $president_id = $user->presidencies->id;

        $president = presidencies::find($president_id);

        $president->delete();

        $user->delete();
        return redirect('usuarios')->with('notificacion', 'Presidente eliminado correctamente');
    }
}
