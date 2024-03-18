<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teachers::all();
        return view('teachers.teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_teacher' => 'required|max:250|unique:teachers',
            'payroll' => 'required|integer|unique:teachers',
            'id_user' => 'nullable',
            'division_id' => 'nullable'
        ]);

        $teacher = new Teachers();
        $teacher->name_teacher = $request->input('teacher_name');
        $teacher->payroll = $request->input('payroll');
        $teacher->id_user = $request->input('id_user');
        $teacher->division_id = $request->input('division_id');
        $teacher->save();

        return redirect('teachers')->with('notification', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teachers::find($id);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teachers::find($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_name' => 'required|max:250',
            'payroll' => 'required|integer',
            'id_user' => 'nullable',
            'division_id' => 'nullable'
        ]);

        $teacher = Teachers::find($id);
        $teacher->teacher_name = $request->teacher_name;
        $teacher->payroll = $request->payroll;
        $teacher->id_user = $request->id_user;
        $teacher->division_id = $request->division_id;
        $teacher->save();

        return redirect('teachers')->with('notification', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teachers::find($id);
        $teacher->delete();
        return redirect('teachers')->with('notification', 'Teacher deleted successfully');
    }
}
