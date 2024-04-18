<?php

namespace App\Http\Controllers\DocumentSend;

use App\Http\Controllers\Controller;
use App\Models\Project_management;
use App\Models\Status_project;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Teaching_advice;
use App\Models\Notifications;
use Auth;

class DocumentsController extends Controller
{

    public function enviar(Request $request)
    {
        $userID = Students::where('id', $request->student_id)->first()->user_id;

        //$student = Notifications::where('user_id', $userID)->first();

        switch ($request->type) {
            case "1":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Cédula de Anteproyecto";
                $notificacion->type_notification = "Cédula de Anteproyecto";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion->save();

                return redirect()->back()->with('notificacion', "Cédula enviada correctamente");
                break;

            case "2":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Autorización Digitalización";
                $notificacion->type_notification = "Carta de Autorización Digitalización";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion->save();

                return redirect()->back()->with('notificacion', "Carta enviada correctamente");
                break;

            case "3":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Aprobación Memoria";
                $notificacion->type_notification = "Carta de Aprobación Memoria";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion->save();

                return redirect()->back()->with('notificacion', "Aprobación enviada correctamente");
                break;

            case "4":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Amonestación";
                $notificacion->type_notification = "Carta de Amonestación";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion->save();

                return redirect()->back()->with('notificacion', "Amonestación enviada correctamente");
                break;
        }

        return back();
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $type = $request->input('type');

        if ($user->hasRole('Cordinacion') || $user->hasRole('Administrador')) {
            $studentList = Teaching_advice::all();
        } else {
            $studentList = Teaching_advice::where('teacher_id', $user->Teachers->id)->get();
        }

        $filteredStudents = $studentList->map(function ($student) use ($type) {
            $studentId = Students::where('id', $student->student_id)->first()->user_id;
            $studentNotifications = Notifications::where('user_id', $studentId)->pluck('type_notification')->toArray();
            switch ($type) {
                case "1":
                    $student->Recibido = in_array("Cédula de Anteproyecto", $studentNotifications) ? 1 : null;
                    break;
                case "2":
                    $student->Recibido = in_array("Carta de Autorización Digitalización", $studentNotifications) ? 2 : null;
                    break;
                case "3":
                    $student->Recibido = in_array("Carta de Aprobación Memoria", $studentNotifications) ? 3 : null;
                    break;
                case "4":
                    $student->Recibido = in_array("Carta de Amonestación", $studentNotifications) ? 4 : null;
                    break;
                default:
                    $student->Recibido = null;
                    break;
            }
            return $student;
        });

        $students = $filteredStudents->map(function ($student) {
            $studentDetails = Students::where('id', $student->student_id)->first();
            $student->student_name = $studentDetails->student_name;
            $student->id_student = $studentDetails->id_student;
            $student->project_title = Project_management::where('student_id', $studentDetails->user->id)->first()->project_title;
            $student->disabled = Project_management::where('student_id', $studentDetails->user->id)->first()->status_id != 3;
            return $student;
        });

        return view('report_generation.teacher_table', compact('students', 'type'));

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
        //
    }
}