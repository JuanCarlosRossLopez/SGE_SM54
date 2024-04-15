@extends('test.final_template')

@section('title', 'Gestión de Divisiones')

@section('contenido')
    <div class="back_conteiner">
        <div class="content_conteiner h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de Divisiones</label>
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
                    <button class="show-modal-add standar_button"><span>Agregar </span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">#</th>
                            <th class="theader">Nombre de la Divisiones</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @php
                            $contador = 1;
                        @endphp
                        @foreach ($divisions as $division)
                            <tr class="trow">
                                <td class="trowc">{{ $contador }}</td>
                                <td class="trowc">{{ $division->division_name }}</td>
                                <td class="trowc">
                                    <button class="show-modal-edit" data-target="#edit{{ $division->id }}">
                                        <div class ="button_edit_yellow">
                                            <i class ="fa-solid fa-pen-to-square"></i>
                                        </div>
                                    </button>
                                    <button class="show-delete" data-target="#delete{{ $division->id }}">
                                        <div class ="button_delete_red">
                                            <i class ="fa-solid fa-trash"></i>
                                        </div>
                                    </button>
                                    </button>
                                </td>
                            </tr>
                            @php
                                $contador++;
                            @endphp
                        @endforeach
                    </tbody>

                    @include('division_forms.create_division')
                    @include('division_forms.edit_division')
                    @include('division_forms.delete_division')
                </table>
            </div>
        </div>
    </div>

    <script>
        const modal_add = document.querySelector('.modalf');

        // 
        const show_modal_add = document.querySelector('.show-modal-add');

        show_modal_add.addEventListener('click', function() {
            modal_add.classList.remove('hidden');
        });
        // 
        const show_modal_edit = document.querySelector('.show-modal-edit');

        show_modal_edit.addEventListener('click', function() {
            modal_edit.classList.remove('hidden');
        });
        const show_modal_delete = document.querySelector('.show-delete');

        show_modal_delete.addEventListener('click', function() {
            modal_delete.classList.remove('hidden');
        });
        // 

        const close_modal = document.querySelectorAll('.close-modal');
        close_modal.forEach(close_modal => {
            close_modal.addEventListener('click', (e) => {
                e.preventDefault();
                const modal_edit = close_modal.closest('.modal-edit-division');
                const modal_add = close_modal.closest('.modalf');
                const modal_delete = close_modal.closest('.show-delete');
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
