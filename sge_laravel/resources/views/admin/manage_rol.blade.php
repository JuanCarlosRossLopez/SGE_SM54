@extends('test.final_template')

@section('title')
    Gestión de roles
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">
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
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Gestionar
                                            permisos</label>
                                        <div class=" gap-2">
                                            <button class="show-modal-permision-options button_edit_rol_yellow">
                                                <i class="fa-solid fa-gear"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                            un rol</label>
                                        <div class=" gap-2">

                                            <button class="show-modal button_add_green">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-full font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Crear
                                            un permiso</label>
                                        <div class=" gap-2">
                                            <button class="show-modal-permisions button_add_green">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table_conteiner">
                            <table class="standar_table">
                                <thead class="standar_thead">
                                    <tr>
                                        <th class="theader">Nombre Rol</th>
                                        <th class="theader">Permisos del rol</th>
                                        <th class="theader">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($roles as $role)
                                        <tr class="trow">
                                            <td class="trowc">

                                                {{ $role->name }}

                                            </td>
                                            <td class="trowc ">
                                              

                                                @foreach ($role->permissions as $permission)
                                                
                                                        <label class="text-base font-semibold px-2 rounded"
                                                            >
                                                            {{ $permission->name }}
                                                        </label>
                                                @endforeach
                                            </td>

                                            <td class="trowc">


                                                <button class="show-modal-rol  rounded p-1 text-white"
                                                    data-target="#edit{{ $role->id }}">
                                                    <div class ="button_edit_yellow">
                                                        <i class ="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                </button>

                                                <button class="show-delete rounded p-1 text-white"
                                                    data-target="#delete{{ $role->id }}">
                                                    <div class ="button_delete_red">
                                                        <i class ="fa-solid fa-trash"></i>
                                                    </div>

                                                </button>

                                                <!-- <button>
                                                                                        <img src="{{ asset('icons/show.svg') }}" alt="Delete buttto" class="w-7 h-7   text-[#01A080]  ">
                                                                                    </button> -->



                                            </td>
                                        </tr>
                                        @include('admin.delete-modal')
                                        @include('admin.view-modal-rol')
                                    @endforeach

                                    <tr class="trow">

                                        <td class="trowc">
                                            <div>

                                            </div>
                                        </td>
                                    </tr>

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
        class="modal-create-rol h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Asginación de permisos</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i>
                    </p>
                </button>
            </div>
            
            <div class="bg-white p-2">
                <div class="modal-body  gap-4 mb-0 flex items-center justify-center P-10 ">
                    <form class=" flex flex-col items-center justify-center" action="{{ route('roles.store') }}"
                        method="POST">
                        <div class="flex flex-col items-center justify-center gap-2 py-3">
                            @csrf
                            <div>
                                <h1 class="font-sans font-semibold text-[#545454]">Crear Rol:</h1>
                                <input
                                    class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                    type="text" name="role_name" id="name" placeholder="Nombre del rol">
                            </div>
                            <div class="py-2">
                                <div class="text-center">
                                    <label class="font-sans font-semibold text-[#545454]" for="permissions">Permisos</label>
                                </div>
                                @foreach ($permissions as $permission)
                                    <input type="checkbox" name="permissions[]" id="permission{{ $permission->id }}"
                                        value="{{ $permission->name }}">
                                    <label for="permission{{ $permission->id }}">{{ $permission->name }}</label>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="bg-[#01A080] text-white rounded p-2 ">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal-permisions h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Creacion de permisos</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                    <div>
                        <form class="flex flex-col gap-2" action="{{ route('roles.store_permision') }}" method="POST">
                            @csrf
                            <h1>Crear Permiso</h1>

                            <input type="text" name="permision_name" id="name" placeholder="Nombre del permiso">
                            <button type="submit" class="bg-[#01A080] text-white rounded p-2">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal-show-permisions h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Gestion de permisos</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center P-10 ">
                    <div>
                        <table>
                            <thead>
                                <tr class="">
                                    <th>Nombre del permiso </th>
                                    <th class="text-center">Aciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <div class="flex flex-row gap-4">
                                                <button class="show-modal-permission rounded p-1 text-white"
                                                    data-target="#delete_permission{{ $permission->id }}">
                                                    <button class="show-delete rounded p-1 text-white"
                                                        data-target="#delete{{ $role->id }}">
                                                        <div class ="button_delete_red">
                                                            <i class ="fa-solid fa-trash"></i>
                                                        </div>
                                                    </button>
                                                </button>
                                                <button class="show-permission-edit"
                                                    data-target="#edit_permission{{ $permission->id }}">
                                                    <button class="show-modal-rol  rounded p-1 text-white"
                                                        data-target="#edit{{ $role->id }}">
                                                        <div class ="button_edit_yellow">
                                                            <i class ="fa-solid fa-pen-to-square"></i>
                                                        </div>
                                                    </button>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                    @include('admin.edit-modal-permission')
                                    @include('admin.delete-modal-permission')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <script>
        const modal_permision = document.querySelector('.modal-permision');
        const modal_roles = document.querySelector('.modal-roles');
        const create_rol = document.querySelector('.modal-create-rol');
        const create_permision = document.querySelector('.modal-permisions');
        const show_permission = document.querySelector('.modal-show-permisions');

        const delete_modal = document.querySelector('.delete-modal');

        //Funcionamiento de modal
        const showDelete = document.querySelectorAll('.show-delete');
        const showModal = document.querySelector('.show-modal');
        const showModalPermisions = document.querySelector('.show-modal-permisions');
        const showModalRoles = document.querySelectorAll('.show-modal-rol');


        const showEditPermissions = document.querySelectorAll('.show-permission-edit');


        const showModalDeletePermissions = document.querySelectorAll('.show-modal-permission');
        const showModalDeletePermission = document.querySelectorAll('.show-modal-permission')
        const show_permission_options = document.querySelector('.show-modal-permision-options');



        show_permission_options.addEventListener('click', () => {
            show_permission.classList.remove('hidden')
        })

        showModal.addEventListener('click', function() {
            create_rol.classList.remove('hidden')
        })

        showModalPermisions.addEventListener('click', () => {
            create_permision.classList.remove('hidden')
        });

        showModalDeletePermission.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                console.log("click")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
            })
        });

        showEditPermissions.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                console.log(modal)
                modal.classList.remove('hidden')
            })

        })

        showDelete.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("click")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })


        showModalRoles.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("click")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })



        showModalDeletePermission.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                console.log("click")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
            })
        });

        const closeModal = document.querySelectorAll('.close-modal');

        closeModal.forEach(closeModal => {
            closeModal.addEventListener('click', (e) => {
                e.preventDefault();

                const modal = closeModal.closest('.modal-roles');
                const modal1 = closeModal.closest('.modal-create-rol');
                const modal2 = closeModal.closest('.delete-modal');
                const modal3 = closeModal.closest('.modal-permisions');
                const modal4 = closeModal.closest('.modal-show-permisions');
                const modal5 = closeModal.closest('.delete-modal-permissions');

                if (modal) {
                    modal.classList.add('hidden');
                }
                if (modal1) {
                    modal1.classList.add('hidden');
                }
                if (modal2) {
                    modal2.classList.add('hidden');
                }
                if (modal3) {
                    modal3.classList.add('hidden');
                }
                if (modal4) {
                    modal4.classList.add('hidden');
                }
                if (modal5) {
                    modal5.classList.add('hidden');
                }



            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
