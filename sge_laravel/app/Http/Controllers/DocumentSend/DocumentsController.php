<?php

namespace App\Http\Controllers\DocumentSend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Teaching_advice;
use App\Models\Notifications;
use Auth;

class DocumentsController extends Controller
{

    public function enviar(Request $request){
        $userID = Students::where('id', $request->student_id)->first()->user_id;
        
        //$student = Notifications::where('user_id', $userID)->first();

        switch($request->type){
            case "1":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Cédula de Anteproyecto";
                $notificacion->type_notification= "Cédula de Anteproyecto";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion-> save();

                return redirect()->back()->with('notificacion',"Cédula enviada correctamente");
            break;

            case "2":
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Autorización Digitalización";
                $notificacion->type_notification= "Carta de Autorización Digitalización";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion-> save();

                return redirect()->back()->with('notificacion',"Carta enviada correctamente");
                break;

            case "3": 
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Aprobación Memoria";
                $notificacion->type_notification= "Carta de Aprobación Memoria";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion-> save();

                return redirect()->back()->with('notificacion',"Aprobación enviada correctamente");
                break;

            case "4": 
                $notificacion = new Notifications();
                $notificacion->content = "Ya puedes descargar tu Carta de Amonestación";
                $notificacion->type_notification= "Carta de Amonestación";
                $notificacion->user_id = $userID;
                $notificacion->status = 0;
                $notificacion-> save();

                return redirect()->back()->with('notificacion',"Amonestación enviada correctamente");
                break;
        }
        
        return back();
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $type = $request->input('type');

            $studentList = Teaching_advice::where('teacher_id', $user->Teachers->id)->get();

            $filteredStudents = $studentList->filter(function ($student) use ( $type) {
                $studentId = Students::where('id', $student->student_id)->first()->user_id;
                $studentNotifications = Notifications::where('user_id', $studentId)->pluck('type_notification')->toArray();
                switch ( $type) {
                    case "1":
                        return !in_array("Cédula de Anteproyecto", $studentNotifications);
                    case "2":
                        return !in_array("Carta de Autorización Digitalización", $studentNotifications);
                    case "3":
                        return !in_array("Carta de Aprobación Memoria", $studentNotifications);
                    case "4":
                        return !in_array("Carta de Amonestación", $studentNotifications);
                    default:
                        return true;
                }
            });

            $students = $filteredStudents->map(function ($student) {
                $studentDetails = Students::where('id', $student->student_id)->first();
                $student->student_name = $studentDetails->student_name;
                $student->id_student = $studentDetails->id_student;
                $student->anteproject_id = $studentDetails->anteproject_id;
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
