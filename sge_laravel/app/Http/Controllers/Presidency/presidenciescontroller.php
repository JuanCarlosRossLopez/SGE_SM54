<?php

namespace App\Http\Controllers\Presidency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presidencies;

class presidenciescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidencies = Presidencies::all();
        return view('UserManagement.presidencies', ['presidencies' => $presidencies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presidencies');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'presidencies_name' => 'required|string',
            'payroll_presidencies' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'division_id' => 'required|exists:divisions,id',
            'careers_id' => 'required|exists:careers,id',
        ]);
        //crea la informacion del estudiante
        Presidencies::create($request->all());
        //lo manda a su respectivo apartado 
        return redirect()->route('presidencies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        
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
