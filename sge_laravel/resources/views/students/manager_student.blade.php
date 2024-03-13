@extends('test.test_template')

@section('title')
    Estudiantes
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Gestor de Estudiantes</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-user-graduate"></i>
                </label>
            </div>
        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de Estudiantes</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>
            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                    
                </div>
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="standar_button hidden"><span class="inside_button ">Si lo necesitas</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">#</th>
                            <th class="theader">Matricula</th>
                            <th class="theader">Nombre</th>
                            <th class="theader">Creador de proyecto</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($students as $student)
                            <tr class="trow">
                                <td class="text-center border-b">{{ $student->id }} </td>
                                <td class="text-center border-b">{{ $student->id_student }} </td>
                                <td class="text-center border-b">{{ $student->student_name }} </td>
                                <td class="text-center border-b">{{ $student->project_creator }} </td>
                                <td class="text-center border-b">        
                                    <a href="{{ route('estudiantes.show' , $student->id) }}" class="text-blue-500">Ver</a>
                                    <a href="{{ route('estudiantes.edit' , $student->id) }}" class="text-yellow-500">Editar</a>
                                    <button onclick="showConfirmationModal({{ $student->id }})" class="text-red-500 show-modal">Eliminar</button>
                                    <form id="deleteForm{{$student->id}}" action="{{ route('estudiantes.destroy', $student->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div id="confirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <p>¿Estás seguro de que deseas eliminar este estudiante?</p>
                    <div class="flex justify-end mt-4">
                        <button onclick="deleteStudent()" class="bg-red-500 text-white px-4 py-2 mr-2">Eliminar</button>
                        <button onclick="hideConfirmationModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                    </div>
                </div>
            </div>
       <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
       <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
        <div>
            <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                < </button>
                    <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        1
                    </button>
                    <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        2
                    </button>
                    <button class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        3
                    </button>
                    <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                        >
                    </button>
        </div>
        <div>
            <span>Cantidad de registros :</span>
            <span id="rowCount"></span>
        </div>
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
@endsection
