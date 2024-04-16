<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Division;
use App\Models\Career;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Http;

class StudentsController extends Controller 
{
    public function index()
    {
        $Divisions = Division::all();
        $Students = Students::paginate(10);
    
        return view('students.students', compact('Students', 'Divisions'));
    }
    
    public function getStudentData($matricula)
    {
        $response = Http::get('http://localhost:3000/api/estudiantes/matricula/' . $matricula);
    
        if ($response->ok()) {
            return $response->json();
        } else {
            return response()->json(['error' => 'No se encontró ningún estudiante con esa matrícula'], 404);
        }
    }
    

    public function showStudentForm()
    {
        return view('students.form');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Crear un nuevo usuario sin el campo name

        $user = new User();

        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Asignar el rol de Estudiante al usuario
        $role = Role::where('name', 'Estudiante')->first();
        $user->assignRole($role);

        // Obtener el ID del usuario recién creado
        $user_id = $user->id;

        // Crear un nuevo estudiante y asignar los valores recibidos de la API
        $student = new Students();
        $student->student_name = $request->input('student_name');
        $student->id_student = $request->input('id_student');
        $student->careers_id = $request->input('carrer_id');
        $student->group_id= $request->input('group_id');
        $student->division_id = $request->input('division_id');
        $student->user_id = $user_id;
        $student->save();

        return redirect('usuarios')->with('notification', 'Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::find($id);
        return view('students.show', compact('student'));
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
     





        $student = Students::find($id);
        $student->student_name = $request->input('student_name');
        $student->id_student = $request->input('id_student');
        $student->group_id = $request->input('group_id');
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
        return back()->with('notification', 'Estudiante eliminado correctamente');
    }
}
