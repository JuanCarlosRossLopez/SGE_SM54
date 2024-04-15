<?php

namespace App\Http\Controllers\Pdf;

use Auth;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Teaching_advice;
use App\Models\Teachers;
use App\Models\User;

class PdfController extends Controller
{
    //
    public function anteproyecto(){
        $student = Students::where('user_id', Auth::user()->id)->get(); //asi no se guardará toda la tabla de estudiantes, solo el que esta loggeado
        $adviserID = Teaching_advice::where('student_id', $student->first()->id)->get()->first()->teacher_id; //obtener el id del asesor
        $adviser = Teachers::where('id', $adviserID)->get(); //con el id buscar al asesor
        $adviser_name = $adviser->first()->name_teacher;
        $adviser_email = User::where('id', $adviser->first()->id_user)->get()->first()->email; //obtener el correo del asesor

        $imagen_path = public_path("img/LogoUT.png");
        $datos = [
            "imagen_path" => $imagen_path,
            "student" => $student,
            "adviser_email" => $adviser_email,
            "adviser_name" => $adviser_name
        ];

        $pdf = PDF::loadView('pdf.carta_cedula_ante', $datos);

        return $pdf->stream('cedula.pdf');
    }

    public function aprobacion(){
        $student = Students::all();

        $imagen_path = public_path("img/LogoUT.png");
        $dato = [
            "imagen_path" => $imagen_path,
            "student" => $student
        ];
        $pdf = PDF::loadView('pdf.carta_aprobacion', $dato);
        return $pdf->stream('aprobacion_memoria.pdf');

    }

    public function auto_digit(){
        $student = Students::all();

        $imagen_path = public_path("img/LogoUT.png");
        $date = [
            "imagen_path" => $imagen_path,
            "student" => $student
        ];
        $pdf = PDF::loadView('pdf.cartaau', $date);
        return $pdf->stream('autorizacion.pdf');
    }

    public function amonestacion(){
        $student = Students::all();

        $imagen_path = public_path("img/LogoUT.png");
        $dat = [
            "imagen_path" => $imagen_path,
            "student" => $student
        ];
        $pdf = PDF::loadView('pdf.cartaamonestacion', $dat);
        return $pdf->stream('amonestacion.pdf');
    }
}
