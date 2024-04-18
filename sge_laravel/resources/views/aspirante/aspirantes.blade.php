@extends('test.final_template')

@section('title', 'Bienvenido aspirante')
@section('contenido')
    <div class="container mx-auto rounded-lg p-6">
        <h1 class="text-3xl font-semibold mb-4">Bienvenido Aspirante</h1>
        <form action="{{ route('aspirante.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="student_name" class="block text-sm font-medium text-gray-700">Nombre del estudiante</label>
                <input type="text" name="student_name" id="student_name" value="{{ $user->student->student_name }}"
                    class="rounded-md border  border-gray-300 p-2 w-3/5 bg-gray-100">
            </div>

            <div class="mb-3">
                <label for="id_student" class="block text-sm font-medium text-gray-700">Matrícula</label>
                <input type="text" name="id_student" id="id_student" value="{{ $user->student->id_student }}"
                    class="rounded-md border border-gray-300 p-2 w-3/5 bg-gray-100">
            </div>

            <div class="mb-3">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña"
                    class="rounded-md border border-gray-300 p-2 w-3/5">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="division_name" class="block text-sm font-medium text-gray-700">División</label>
                <input type="text" name="division_name" id="division_name"
                    value="{{ $user->student->division->division_name }}"
                    class="rounded-md border border-gray-300 p-2 w-3/5 bg-gray-100">
            </div>

            <div class="mb-3">
                <label for="career_name" class="block text-sm font-medium text-gray-700">Carrera</label>
                <input type="text" name="career_name" id="career_name" value="{{ $user->student->career->career_name }}"
                    class="rounded-md border border-gray-300 p-2 w-3/5 bg-gray-100">
            </div>

            <div class="mb-3">
                <label for="group_name" class="block text-sm font-medium text-gray-900">Grupo</label>
                <input type="text" name="group_name" id="group_name" value="{{ $user->student->group->group_name }}"
                    class="rounded-md border border-gray-300 p-2 w-3/5 bg-gray-100">
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-900">Guardar</button>
            </div>
        </form>
    </div>
@endsection
