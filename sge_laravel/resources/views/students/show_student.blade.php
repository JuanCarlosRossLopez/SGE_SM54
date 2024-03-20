@extends('test.test_template')
@section('titulo')
    Mostrar Alumnos
@endsection
@section('contenido')
<p>Nombre del alumno:<b> {{ $student->name_student }}</b></p>
@endsection