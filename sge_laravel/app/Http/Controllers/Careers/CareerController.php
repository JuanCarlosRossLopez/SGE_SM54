<?php

namespace App\Http\Controllers\Careers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
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
        return view('careers.careers', compact('careers', 'divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::all();
        return view('careers.create', compact('divisions'));
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

        return redirect()->route('carreras.index')->with('notificacion', 'Carrera creada correctamente');
    }

    /**
     * Store multiple careers in storage.
     */
    public function storeMasivo(Request $request)
    {
        // Validación de datos
        $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'career_names.*' => 'nullable|string|max:255',
            'career_descriptions.*' => 'nullable|string|max:255',
        ]);
    
        // Recorrer y crear las carreras
        foreach ($request->career_names as $index => $career_name) {
            // Verificar si el nombre y la descripción de la carrera no están vacíos antes de crearla
            if (!empty($career_name) || !empty($request->career_descriptions[$index])) {
                Career::create([
                    'division_id' => $request->division_id,
                    'career_name' => $career_name,
                    'career_description' => $request->career_descriptions[$index],
                ]);
            }
        }
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('carreras.index')->with('notificacion', 'Carreras creadas exitosamente.');
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
    public function edit($id)
    {
        $career = Career::find($id);
        $divisions = Division::all();
        return view('careers.edit_modal_careers', compact('career', 'divisions'));
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

        return redirect()->route('carreras.index')->with('notificacion', 'Carrera editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('carreras.index')->with('notificacion', 'Carrera eliminada correctamente');
    }
}
