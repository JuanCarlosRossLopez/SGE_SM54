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
        return view ('teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_Teacher');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_teacher' => 'required|unique:teacher|max:8',
            'teacher_name' => 'required|max:250',
            'teacher_email' => 'required',
            'division_id' => 'required',
            'user_id' => 'required'
        ]);
        
            $teacher = new Teachers();
            $teacher -> teacher_name = $request ->teacher_name;
            $teacher -> teacher_email = $request ->teacher_email;
            $teacher -> division_id = $request ->division_id;
            $teacher -> user_id = $request ->user_id;
            $teacher -> save();

            return redirect('teachers');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher=Teachers::find($id);
        return view('show-teacher', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teachers::find($id);
        return view('edit-teacher', ['teachers' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    /* valida los datos del docente nuevamente, toma sus datos, lo busca por id, tomando el model, los guarda
    y manda una notificación y los regresa a la vista donde se encuentran los otros datos */
    {
        $request->validate([

            'id_teacher' => 'required|unique:teacher|max:8',
            'teacher_name' => 'required|max:250',
            'teacher_email' => 'required',
            'division_id' => 'required',
            'user_id' => 'required'
           
        ]);
        
        $teacher = Teachers::find($id);
        $teacher -> teacher_name = $request ->teacher_name;
        $teacher -> teacher_email = $request ->teacher_email;
        $teacher -> division_id = $request ->division_id;
        $teacher -> user_id = $request ->user_id;
        $teacher -> save();

        return redirect('teachers')->with('notificacion', 'Cambio Guardado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /*toma el model y lo busca po id, lo llama con el nombre teacher, con el cual lo elimina y lo vuelve a llevar a 
        la vista donde se encuentra el resto de la información*/
        $teacher = Teachers::find($id);
        $teacher -> delete();
        return redirect('teachers') -> with('notificación', 'Se elimino correctamente');
    }
}
