@if (Auth::user()->teachers)
    Bienvenido Asesor, {{ Auth::user()->teachers->name_teacher }}
@else
    No se encontró información del asesor para este usuario.
@endif


@foreach($students as $student)
    <p>Nombre del Estudiante: {{ $student->student_name }}</p>
    <!-- Mostrar más información del estudiante según tus necesidades -->
@endforeach

@foreach($Project_management as $project)
    <p>Nombre del Proyecto: {{ $project->project_title }}</p>
    <!-- Mostrar más información del proyecto según tus necesidades -->
@endforeach