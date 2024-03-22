@extends('test.template')

@section('title')
    Asignación Alumno a Asesor
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Relación de asesor</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>
        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de asignación de asesor al estudiante</label>
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
                    <button class="show-modal-add standar_button"><span>Asinación asesor</span></button>
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
                                <td class="trowc">{{$loop->iteration}}</td>
                                <td class="trowc">{{ $teaching_advice->teacher ? $teaching_advice->teacher->name_teacher : 'Sin Asesor asignado'}}</td>
                                <td class="trowc">{{ $teaching_advice->student ? $teaching_advice->student->student_name : 'Sin Alumno asignado'}}</td>
                                <td class="trowc">
                                    <button class="show-modal-edit" data-target="#edit{{ $teaching_advice->id }}">
                                        <img src="{{ asset('icons/edit.svg') }}" alt="Delete buttto" class="w-7 h-7">
                                    </button>
                                    <button class="show-delete" data-target="#delete{{ $teaching_advice->id }}">
                                        <img src="{{ asset('icons/trash.svg') }}" alt="Delete buttto" class="w-7 h-7">
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


    <div
        class="modal-add-teaching h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-3xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Realizar asignación</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white w-full p-2">
                <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10 ">
                    <div class="flex flex-col items-center justify-center w-full ">
                        <h1 class="text-xl font-bold mb-4">Asignación de asesor y alumno</h1>
                        <form action="{{ route('asignar_alumnos.store') }}" method="POST" class="flex flex-col gap-4 w-full">
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

    <script>
        const tableBody = document.querySelector('tbody');
        const modal_add = document.querySelector('.modal-add-teaching');
        const show_modal_add = document.querySelector('.show-modal-add');

        show_modal_add.addEventListener('click', function() {
            console.log("click");
            modal_add.classList.remove('hidden')
        })

        const modal_edit_asesor = document.querySelectorAll('.modal-edit-teaching')
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



        // const close_modal = document.querySelectorAll('.close-modal');
        // close_modal.forEach(close_modal => {
        //     close_modal.addEventListener('click', (e) => {
        //         e.preventDefault()
        //         const modal_edit = close_modal.closest('.modal-edit-teaching')
        //         const modal_add = close_modal.closest('.modal-add-teaching')
        //         const modal_delete = close_modal.closest('.delete-modal')
        //         if (modal_add) {
        //             modal_add.classList.add('hidden')
        //         }
        //         if (modal_edit) {
        //             modal_edit.classList.add('hidden')
        //         }
        //         if (modal_delete) {
        //             modal_delete.classList.add('hidden')
        //         }
        //     })
        // })
    </script>
