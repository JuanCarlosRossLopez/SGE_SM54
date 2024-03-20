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
                    <button onclick="showAddModal()" class="add_button">Agregar estudiante
                        <i class="fas fa-plus text-black"></i>
                    </button>
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
                            <th class="theader">Amonestaciones</th>
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
                                <td class="text-center border-b">{{ $student->strike }} </td>
                                <td class="text-center border-b">        
                                    <a href="{{ route('estudiantes.show', $student->id) }}" class="btn btn-primary">Ver</a>
                                    <a href="{{ route('estudiantes.edit', $student->id) }}" class="text-yellow-500">Editar</a>
                                    <button onclick="showConfirmationModal({{ $student->id }})" class="text-red-500 show-modal">Eliminar</button>
                                    <form id="deleteForm{{ $student->id }}" action="{{ route('estudiantes.destroy', $student->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal para agregar estudiantes -->
            <div id="addModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <!-- Contenido del modal -->
                    <p>Por favor, ingrese los datos del estudiante:</p>
                    <form action="{{ route('estudiantes.store') }}" method="POST">
                        @csrf
                        <input type="text" name="student_name" placeholder="Nombre del estudiante">
                        <input type="number" name="id_student" placeholder="Matrícula">
                        <input type="number" name="strike" placeholder="Amonestaciones">
                        <label for="project_creator">¿Es el creador del proyecto?</label>
                        <select name="project_creator" id="project_creator">
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                        <button type="submit">Agregar Estudiante</button>
                    </form>
                    <button onclick="hideAddModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                </div>
            </div>

            <!-- Modal para editar estudiantes -->
            <div id="editModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <!-- Contenido del modal -->
                    <p>Editando estudiante:</p>
                    <form id="editForm" action="{{ route('estudiantes.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="student_id" id="editStudentId">
                        <input type="text" name="student_name" id="editStudentName" placeholder="Nombre del estudiante">
                        <input type="number" name="id_student" id="editStudentIdStudent" placeholder="Matrícula" disabled>
                        <input type="number" name="strike" id="editStudentStrike" placeholder="Amonestaciones">
                        <label for="editProjectCreator">¿Es el creador del proyecto?</label>
                        <select name="project_creator" id="editProjectCreator">
                            <option value="0">No</option>
                            <option value="1">Sí</option>
                        </select>
                        <button type="submit">Guardar Cambios</button>
                    </form>
                    <button onclick="hideEditModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                </div>
            </div>

            <!-- Modal para confirmación de eliminación -->
            <div id="confirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex justify-center items-center bg-opacity-50 bg-gray-500">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <p>¿Estás seguro de que deseas eliminar este estudiante?</p>
                    <div class="flex justify-end mt-4">
                        <button onclick="deleteStudent()" class="bg-red-500 text-white px-4 py-2 mr-2">Eliminar</button>
                        <button onclick="hideConfirmationModal()" class="bg-gray-300 px-4 py-2">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let studentIdToDelete;
        let studentIdToEdit;

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

        function showAddModal() {
            const modal = document.getElementById('addModal');
            modal.classList.remove('hidden');
        }

        function hideAddModal() {
            const modal = document.getElementById('addModal');
            modal.classList.add('hidden');
        }

        function showEditModal(id, name, studentId, strike, projectCreator) {
            studentIdToEdit = id;
            document.getElementById('editStudentId').value = id;
            document.getElementById('editStudentName').value = name;
            document.getElementById('editStudentIdStudent').value = studentId;
            document.getElementById('editStudentStrike').value = strike;
            document.getElementById('editProjectCreator').value = projectCreator;
            const modal = document.getElementById('editModal');
            modal.classList.remove('hidden');
        }

        function hideEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('hidden');
        }
    </script>
@endsection
