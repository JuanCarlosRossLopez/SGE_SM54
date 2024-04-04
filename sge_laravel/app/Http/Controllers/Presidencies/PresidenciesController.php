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
        $users = User::all();
        $careers = Career::all();
        $divisions = Division::all();
        $presidencies = presidencies::paginate(10);

        return view('presidencies.presidencies', compact('presidencies', 'users', 'divisions', 'careers'));
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
        $presidencies->user_id = $request->user_id;
        $presidencies->career_id = $request->career_id;
        $presidencies->division_id = $request->division_id;
        
        

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
