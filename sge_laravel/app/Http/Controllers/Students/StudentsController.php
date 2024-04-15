<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Division;
use Spatie\Permission\Models\Role;

class StudentsController extends Controller 
{
    public function index()
    {
        $Users = User::all();
        $Divisions = Division::all();
        $Teachers = Teachers::all();
        $Students = Students::paginate(10);
        // $teachers = Teachers::with('user')->get();
    
        return view('students.students', compact('Students','Teachers', 'Divisions', 'Users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.students', compact('Students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $user = new User();

        
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        $role = Role::where('name', 'Estudiante')->first();
        $user->assignRole($role);

        $user_id = $user->id;


        $student = new Students();
        $student->student_name = $request->input('student_name');
        $student->id_student = $request->input('id_student');
        $student->project_creator = $request->input('project_creator');
        $student->user_id = $user_id; // Asignar el ID del usuario
        $student->division_id = $request->input('division_id');
        $student->anteproject_id = $request->input('anteproject_id');
        $student->adviser_id = $request->input('adviser_id');        
        $student->save();
        return redirect('usuarios')->with('notification', 'Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::find($id);
        return view('students.show', compact ('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Students::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'id_student' => 'required|string|max:255',
            'division_id' => 'required|integer',
        ]);

            $student = Students::find($id);
            $student->student_name = $request->input('student_name');
            $student->id_student = $request->input('id_student');
            $student->division_id = $request->input('division_id');

            $student->save();

            return redirect('estudiantes')->with('notification', 'Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Students::find($id);
    
        if (!$students) {
            return back()->with('error', 'No se encontro al alumno');
        }
    
        $students->delete();
        return back()->with('notification', 'Estudiante elimindao correctamente');
    }
}