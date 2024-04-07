@extends('test.final_template')

@section('title', 'Gestión de las carreras')
@section('contenido')

    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row ">
            <div class="conteiner_cards1 flex flex-col w-full m-4">
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
                <div class="content_conteiner w-full h-fit p-4">
                    <div class="w-full ">
                        <label class="w-full font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de
                            Grupos</label>
                    </div>

                    <div class="inside_content_conteiner">
                        <div class="">
                            <div
                                class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                <label
                                    class="text-start font-sans w-fit font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                    grupo <i class="fa-solid fa-arrow-right flex"></i></label>
                                <div class="relative dropdown-trigger gap-2">
                                    <button class="dropdown-btn button_add_green show-modal-add" data-target="#crear">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    @include('groups.create_group')

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">#</th>
                                    <th class="theader">Nombre del </th>
                                    <th class="theader">Carrera</th>
                                    <th class="theader">División</th>
                                    <th class="theader">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @php
                                    $contador = 1;
                                @endphp
                                @foreach ($grupos as $career)
                                    <tr class="trow">
                                        <td class="trowc">{{ $contador }}</td>
                                        <td class="trowc">{{ $career->career_name }}</td>
                                        <td class="trowc">{{ $career->career_description }}</td>
                                        <td class="trowc">
                                            {{ $career->division ? $career->division->division_name : 'Sin división' }}</td>
                                        <td class="trowc">
                                            <button class="show-modal-edit" data-target="#edit{{ $career->id }}">
                                                <div class="button_edit_yellow">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </div>
                                            </button>
                                            <button class="show-delete" data-target="#delete{{ $career->id }}">
                                                <div class="button_delete_red">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
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
        </div>




        <script>
            //const modal_add = document.querySelector('.modal-add-asesor');
            const show_modal_add = document.querySelector('.modalAdd');
            const show_modal_edit = document.querySelector('.modalAdd');

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

            const show_modal = document.querySelectorAll('.show-modal-add');
            show_modal_add.addEventListener('click', function() {
                const target = show - modal_add.getAttribute('data-target');
                const modal = document.querySelector(target);
                console.log(modal);
                modal.classList.remove('hidden');
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    @endsection
