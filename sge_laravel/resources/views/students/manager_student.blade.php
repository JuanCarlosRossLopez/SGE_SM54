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
          
          <label class="conteiner_word_title">Podras gestionar los estudiantes actuales que se encuntran registrados en el sistema SGE</label>
      </div>
      <!-- Aquí va todo lo que está en tu vista -->
  </div>
</div>

<!-- De aquí para abajo es tu vista -->
<div class="table-container mx-auto items-center">
    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
        <button class="show-modal" >Crear Alumno</a>
        <thead>
            <thead class="bg-gray-50  justify-center items-center object-center text-center py-20">
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
                        <form id="deleteForm{{$student->id}}" action="{{ route('estudiantes.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button type="button" onclick="showConfirmationModal({{$student->id}})" class="text-red-500">Eliminar</button>
                            </div>
                        </form>
                        
                        <!-- Modal de confirmación -->
                        <div id="confirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <p>¿Estás seguro de que deseas eliminar este estudiante?</p>
                                <div class="flex justify-end mt-4">
                                    <button onclick="deleteStudent()" class="bg-red-500 text-white px-4 py-2 mr-2">Eliminar</button>
                                    <button onclick="hideConfirmationModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            let studentIdToDelete;
                        
                            function showConfirmationModal(studentId) {
                                studentIdToDelete = studentId;
                                const modal = document.getElementById('confirmationModal');
                                modal.classList.remove('hidden');
                            }
                        
                            function hideConfirmationModal() {
                                const modal = document.getElementById('confirmationModal');
                                modal.classList.add('hidden');
                            }
                        
                            function deleteStudent() {
                                const form = document.getElementById('deleteForm' + studentIdToDelete);
                                form.submit();
                            }
                        </script>
                    </td> 
                   </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal-wrapper">
    <div class="modal hidden fixed top-0 left-0 w-full h-[700px] overflow-hidden flex justify-center items-center bg-opacity-500">
        <div class="bg-green-500 w-[600px] rounded shadow-lg max-w-4xl ">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg justify-center items-center text-white text-center">Registrar Alumnos</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body mb-0 overflow-y-auto h-[100vh]">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-center font-semibold text-2xl">Registrar Alumno</h1>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div class="bg-white rounded-lg p-8 mx-auto flex justify-center items-center flex-col">
                                <form action="#funciones futura" method="POST" class="w-full" id="studentForm">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="name_student" class="text-gray-700 block mb-2">Nombre:</label>
                                        <input type="text" name="name_student" id="name_student" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label for="lastname_student" class="text-gray-700 block mb-2">Apellido Paterno:</label>
                                        <input type="text" name="lastname_student" id="lastname_student" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label for="lastname_materno" class="text-gray-700 block mb-2">Apellido Materno:</label>
                                        <input type="text" name="lastname_materno" id="lastname_materno" class="form-control w-full
                                    </div>
                                    <div class="mb-4">
                                        <label for="id_student" class="text-gray-700 block mb-2">Matricula:</label>
                                        <input type="text" name="id_student" id="id_student" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                </div> <!-- end of first column -->
                                <div class="flex justify-center items-center flex-col"> <!-- start of second column -->
                                    <div class="mb-4">
                                        <label for="division" class="text-gray-700 block mb-2">Division:</label>
                                        <input type="text" name="division" id="division" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label for="carrera" class="text-gray-700 block mb-2">Carrera:</label>
                                        <input type="text" name="carrera" id="carrera" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label for="grupo" class="text-gray-700 block mb-2">Grupo:</label>
                                        <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label for="asesor" class="text-gray-700 block mb-2">Asesor:</label>
                                        <input type="text" name="asesor" id="asesor" class="form-control w-full border rounded-lg py-2 px-4">
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <button type="button" class="add-student bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    const addStudentBtn = document.querySelector('.add-student');

    showModal.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });

    closeModal.forEach(close => {
        close.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    });

    addStudentBtn.addEventListener('click', function() {
        const form = document.getElementById('studentForm');
        const formData = new FormData(form);

        alert('Alumno Agregado correctamente');
        form.reset();
    });
</script>
@endsection
