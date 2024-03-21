<?php

namespace App\Http\Controllers\Divisions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionController extends Controller
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
        return view('division_forms.create_division');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([])
        /*$request->validate([
            'anteproject_title' => 'required|string',
            'information' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'project_status_id' => 'required|exists:status_projects,id',
            'intership_id' => 'required|exists:interships,id',
            'start_date' => 'required|date',
            'finished_date' => 'required|date|after:start_date',
        ]); o:>*/
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
