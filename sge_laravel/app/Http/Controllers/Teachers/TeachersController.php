<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Division;
use App\Models\User;
use Spatie\Permission\Models\Role;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students = Students::all();
        $teachers = Teachers::paginate(10);
        $division = Division::all();
        $users = User::all();

    
        return view('teachers.teachers', compact('teachers', 'Students', 'division','users'));
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

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user_id = $user->id;

        $role = Role::where('name', 'Asesor')->first();
        $user->assignRole($role);



        $teacher = new Teachers();
        $teacher->name_teacher = $request->input('teacher_name');
        $teacher->payroll = $request->input('payroll');
        $teacher->id_user = $user_id;
        $teacher->division_id = $request->input('division_id');
        $teacher->save();

        return back()->with('notification', 'Teacher created successfully');
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
       
        $user_id = $request->id_user;

        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();



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