<?php
//Esto no funciona
namespace App\Http\Controllers\Anteprojects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anteproject; 
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Anteprojects\AnteprojectsRequest;

class AnteprojectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anteprojects = Anteproject::all();
        return view('anteprojects.index', compact('anteprojects'));
    }

    public function accept ($id)
    {
        $anteprojects = Anteproject::find($id);

        if (!$anteprojects) {
            return back()->with('notificacion', 'No se encontró el anteproyecto');
        }

        $anteprojects->status = 'aceptado';
        $anteprojects->save();

        return back()->with('notificacion', 'Anteproyecto aceptado');
    }

    public function reject ($id)
    {
        $anteprojects = Anteproject::find($id);

        if (!$anteprojects) {
            return back()->with('notificacion', 'No se encontró el anteproyecto');
        }

        $anteprojects->status = 'rechazado';
        $anteprojects->save();

        return back()->with('notificacion', 'Anteproyecto rechazado');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anteprojects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anteproject_title' => 'required|string',
            'information' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'project_status_id' => 'required|exists:status_projects,id',
            'intership_id' => 'required|exists:interships,id',
            'start_date' => 'required|date',
            'finished_date' => 'required|date|after:start_date',
        ]);

        Anteproject::create($request->all());
        return redirect()->route('anteprojects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anteproject $anteproject)
    {
        
        return view('anteprojects.show', compact('anteproject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anteproject=Anteproject::find($id); 
        return view('anteprojects.edit', compact('anteproject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnteprojectsRequest $request, $id): RedirectResponse
    {
        $anteproject=Anteproject::find($id);
        $anteproject->update($request->all());
        return redirect()->route('anteprojects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anteproject=Anteproject::find($id);
        $anteproject->delete();
        return redirect()->route('anteprojects.index');
    }
}
