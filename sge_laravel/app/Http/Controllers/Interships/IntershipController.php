<?php

namespace App\Http\Controllers\Interships;
use App\Http\Controllers\Controller;
use App\Models\Intership;
use Illuminate\Http\Request;

class IntershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interships = Intership::all();
        return view('Interships', compact('Interships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $interships = Intership::all();
        return view('Interships.create', compact('Interships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'type_intership' => 'required|max:255',
        'description_intership' => 'required',
    ]);

    $interships = new Intership();
    $interships->type_intership = $request->type_intership;
    $interships->description_intership = $request->description_intership;

    $interships->save();
    return redirect('Interships');



}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $interships = Intership::find($id);
        return view('Interships.show', compact('Interships'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $interships = Intership::find($id);
        return view('Interships.edit', compact('Interships'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $interships = Intership::find($id);
        $interships->type_intership = $request->type_intership;
        $interships->description_intership = $request->description_intership;   
        $interships->save();

        return redirect('Interships')->with('notificacion', 'si cambio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $interships = Intership::find($id);
        $interships->delete();
        return redirect('Interships')->with('notificacion', 'si elimino');
    }
}
