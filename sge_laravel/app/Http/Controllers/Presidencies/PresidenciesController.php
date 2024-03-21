<?php

namespace App\Http\Controllers\Presidencies;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Division;
use App\Models\presidencies;
use App\Models\User;
use Illuminate\Http\Request;

class PresidenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        $divisions = Division::all();
        $users = User::all();
        $presidencies = presidencies::paginate(10);

        return view('presidencies.presidencies', compact('presidencies', 'careers', 'divisions', 'users'));
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
            'payroll_president' => 'required'
        ]);

        $presidencies = new presidencies();
        $presidencies->president_name = $request->input('president_name');
        $presidencies->president_lastname = $request->input('president_lastname');
        $presidencies->payroll_president = $request->input('payroll_president');

        // Guardar el modelo presidencies antes de asignar relaciones
        $presidencies->save();

        $userName = $request->input('user');
        $careerName = $request->input('career');
        $divisionName = $request->input('division');

        // Obtener el usuario, la carrera y la división
        $user = User::where('name', $userName)->first();
        $career = Career::where('career_name', $careerName)->first();
        $division = Division::where('division_name', $divisionName)->first();

        // Asignar usuario, carrera y división si se encontraron
        if ($user) {
            $presidencies->user()->associate($user);
        }
        if ($career) {
            $presidencies->career()->associate($career);
        }
        if ($division) {
            $presidencies->division()->associate($division);
        }

        // Guardar el modelo presidencies después de asignar relaciones
        $presidencies->save();


        return redirect('presidentes')->with('notificacion', "Presidente creado correctamente");
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
