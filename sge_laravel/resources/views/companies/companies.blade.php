@extends('test.final_template')

@section('title', 'Gestión de las empresas')
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
                            Empresas:</label>
                    </div>

                    <div class="inside_content_conteiner">
                        <div class="">
                            <div
                                class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                <label
                                    class="text-start font-sans w-fit font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                    empresa <i class="fa-solid fa-arrow-right flex"></i></label>
                                <div class="relative dropdown-trigger gap-2">
                                    <button class="dropdown-btn button_add_green show-modal-add">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <div
                                        class="hidden absolute bg-white border border-gray-200 mt-2  py-2 rounded w-48 z-10 dropdown-content">
                                        <a
                                            class="show-modal-add block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Usuario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">

                                <tr>
                                    <th class="theader">#</th>
                                    <th class="theader">Nombre de la empresa</th>
                                    <th class="theader">Dirección</th>
                                    <th class="theader">Nombre asesor</th>
                                    <th class="theader">Trabajo</th>
                                    <th class="theader">Número telefónico</th>
                                    <th class="theader">Correo electrónico</th>
                                    <th class="theader">Área de Trabajo</th>
                                    <th class="theader">Descripción</th>
                                    <th class="theader">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @php
                                    $contador = 1;
                                @endphp
                                @foreach ($companies as $company)
                                    <tr class="trow">
                                        <td class="trowc">{{ $contador }}</td>
                                        <td class="trowc">{{ $company->company_name }}</td>
                                        <td class="trowc">{{ $company->addres }}</td>
                                        <td class="trowc">{{ $company->asesor_name }}</td>
                                        <td class="trowc">{{ $company->job }}</td>
                                        <td class="trowc">{{ $company->company_phone_number }}</td>
                                        <td class="trowc">{{ $company->company_email }}</td>
                                        <td class="trowc">{{ $company->work_area }}</td>
                                        <td class="trowc">{{ $company->company_description }}</td>
                                        <td class="trowc">
                                            <button class="show-modal-edit" data-target="#edit{{ $company->id }}">
                                                <div class="button_edit_yellow">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </div>
                                            </button>
                                            <button class="show-delete" data-target="#delete{{ $company->id }}">
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
        @foreach ($companies as $company)
            @include('companies.edit_modal_company')
            @include('companies.delete_modal_company')
        @endforeach
        <div
            class="modal-add-empresa h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg ml-60 text-white">Agregar Empresa</h3>
                    <button class="close-modal bg-white rounded-full">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body flex-row gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="text-xl font-bold mb-4">Crear Empresa</h1>
                            <form action="{{ route('empresas.store') }}" method="POST" class="flex flex-col gap-4">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mt-4">
                                    <label for="company_name" class="block text-gray-700">Nombre de la empresa</label>
                                    <input type="text" name="company_name" id="company_name"
                                        placeholder="Nombre de la empresa"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                        <label for="addres" class="block text-gray-700">Dirección</label>
                                    <input type="text" name="addres" id="addres" placeholder="Dirección"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                </div>

                                <div class="mt-4">
                                    <label for="asesor_name" class="block text-gray-700">Nombre del asesor</label>
                                    <input type="text" name="asesor_name" id="asesor_name"
                                        placeholder="Nombre del asesor"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                        <label for="job" class="block text-gray-700">Trabajo</label> 
                                    <input type="text" name="job" id="job" placeholder="Trabajo"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                </div>

                                <div class="mt-4">
                                    <label for="company_phone_number" class="block text-gray-700">Número telefónico de la empresa</label>
                                    <input type="text" name="company_phone_number" id="company_phone_number"
                                        placeholder="Número telefónico de la empresa"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                    <label for="company_email" class="block text-gray-700">Correo Electrónico</label>
                                    <input type="text" name="company_email" id="company_email"
                                        placeholder="Correo Electronico "
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                </div>

                                <div class="mt-4">
                                    <label for="work_area" class="block text-gray-700">Área de trabajo</label>
                                    <input type="text" name="work_area" id="work_area" placeholder="Área de trabajo"
                                        class="flex-1 rounded-md border border-gray-300 p-2">
                                        <label for="company_description" class="block text-gray-700">Descripción</label>
                                    <input type="text" name="company_description" id="company_description"
                                        placeholder="Descripción" class="flex-1 rounded-md border border-gray-300 p-2">
                                </div>
                                <!-- Puedes agregar más campos aquí según sea necesario -->
                                <div class="flex justify-center">
                                    <button type="submit" class="bg-[#01A080] text-white rounded p-2">Guardar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const modal_add = document.querySelector('.modal-add-empresa');
            const show_modal_add = document.querySelector('.show-modal-add');

            show_modal_add.addEventListener('click', function() {
                modal_add.classList.remove('hidden');
            });

            const close_modal = document.querySelectorAll('.close-modal');

            close_modal.forEach(close_modal => {
                close_modal.addEventListener('click', (e) => {
                    e.preventDefault();
                    const modal_edit = close_modal.closest('.modal-edit-empresa');
                    const modal_add = close_modal.closest('.modal-add-empresa');
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
