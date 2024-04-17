<?php

namespace App\Http\Controllers\Divisions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Career;
use Illuminate\Http\RedirectResponse;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::paginate(10);
        return view('division_forms.division', compact('divisions'));
    }
   

    public function careers(Division $division)
    {
        $careers = $division->career()->get(['id', 'career_name']);

        if ($careers->isEmpty()) {
            return response()->json(['message' => 'No se encontraron carreras para esta división'], 404);
        }
        return response()->json($careers);
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

        $request->validate([
            'division_name' => 'required|string'
        ]);

        $divisions = new Division();
        $divisions->division_name = $request->input('division_name');
        $divisions->save();

        return redirect('division');
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
        $divisions = Division::find($id);
        return view('division_forms.edit_division', ['division_view' => $divisions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $division = Division::find($id);

        $division->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $division = Division::find($id);


        $division->delete();
        return back();
    }
}
