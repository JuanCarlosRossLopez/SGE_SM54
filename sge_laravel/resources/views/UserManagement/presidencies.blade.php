@extends('templates.template_admin')

@section('title', 'Presidencia')
@section('contenido')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<div class="view_conteiner">


    <div class="content_conteiner">
        <label class="word_title">Tabla de Gestión de Presidentes</label>
        <div class="inside_content_conteiner">
            @if (session()->has('notificacion'))
            <div class="text-blue-800">
                {{ session('notificacion') }}
            </div>
            @endif
            <div class="search_conteiner">
                <button class="search_button">
                    <i class="fas fa-search text-gray-500"></i>
                </button>
                <input type="text" class="search_input" placeholder="Buscar..." />
            </div>
            <div class="search_button_conteiner">
                <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                <button class="show-modal3 standar_button">
                    <span class="inside_button">
                        
                    </span>
                </button>
            </div>
        </div>
        <div class="table_conteiner">
            <table class="standar_table">
                <thead class="standar_thead">
                    <tr>
                        <th class="theader">
                            #</th>
                        <th class="theader">
                            Nombre
                        </th>
                        <th class="theader">
                            Nomina
                        </th>
                        <th class="theader">
                            Division
                            </th>
                        <th class="theader">
                            Carrera
                        </th>
                        <th class="theader">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    @foreach ($presidencies as $president)
                    <tr class="trow">
                        <td class="trowc"> {{ $loop->iteration }} </td>
                        <td class="trowc"> {{ $president-presidencies_name }} </td>
                        <td class="trowc"> {{ $president->payroll_presidencies }} </td>
                        <td class="trowc"> {{ $president->username }} </td>
                        <td class="trowc"> {{ $president->email }} </td>
                        <td class="trowc">
                            <button class="show-modal2">
                                <div class="comment-icon flex items-center justify-center">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                            </button>
                            <button class="show-modal4">
                                <div class="comment-icon flex items-center justify-center">
                                    <i class="bi bi-pencil-square" style="color: blue;"></i>
                                </div>
                            </button>
                            <button class="show-modal">
                                <div class="comment-icon flex items-center justify-center">
                                    <i class="bi bi-trash" style="color: red;"></i>
                                </div>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>


        <div
            class="modal6 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white w-96 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-gray-800">Usuario editado correctamente</h3>
                    <button class="close-modal6 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="modal5 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white w-96 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-gray-800">Usuario agregado correctamente</h3>
                    <button class="close-modal5 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="modal4 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-sm">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-white text-center flex-grow">Editar Usuario</h3>
                    <button class="close-modal4 bg-white rounded-full h-[1rem] flex items-center">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>

                <div class="modal-container">
                    <div class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center">
                        <form action="#" class="flex flex-col items-center">
                            <div class="mb-4">
                                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" id="nombre" class="rounded ancho input-field">
                            </div>
                            <div class="mb-4">
                                <label for="apellidos"
                                    class="block text-gray-700 text-sm font-bold mb-2">Apellidos</label>
                                <input type="text" id="apellidos" class="rounded input-field">
                            </div>
                            <div class="mb-4">
                                <label for="nombre_usuario" class="block text-gray-700 text-sm font-bold mb-2">Nombre
                                    de
                                    usuario</label>
                                <input type="text" id="nombre_usuario" class="rounded input-field">
                            </div>
                            <div class="mb-4">
                                <label for="contrasena"
                                    class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                <input type="password" id="contrasena" class="rounded input-field">
                            </div>

                            <div class="mb-4">
                                <label for="rol" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
                                <select id="rol" class="rounded input-field">
                                    <option value="">Seleccionar un rol</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="usuario">Usuario</option>
                                </select>
                            </div>
                            <div class="flex justify-center">

                                <button type="submit" modal-close
                                    class="close-modal4 show-modal6 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                    Editar usuario
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal3 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="bg-[#01A080] w-full rounded-t-lg shadow-lg max-w-sm">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-white text-center flex-grow">Agregar Usuario</h3>
                    <button class="close-modal3 bg-white rounded-full h-[1rem] flex items-center">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>


                <div class="modal-container">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 relative alert"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                        .store
                    </div>
                    @endif
                    <div class="bg-white rounded-b-lg  shadow-xl  px-20 py-14 items-center justify-center">
                        <form action="{{ route('usuarios.store') }}" method="POST" class="flex flex-col items-center">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" name="name_user" class="rounded ancho input-field">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Apellidos</label>
                                <input type="text" name="lastname_user" class="rounded input-field">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre
                                    de
                                    usuario</label>
                                <input type="text" name="username" class="rounded input-field">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email" class="rounded input-field">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                <input type="password" name="password" class="rounded input-field">
                            </div>

                            <div class="flex justify-center">
                                <button type="submit">
                                    <div
                                        class=" bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                                        Agregar usuario
                                    </div>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="modal2 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

            <div class="w-96 p-4">
                <div class="flex flex-col justify-between items-center bg-white rounded-lg  ">
                    <h3 class="font-semibold text-lg text-gray-800 text-center bg-emerald-500 px-24 rounded-t-lg ">Datos de usuarios
                    <button class="close-modal2 text-red-500 hover:text-red-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </h3>

                    <div class="py-4">
                        <h5 class="py-2">Nombre </h5>
                        <h5 class="py-2">Apellidos </h5>
                        <h5 class="py-2">Nombre Usuarios</h5>
                        <h5 class="py-2">Rol de Usuario</h5>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal7 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="bg-white w-80 p-4 rounded-lg animate-customBounce">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-gray-800">Usuario eliminado correctamente</h3>
                </div>
            </div>
        </div>

        <div
            class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="bg-white w-86 p-4 rounded-lg animate-customBounce">
                <h3 class="font-semibold text-center text-lg text-gray-800">Deseas eliminar el usuario?</h3>
                <div class="flex justify-center items-center">
                    <button
                        class="close-modal bg-emerald-600 hover:bg-emerald-500 rounded-lg px-2 py-2 m-2 transition delay-150 duration-300 ease-in-out">
                        Eliminar
                    </button>
                    <button class="close-modal7 bg-red-600 hover:bg-red-500 rounded-lg px-2 py-2">
                        Cancelar
                    </button>
                </div>
            </div>


            <script>
            const modal = document.querySelector('.modal');
            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');
            const modal7 = document.querySelector('.modal7');
            const closeModal7 = document.querySelector('.close-modal7');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden');
            });

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden');
                    modal7.classList.remove('hidden');
                    setTimeout(() => {
                        modal7.classList.add('hidden');
                    }, 2000);
                });
            });
            closeModal7.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
            </script>



            <script>
            const modal2 = document.querySelector('.modal2');

            const showModal2 = document.querySelector('.show-modal2');
            const closeModal2 = document.querySelectorAll('.close-modal2');

            showModal2.addEventListener('click', function() {
                modal2.classList.remove('hidden')
            })

            closeModal2.forEach(close => {
                close.addEventListener('click', function() {
                    modal2.classList.add('hidden')
                });
            });
            </script>

            <script>
            const modal3 = document.querySelector('.modal3');

            const showModal3 = document.querySelector('.show-modal3');
            const closeModal3 = document.querySelectorAll('.close-modal3');

            showModal3.addEventListener('click', function() {
                modal3.classList.remove('hidden')
            })

            closeModal3.forEach(close => {
                close.addEventListener('click', function() {
                    modal3.classList.add('hidden')
                });
            });
            </script>

            <script>
            const modal4 = document.querySelector('.modal4');

            const showModal4 = document.querySelector('.show-modal4');
            const closeModal4 = document.querySelectorAll('.close-modal4');

            showModal4.addEventListener('click', function() {
                modal4.classList.remove('hidden')
            })

            closeModal4.forEach(close => {
                close.addEventListener('click', function() {
                    modal4.classList.add('hidden')
                });
            });
            </script>

            <script>
            const modal5 = document.querySelector('.modal5');

            const showModal5 = document.querySelector('.show-modal5');
            const closeModal5 = document.querySelectorAll('.close-modal5');

            showModal5.addEventListener('click', function() {
                modal5.classList.remove('hidden')
            })

            closeModal5.forEach(close => {
                close.addEventListener('click', function() {
                    modal5.classList.add('hidden')
                });
            });
            </script>

            <script>
            const modal6 = document.querySelector('.modal6');

            const showModal6 = document.querySelector('.show-modal6');
            const closeModal6 = document.querySelectorAll('.close-modal6');

            showModal6.addEventListener('click', function() {
                modal6.classList.remove('hidden')
            })

            closeModal6.forEach(close => {
                close.addEventListener('click', function() {
                    modal6.classList.add('hidden')
                });
            });
            </script>

        </div>
        @endsection