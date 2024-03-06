@extends('templates.template_admin')

@section('titulo', 'Usuarios')
@section('contenido')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    <div class="flex justify-center">
        <div class="w-3/4">
            <h1 class="text-black text-3xl mb-4 mt-4">Gestión de Usuarios</h1>
            <div class="flex justify-end mb-4">
                <div class="relative">
                    <input class="bg-slate-200 pl-10 py-2 rounded-lg text-lg outline-none w-64" placeholder="Buscar...">
                    <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2"></i>
                </div>
                <button class="show-modal3 text-white bg-emerald-600 rounded-lg py-2 px-4 inline-block ml-4">Agregar
                    Usuario</button>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-emerald-300">
                    <tr>
                        <th scope="col"
                            class="rounded-tl-lg bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            #</th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Apellidos
                        </th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Nombre de
                            Usuario</th>
                        <th scope="col"
                            class="bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Rol de
                            Usuario</th>
                        <th scope="col"
                            class="rounded-tr-lg bg-emerald-600 px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="modal4 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
            <div class="container ">
                <div
                    class="items-center justify-center fixed inset-0 bg-gray-500 bg-opacity-50  h-screen w-screen flex px-4 md:px-8">
                    <div class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center">
                        <h1 class="text-2xl font-bold mb-4 flex items-center justify-between">
                            Editar usuario
                            <button class="close-modal4 text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </h1>

                        <form action="#">
                            <div class="mb-4">
                                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" id="nombre" class="rounded ancho input-field">
                            </div>
                            <div class="mb-4">
                                <label for="apellidos" class="block text-gray-700 text-sm font-bold mb-2">Apellidos</label>
                                <input type="text" id="apellidos" class="rounded input-field">
                            </div>
                            <div class="mb-4">
                                <label for="nombre_usuario" class="block text-gray-700 text-sm font-bold mb-2">Nombre de
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
            <div class="container ">
                <div
                    class="items-center justify-center fixed inset-0 bg-gray-500 bg-opacity-50  h-screen w-screen flex px-4 md:px-8">
                    <div class="bg-white rounded shadow-xl  px-20 py-14 items-center justify-center">
                        <h1 class="text-2xl font-bold mb-4 flex items-center justify-between">
                            Agregar usuario
                            <button class="close-modal3 text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </h1>

                        <form action="#">
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
                                <label for="nombre_usuario" class="block text-gray-700 text-sm font-bold mb-2">Nombre de
                                    usuario</label>
                                <input type="text" id="nombre_usuario" class="rounded input-field">
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
                                <button class="close-modal3 show-modal5 ">
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
            <div class="bg-white w-96 p-4 rounded-lg">
                <div class="flex flex-col justify-between items-center">
                    <div class="flex flex-row gap-10 ">
                        <h3 class="  font-semibold text-lg text-gray-800">Datos de usuarios</h3>
                        <button class="close-modal2 text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
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
            class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
            <div class="bg-white w-96 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg text-gray-800">Usuario eliminado correctamente</h3>
                    <button class="close-modal text-gray-500 hover:text-gray-700">
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

        <script>
            const modal = document.querySelector('.modal');
            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden')
            })

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden')
                });
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
