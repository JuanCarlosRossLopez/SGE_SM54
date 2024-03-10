<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class ControllerEvent extends Controller
{

    //Funciín para vista de formulario, para crear un evento
    public function form()
    {
        // return view("evento.form");
    }

    public function create(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date'
        ]);

        Event::create([
            'titulo' => $request->input("titulo"),
            'descripcion' => $request->input("descripcion"),
            'fecha' => $request->input("fecha")
        ]);
    }
}
