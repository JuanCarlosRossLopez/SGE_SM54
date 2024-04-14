<?php

namespace App\Http\Controllers\Coordination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coordinators;
use Spatie\Permission\Models\Role;

class CoordinatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coordinators = Coordinators::all();
        return view('coordination.coordinators_table', compact('coordinators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coordinators = Coordinators::all();
        return view('coordination.coordinator_create', ['coordinators' => $coordinators]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'id_coordinator' => 'required|unique:coordinator|max:8',
            'coordinator_name' => 'required|max:250',
            'division_id' => 'required',
            'user_id' => 'required'
        ]);*/

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        $user_id = $user->id;

        $role = Role::where('name', 'Cordinacion')->first();
        $user->assignRole($role);

        $coordinator = new Coordinators();
        $coordinator->coordinator_name = $request->coordinator_name;
        $coordinator->payroll = $request->payroll;
        $coordinator->division_id = $request->division_id;
        $coordinator->user_id = $user_id;
        $coordinator->save();

        return back()->with('notificacion','Coordinador creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coordinator = Coordinators::find($id);
        return view('coordination.show_coordinator', compact('coordinator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coordinator = Coordinators::find($id);
        return view('coordination.edit_coordinator', ['coordinator' => $coordinator]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {    
        /*
        $request->validate([
            'id_coordinator' => 'required|unique:coordinator|max:8',
            'coordinator_name' => 'required|max:250',
            'division_id' => 'required',
            'user_id' => 'required'
        ]);*/

        $coordinator = Coordinators::find($id);
        $coordinator->coordinator_name = $request->coordinator_name;
        $coordinator->payroll = $request->payroll;
        $coordinator->division_id = $request->division_id;
        $coordinator->user_id = $request->user_id;
        $coordinator->save();

        return redirect('coordination.coordinators_table')->with('notification', 'Coordinador actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coordinator = Coordinators::find($id);

        if (!$coordinator) {
            return redirect('coordinacion')->with('error', 'Coordinador no encontrado');
        }

        $coordinator->delete();
        return redirect('coordinacion')->with('notification', 'Coordinador eliminado exitosamente');
    }
}
