@extends('test.test_template')

@section('title')
    Alumnos
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Asignacion de usuario al estudiante</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de estudiantes</label>
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
                <div class="">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="show-modal-add standar_button"><span>Agregar</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <!--
                            student_name');
                            id_student')->unique(); // matricula
                            project_creator');
                            strike')->default(0); // amonestacion
                            user_id')->nullable()->constrained('users')
                            division_id')->nullable()->constrained('divisions')
                            anteproject_id')->nullable()->constrained('anteprojects')
                            adviser_id')->nullable()->constrained('teachers')
                        -->
                        <tr>
                            <th class="theader">#</th>
                            <th class="theader">Nombre del estudiante</th>
                            <th class="theader">Matrìcula</th>
                            <th class="theader">Creador del proyecto</th>
                            <th class="theader">Amonestaciones</th>
                            <th class="theader">Usuario</th>
                            <th class="theader">División</th>
                            <th class="theader">Anteproyecto</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($Students as $students)
                            <tr class="trow">
                                <td class="trowc">1</td>
                                <td class="trowc">{{ $students->student_name }}</td>
                                <td class="trowc">{{ $students->id_student }}</td>
                                <td class="trowc">{{ $students->project_creator }}</td>
                                <td class="trowc">{{ $students->strike }}</td>
                                <td>{{ $students->user ? $students->user->name : 'Sin usuario asociado' }}</td>
                                <td class="trowc">{{ $students->division_id }}</td>
                                <td class="trowc">{{ $students->anteproject_id }}</td>
                                
                                
                                <td class="trowc">
                                    <button class="show-modal-edit" data-target="#edit{{ $students->id }}">
                                        <img src="{{ asset('icons/edit.svg') }}" alt="Delete buttto" class="w-7 h-7">
                                    </button>
                                    <button class="show-delete" data-target="#delete{{ $students->id }}">
                                        <img src="{{ asset('icons/trash.svg') }}" alt="Delete buttto" class="w-7 h-7">
                                    </button>
                                </td>

                            </tr>
                            @include('students.edit_modal_student')
                            @include('students.delete_modal_student')
                        @endforEach
                    </tbody>
                </table>
            </div>

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        1
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        2
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        3
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">

                    </button>
                </div>
                <div>
                    <span>Cantidad de registros :</span>
                    <span id="rowCount"></span>
                </div>
            </div>
        </div>

    </div>


    <div class="modal-add-student h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="text-center items-center font-semibold text-lg text-white">Agregar Estudiante</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white w-full p-4">
                <div class="modal-body flex flex-col gap-4 items-center justify-center p-4">
                    <h1 class="text-xl font-bold mb-4">Crear Estudiante</h1>
                    <form action="{{ route('estudiantes.store') }}" method="POST" class="w-full">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="student_name" id="student" placeholder="Nombre del estudiante" class="rounded-md border border-gray-300 p-2">
                            <input type="text" name="id_student" id="id_student" placeholder="Matrícula" class="rounded-md border border-gray-300 p-2">
                            <select type="text" name="user_id" id="user_id" class="rounded-md border text-black border-gray-300 p-2">
                                <option selected disabled>Elige un usuario</option>
                                @foreach ($Users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            <select name="division_id" class="rounded-md border border-gray-300 p-2">
                                <option selected disabled>Elige una división</option>
                                @foreach ($Divisions as $division)
                                    <option value="{{$division->id}}">{{$division->division_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;
        const modal_add = document.querySelector('.modal-add-student');
        const show_modal_add = document.querySelector('.show-modal-add');
        show_modal_add.addEventListener('click', function() {
            modal_add.classList.remove('hidden')
        })
        
        const modal_edit_asesor = document.querySelectorAll('.modal-edit-student')
        const show_modal_edit = document.querySelectorAll('.show-modal-edit')
        show_modal_edit.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        })

        const delete_modal_teacher = document.querySelectorAll('.delete-modal')
        const show_delete = document.querySelectorAll('.show-delete')
        show_delete.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modal)
                console.log(modalId)
            })
        })



        const close_modal = document.querySelectorAll('.close-modal');
        close_modal.forEach(close_modal => {
            close_modal.addEventListener('click', (e) => {
                e.preventDefault()
                const modal_edit = close_modal.closest('.modal-edit-student')
                const modal_add = close_modal.closest('.modal-add-student')
                const modal_delete = close_modal.closest('.delete-modal')
                if (modal_add) {
                    modal_add.classList.add('hidden')
                }
                if (modal_edit) {
                    modal_edit.classList.add('hidden')
                }
                if (modal_delete) {
                    modal_delete.classList.add('hidden')
                }
            })
        })
    </script>