<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\User;


class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students = Students::all();
        $teachers = Teachers::with('user')->get();
    
        return view('teachers.teachers', compact('teachers', 'Students'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.teachers', compact('Students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $teacher = new Teachers();
        $teacher->name_teacher = $request->input('teacher_name');
        $teacher->payroll = $request->input('payroll');
        $teacher->id_user = $request->input('id_user');
        $teacher->division_id = $request->input('division_id');
        $teacher->save();

        return redirect('maestros')->with('notification', 'Teacher created successfully');
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
      
        ]);

        $teacher = Teachers::find($id);
        $teacher->name_teacher = $request->name_teacher;
        $teacher->payroll = $request->payroll;
        $teacher->id_user = $request->id_user;
        $teacher->division_id = $request->division_id;
        $teacher->save();

        return redirect('maestros')->with('notification', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teachers::find($id);
    
        if (!$teacher) {
            return redirect('maestros')->with('error', 'Teacher not found');
        }
    
        $teacher->delete();
        return redirect('maestros')->with('notification', 'Teacher deleted successfully');
    }
}    