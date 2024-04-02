@extends('test.test_template')
@section('title')
Asesores
@endsection

@section('contenido')
<div class="back_conteiner">
    <div class="top_conteiner">
        <div class="w-[70rem]">
            <label>Asignacion de usuario al asesor</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-bars-progress"></i>
            </label>
        </div>
    </div>
    <div class="content_conteiner  h-fit">
        <div class="flex flex-row items-center justify-start gap-2">
            <label class="conteiner_word_title items-center">Tabla de Asesores</label>
            <label id="infoButton" class="cursor-pointer mt-[0.8rem]" data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
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

                    <tr>
                        <th class="theader">id</th>
                        <th class="theader">Nombre del maestro</th>
                        <th class="theader">Número de nomina</th>
                        <th class="theader">Nombre usuario</th>
                        <th class="theader">Division</th>
                        <th class="theader">Acciones</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    @foreach ($teachers as $teachers)
                    <tr class="trow">
                        <td class="trowc">1</td>
                        <td class="trowc">{{ $teachers->name_teacher }}</td>
                        <td class="trowc">{{ $teachers->payroll }}</td>
                        <td>{{ $teachers->user ? $teachers->user->name : 'Sin usuario asociado' }}</td>
                        <td class="trowc">{{ $teachers->division->division_name }}</td>
                        <td class="trowc">
                            <button class="show-modal-edit" data-target="#edit{{ $teachers->id }}">
                                <img src="{{ asset('icons/edit.svg') }}" alt="Delete buttto" class="w-7 h-7">
                            </button>
                            <button class="show-delete" data-target="#delete{{ $teachers->id }}">
                                <img src="{{ asset('icons/trash.svg') }}" alt="Delete buttto" class="w-7 h-7">
                            </button>
                        </td>

                    </tr>
                    @include('teachers.edit_modal_teacher')
                    @include('teachers.delete_modal_teacher')
                    @include('teachers.view_modal_teachers')
                    @endforEach
                    <tr class="trow">
                        <div>
                            <button class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>
                            </button>
                        </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
        <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
            <div>
                <button class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                </button>
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

                </button>
            </div>
            <div>
                <span>Cantidad de registros :</span>
                <span id="rowCount"></span>
            </div>
        </div>
    </div>

</div>


<div class="modal-add-asesor h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-lg ml-60 text-white">Agregar Asesor</h3>
            <button class="close-modal bg-white rounded-full">
                <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
            </button>
        </div>
        <div class="bg-white p-2">
            <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-xl font-bold mb-4">Crear Asesor</h1>
                    <form action="{{ route('maestros.store') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <div class="flex gap-4">
                            <input type="text" name="teacher_name" id="teacher_name" placeholder="Nombre del asesor" class="flex-1 rounded-md border border-gray-300 p-2">
                            <input type="number" name="payroll" id="payroll" placeholder="Número de nómina del asesor" class="flex-1 rounded-md border border-gray-300 p-2">
                        </div>

                        <div class="flex gap-4">
                            <!-- <input type="text" name="id_user" id="id_user" placeholder="ID de usuario del asesor"
                                    class="flex-1 rounded-md border border-gray-300 p-2"> -->
                            <select name="id_user" id="">
                                <option value="">Selecciona un usuario</option>
                                @php
                                $asesorEncontrado = false;
                                @endphp
                                @foreach ($users as $user)
                                @if ($user->hasRole('Asesor'))
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @php
                                $asesorEncontrado = true;
                                @endphp
                                @endif
                                @endforeach
                                @if (!$asesorEncontrado)
                                <option value="" disabled selected>No hay usuarios asesores</option>
                                @endif

                            </select>

                            <select name="division_id" id="">
                                <option value="">Selecciona una división</option>
                                @foreach ($division as $divisions)
                                <option value="{{ $divisions->id }}">{{ $divisions->division_name }}</option>
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
    const rowCount = tableBody.querySelectorAll('tr').length;
    document.getElementById('rowCount').textContent = rowCount;
    const modal_add = document.querySelector('.modal-add-asesor');
    const show_modal_add = document.querySelector('.show-modal-add');
    show_modal_add.addEventListener('click', function() {
        modal_add.classList.remove('hidden')
    })
    const modal_edit_asesor = document.querySelectorAll('.modal-edit-asesor')
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
            const modal_edit = close_modal.closest('.modal-edit-asesor')
            const modal_add = close_modal.closest('.modal-add-asesor')
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