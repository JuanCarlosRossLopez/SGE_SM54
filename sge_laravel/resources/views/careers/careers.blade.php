@extends('test.test_template')
@section('title')
    Carreras
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="content_conteiner h-fit">
            @if (session()->has('notificacion'))
                <div id="notification"
                    class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded relative">
                    {{ session('notificacion') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('notification').style.display = 'none';
                    }, 8000);
                </script>
            @endif
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de Carreras</label>
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
                    <button class="show-modal-add standar_button"><span>Agregar</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">id</th>
                            <th class="theader">Nombre de la carrera</th>
                            <th class="theader">Descripción de la carrera</th>
                            <th class="theader">División</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @php
                            $contador = 1;
                        @endphp
                        @foreach ($careers as $career)
                            <tr class="trow">
                                <td class="trowc">{{ $contador }}</td>
                                <td class="trowc">{{ $career->career_name }}</td>
                                <td class="trowc">{{ $career->career_description }}</td>
                                <td class="trowc">
                                    {{ $career->division ? $career->division->division_name : 'Sin división' }}</td>
                                <td class="trowc">
                                    <button class="show-modal-edit" data-target="#edit{{ $career->id }}">
                                        <img src="{{ asset('icons/edit.svg') }}" alt="Editar" class="w-7 h-7">
                                    </button>
                                    <button class="show-delete" data-target="#delete{{ $career->id }}">
                                        <img src="{{ asset('icons/trash.svg') }}" alt="Eliminar" class="w-7 h-7">
                                    </button>
                                </td>
                            </tr>
                            @php
                                $contador++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('careers.delete_modal_careers')
    @include('careers.edit_modal_careers')

    <div
        class="modal-add-asesor h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Agregar carrera</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-xl font-bold mb-4">Crear Carrera</h1>
                        <form action="{{ route('carreras.store') }}" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <div class="flex gap-4">
                                <input type="text" name="career_name" id="career_name" placeholder="Nombre de la carrera"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                <input type="text" name="career_description" id="career_description"
                                    placeholder="Descripción de la carrera"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                            </div>

                            <div class="flex gap-4">
                                <select id="division_id" name="division_id"
                                    class="flex-1 rounded-md border border-gray-300 p-2">
                                    <option value="">Selecciona una división</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                            </div>

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
        const modal_add = document.querySelector('.modal-add-asesor');
        const show_modal_add = document.querySelector('.show-modal-add');

        show_modal_add.addEventListener('click', function() {
            modal_add.classList.remove('hidden');
        });

        const close_modal = document.querySelectorAll('.close-modal');

        close_modal.forEach(close_modal => {
            close_modal.addEventListener('click', (e) => {
                e.preventDefault();
                const modal_edit = close_modal.closest('.modal-edit-asesor');
                const modal_add = close_modal.closest('.modal-add-asesor');
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

        const show_delete_buttons = document.querySelectorAll('.show-delete');
        show_delete_buttons.forEach(button => {
            button.addEventListener('click', function() {
                const target = button.getAttribute('data-target');
                const modal = document.querySelector(target);
                modal.classList.remove('hidden');
            });
        });

        const show_edit_buttons = document.querySelectorAll('.show-modal-edit');
        show_edit_buttons.forEach(button => {
            button.addEventListener('click', function() {
                const target = button.getAttribute('data-target');
                const modal = document.querySelector(target);
                modal.classList.remove('hidden');
            });
        });
    </script>
@endsection
