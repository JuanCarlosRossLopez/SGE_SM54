<?php

namespace App\Http\Controllers\Careers;


use App\Http\Controllers\Careers;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Controllers\Controller;
use App\Models\Division;


class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        $divisions = Division::all();
        return view ('careers.careers', compact ('careers','divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = Career::all();
        return view ('careers', compact ('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'career_name' => 'required|string',
            'career_description' => 'required|string',
            'division_id' => 'required|exists:divisions,id',
        ]);



        $career = new Career();
        $career->career_name = $request->input('career_name');
        $career->career_description = $request->input('career_description');
        $career->division_id = $request->input('division_id');
        $career->save();
        return redirect("carreras")->with('notificacion', 'Carrera creada correctamente');
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Career::find($id)->students;
        return view('careers.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $career = Career::find($id);
        return view('careers.edit', compact('career')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $career = Career::find($id);
        $career->career_name = $request->career_name;
        $career->career_description = $request->career_description;
        $career->division_id = $request->division_id;
        $career->save();

        return redirect("carreras")->with('notificacion', 'carrera editada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect("carreras")->with('notificacion', 'carrera eliminada correctamente!');
    }
}
