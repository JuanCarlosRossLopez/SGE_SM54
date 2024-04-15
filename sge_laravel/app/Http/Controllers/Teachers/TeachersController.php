<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Division;
use App\Models\User;
use PhpOffice\PhpWord\Shared\Validate;
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


        return view('teachers.teachers', compact('teachers', 'Students', 'division', 'users'));
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

        $messages = [
            'payroll.required' => 'La nomina es requerida',
            'payroll.digits' => 'La nomina debe tener 11 digitos',
            'teacher_name.required' => 'El nombre del asesor es requerido',
            'division_id.required' => 'La division es requerida',
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'teacher_name' => 'required',
            'payroll' => 'required|digits:11',
            'division_id' => 'required',
        ], $messages);

        

        

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

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'name_teacher' => 'required',
            'payroll' => 'required',
            'division' => 'required',
        ]);


        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $teacher_id = $user->teachers->id;

        $teacher = Teachers::find($teacher_id);
        $teacher->name_teacher = $request->input('name_teacher');
        $teacher->payroll = $request->input('payroll');
        $teacher->id_user = $id;
        $teacher->division_id = $request->input('division_id');
        $teacher->save();

        return redirect('usuarios')->with('notification', 'Asesor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {



        $user = User::find($id);

        $teacher_id = $user->teachers->id;



        $teacher = Teachers::find($teacher_id);


        $teacher->delete();

        $user->delete();
        return redirect('usuarios')->with('notification', 'Teacher deleted successfully');
    }
}
