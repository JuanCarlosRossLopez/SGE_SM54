@extends('test.test_template')

@section('title')
    Credencial del Estudiante
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>{{ __('Credencial del Estudiante') }}</h3>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <h4>{{ $student->student_name }}</h4>
                        <p class="text-secondary mb-1">ID: {{ $student->id }}</p>
                        <p class="text-secondary mb-1">ID del Estudiante: {{ $student->id_student }}</p>
                        <p class="text-secondary mb-1">Creador del Proyecto: {{ $student->project_creator }}</p>
                        <p class="text-muted font-size-sm">Strike: {{ $student->strike }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection