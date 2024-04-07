<?php

namespace App\Http\Controllers\Anteprojects;
use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project_management;
use App\Models\Project_Likes;
use App\Models\User;


class Anteprojects2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        $users = User::all();
        $project_management = Project_management::paginate(10);

        return view('anteproject_cedule.table_anteprojects', compact('project_management','students', 'users'));

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
        $like = new Project_Likes();
        $like->teacher_id=$request->input('teacher_id');
        $like->project_management_id=$request->input('project_management_id');

        $like->save();

        return back()->with('notification','Dio like correctamente');

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
        $like = Project_Likes::find($id);

        if(!$like){
            return back()->with('error','No se encontro el Like');
        }

        $like->delete();
        return back()->with('notifiaction','Like quitado correctamente');

    
    }
}
