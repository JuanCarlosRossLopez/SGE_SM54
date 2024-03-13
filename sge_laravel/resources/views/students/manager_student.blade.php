@extends('test.test_template')

@section('titulo')
    Lista de Alumnos 
@endsection

@section('contenido')
<div class="back_conteiner">
  <div class="top_conteiner">
      <label>Gestor de estudiantes</label>
      <label>
          <!-- Este svg es el icono -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
          </svg>
      </label>
  </div>

  <div class="content_conteiner">
      <div class="flex flex-row items-center gap-2">
          <label class="conteiner_word_title">Vista de Estudiantes Actuales</label>
      </div>
      <!-- Aquí va todo lo que está en tu vista -->
  </div>
</div>

<!-- De aquí para abajo es tu vista -->
<div class="table-container mx-auto items-center">
    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
        <a href="{{ route('estudiantes.create') }}">Crear Alumno</a>
        <thead>
            <thead class="bg-gray-50">
            <tr>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Foto
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Matricula
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Proyecto
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <!-- Aquí puedes agregar las filas de datos -->
            @foreach ($students as $student)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://www.w3schools.com/howto/img_avatar.png" alt="">
                            </div>
                        </div>
                   <div class="ml-4">     
                    <td class="text-center border-b">{{ $student->id }} </td>
                    <td class="text-center border-b">{{ $student->id_student }} </td>
                    <td class="text-center border-b">{{ $student->student_name }} </td>
                    <td class="text-center border-b">{{ $student->project_creator }} </td>
                    <td class="border-b">
                        <a href="{{ route('estudiantes.show' , $student->id) }}" class="text-blue-500">Ver</a>
                        <a href="{{ route('estudiantes.edit' , $student->id) }}" class="text-yellow-500">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button type="submit" class="text-red-500">Eliminar</button>
                            </div>
                        </form>
                    </td> 
                   </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
