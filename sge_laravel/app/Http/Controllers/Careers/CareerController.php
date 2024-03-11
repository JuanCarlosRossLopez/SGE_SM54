<?php

use App\Http\Controllers\Careers;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        return view ('careers', compact ('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = Career::all();
        return view ('careers.create', compact ('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'career_name' => 'required|max:250',
            'career_description' => 'required|max:100',
            'division_id' => 'required',
        ]);

        $career = new Career();
        $career->career_name = $request->career_name;
        $career->career_description = $request->career_description;
        $career->division_id = $request->division_id;
        
        $career->save();
        return redirect("careers");
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

        return redirect("careers")->with('notificacion', 'si cambio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect("careers")->with('notificacion', 'si elimino');
    }
}
