@extends('test.final_template')

@section('title')
    Asignación Alumno a Asesor
@endsection

@section('contenido')
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <div class="back_conteiner">

        <div class="conteiner_cards justify-center flex flex-row">

            <div class="conteiner_cards1 flex flex-col w-3/4">
                @if (session()->has('notificacion'))
                    <div id="notification"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-4 mb-0 w-full rounded relative">
                        {{ session('notificacion') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('notification').style.display = 'none';
                        }, 8000);
                    </script>
                @endif

                @if (session()->has('error'))
                    <div id="notification"
                        class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-4 mb-0 w-full rounded relative">
                        {{ session('error') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('notification').style.display = 'none';
                        }, 8000);
                    </script>
                @endif
                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Gestión de todos los
                        roles:</label>
                    <div class="w-full ">
                        <div class="mx-2">
                            <div class="flex flex-row items-center justify-end">
                                <div class=" w-full py-2 flex flex-row items-center gap-2">
                                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->


                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Asignación
                                            alumno<i class="fa-solid fa-arrow-right flex"></i></label>
                                        <div class=" gap-2">
                                            <button class="show-modal-add button_add_green"><i
                                                    class="fi fi-ss-assign h-7 w-7"></i></button>
                                        </div>
                                    </div>

                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Asignación
                                            masiva de alumnos a asesor<i class="fa-solid fa-arrow-right flex"></i></label>
                                        <div class=" gap-2">
                                            <button class="show-modal-add-masive button_add_green"><i
                                                    class="fi fi-ss-assign h-7 w-7"></i></button>
                                        </div>
                                    </div>

                                </div>
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
                                        <th class="theader">Asesor</th>
                                        <th class="theader">Alumno</th>
                                        <th class="theader">Aciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($Teaching_advice as $teaching_advice)
                                        <tr class="trow">
                                            <td class="trowc">{{ $loop->iteration }}</td>
                                            <td class="trowc">
                                                {{ $teaching_advice->teacher ? $teaching_advice->teacher->name_teacher : 'Sin Asesor asignado' }}
                                            </td>
                                            <td class="trowc">
                                                {{ $teaching_advice->student ? $teaching_advice->student->student_name : 'Sin Alumno asignado' }}
                                            </td>
                                            <td class="trowc">
                                                <button class="show-modal-edit"
                                                    data-target="#edit{{ $teaching_advice->id }}">
                                                    <div class ="button_edit_yellow px-1">
                                                        <i class ="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                </button>
                                                <button class="show-delete" data-target="#delete{{ $teaching_advice->id }}">
                                                    <div class ="button_delete_red px-1">
                                                        <i class ="fa-solid fa-trash"></i>
                                                    </div>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('teaching_advice.edit_modal_teaching')
                                        @include('teaching_advice.delete_modal_teaching')
                                    @endforEach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a href="/libros" class=" buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal-add-teaching h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Realizar asignación</h3>
                <button class="show-modal-add bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white w-full p-2">
                <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10 ">
                    <div class="flex flex-col items-center justify-center w-full ">
                        <h1 class="text-xl font-bold mb-4">Asignación de asesor y alumno</h1>
                        <form action="{{ route('asignar_alumnos.store') }}" method="POST"
                            class="flex flex-col gap-4 w-full">
                            @csrf
                            <div class="flex gap-4">
                                <select type="text" name="adviser_id" id="adviser_id"
                                    class="flex-1 rounded-md border text-black border-gray-300 p-2">
                                    <option selected>Elige un asesor</option>
                                    @foreach ($Teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->name_teacher }}</option>
                                    @endforeach
                                </select>
                                <select type="text" name="student_id" id="student_id"
                                    class="flex-1 rounded-md border text-black border-gray-300 p-2">
                                    <option selected>Elige un alumno</option>
                                    @foreach ($Students as $student)
                                        <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <div class="flex justify-center">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div
        class="modal-add-teaching-masive h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Realizar asignación</h3>
                <button class="show-modal-add bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white w-full p-2">
                <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10 ">
                    <div class="flex flex-col items-center justify-center w-full ">
                        <h1 class="text-xl font-bold mb-4">Asignación de asesor y alumno</h1>
                        <form action="{{ route('asignar_alumnos.store') }}" method="POST"
                            class="flex flex-col gap-4 w-full">
                            @csrf

                            <!-- Asesores -->
                            <div>
                                <h2>Asesores:</h2>
                                @foreach ($Teachers as $teacher)
                                    <label>
                                        <input type="checkbox" name="adviser_id[]" value="{{ $teacher->id }}">
                                        {{ $teacher->name_teacher }}
                                    </label>
                                @endforeach
                            </div>

                            <!-- Alumnos -->
                            <div>
                                <h2>Alumnos:</h2>
                                @foreach ($Students as $student)
                                    <label>
                                        <input type="checkbox" name="student_id[]" value="{{ $student->id }}">
                                        {{ $student->student_name }}
                                    </label>
                                @endforeach
                            </div>

                            <!-- Puedes agregar más campos aquí según sea necesario -->
                            <div class="flex justify-center">
                                <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const tableBody = document.querySelector('tbody');
        const modal_add = document.querySelector('.modal-add-teaching');
        const show_modal_add = document.querySelector('.show-modal-add');

        const modal_add_masive = document.querySelector('.modal-add-teaching-masive');
        const show_modal_add_masive = document.querySelector('.show-modal-add-masive');

        show_modal_add.addEventListener('click', function() {
            console.log("click");
            modal_add.classList.remove('hidden');
        });

        show_modal_add_masive.addEventListener('click', function() {
            console.log("click masive");
            modal_add_masive.classList.remove('hidden');
        });

        const modal_edit_asesor = document.querySelectorAll('.modal-edit-teaching');
        const show_modal_edit = document.querySelectorAll('.show-modal-edit');
        show_modal_edit.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = button.dataset.target;
                const modal = document.querySelector(modalId);
                modal.classList.remove('hidden');
            });
        });

        const delete_modal_teacher = document.querySelectorAll('.delete-modal');
        const show_delete = document.querySelectorAll('.show-delete');
        show_delete.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = button.dataset.target;
                const modal = document.querySelector(modalId);
                modal.classList.remove('hidden');
                console.log(modal);
                console.log(modalId);
            });
        });

        const close_modal = document.querySelectorAll(
            '.show-modal-add, .show-modal-add-masive, .modal-edit-teaching, .delete-modal');
        close_modal.forEach(close_modal => {
            close_modal.addEventListener('click', (e) => {
                e.preventDefault();
                const modal_edit = close_modal.closest('.modal-edit-teaching');
                const modal_add = close_modal.closest('.modal-add-teaching, .modal-add-teaching-masive');
                const modal_delete = close_modal.closest('.delete-modal');
                if (modal_add) {
                    modal_add.classList.add('hidden');
                }
                if (modal_edit) {
                    modal_edit.classList.add('hidden');
                }
                if (modal_delete) {
                    modal_delete.classList.add('hidden');
                }
            });
        });
    </script>
@endsection
