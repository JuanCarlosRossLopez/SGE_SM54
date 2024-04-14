<?php

namespace App\Http\Controllers\TeacherDashboard;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\Students;
use App\Models\Teaching_advice;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $usuario = Auth::user();
        
            if ($usuario->teachers) {
                $maestro = $usuario->teachers;
                $id = $maestro->id;
                $Advising = Teaching_advice::where('teacher_id', $id)->get();
        
                foreach ($Advising as $advising) {
                    $advising->student->load('projectManagement');
                }
        
                $Students = Students::all();
                return view('strikes.advised_students', compact('Advising', 'Students'));
            }
        }
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
        //
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
        //
    }
}
