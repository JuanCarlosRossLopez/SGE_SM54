<?php

namespace App\Http\Controllers\Groups;
use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras=Career::all();
        $grupos = Group::all();
        return view('groups.groups', compact('grupos','carreras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = new Group();
        return view('groups.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'group_name' => 'required|max:255',
        'career_id' => 'required',
    ]); 

        $group = new Group();
        $group-> group_name = $request-> input('group_name');
        $group->career_id = $request->input('career_id');
        
        $group->save();

        return redirect('grupos')->with('notificacion', 'El grupo se creo correctamente')   ;

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::find($id);
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group = Group::find($id);
        return view('groups.groups_edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'group_name' => 'required|max:255',
        'career_id' => 'required',
    ]); 

        $group = Group::find($id);
        $group->group_name = $request->group_name;
        $group->career_id = $request->career_id;
        $group->save();

        return redirect('grupos')->with('notificacion', 'El grupo se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect('grupos')->with('notificacion', 'El grupo se elimino correctamente');
    }
}
