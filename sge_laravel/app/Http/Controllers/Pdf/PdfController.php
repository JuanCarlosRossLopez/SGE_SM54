<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Http\Request;
use App\Models\Students;

class PdfController extends Controller
{
    //
    public function anteproyecto(){
        $student = Students::all();

        $imagen_path = public_path("img/LogoUT.png");
        $datos = [
            "imagen_path" => $imagen_path,
            "student" => $student
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
