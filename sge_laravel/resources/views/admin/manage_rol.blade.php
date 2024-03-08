@extends('templates.template_admin')
@section('titulo')
    Gestión de roles
@endsection
@section('contenido')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>


    <div class=" min-h-screen px-12 py-12 justify-start items-center ">
        <div class="">
            <h1 class="text-4xl font-sans">Gestionar roles</h1>
        </div>
        <div class="flex flex-row justify-between">
            <div class="flex items-center w-80 h-11 border-2 bg-gray-200 border-[#01A080] rounded-md">
                <input type="text" class="w-full outline-none border-none rounded-md bg-slate-200 "
                    placeholder="Buscar rol">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>

            <button class="bg-[#01A080] w-52 h-11 rounded text-white">
                Añadir roles
            </button>
        </div>

        <div class=" overflow-x-auto sm:rounded-lg py-12">
            <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead class="text-xs text-white uppercase bg-[#01A080] box-decoration-clone ">
                    <tr>
                        <th scope="col" class="px-4 py-2 border-b">
                            Texto prueba

                        </th>
                        <th scope="col" class="px-4 py-2 border-b">
                            Texto prueba
                        </th>
                        <th scope="col" class="px-4 py-2  border-b">
                            Texto prueba
                        <th scope="col" class="px-4 py-2 border-b ">
                            Texto prueba
                        </th>
                        <th scope="col" class="px-4 py-2 border-b">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-4 py-2 border-b text-black">
                            Silver
                        </td>
                        <td class="px-4 py-2 border-b text-black">
                            Laptop
                        </td>
                        <td class="px-4 py-2 border-b text-black">
                            $2999
                        </td>
                        <td class="px- py-4 text-center">
                            <button class="show-modal">
                                <i class="bi bi-eye-fill" style="color: blue;"></i>

                            </button>

                            <button class="show-modal">
                                <i class="bi bi-pencil-square" style="color: blue;"></i>
                            </button>
                            <button class="  ">

                                <i class="bi bi-trash" style="color: red;"></i> </button>
                        </td>
                    </tr>


                </tbody>
            </table>

        </div>
        <div class="py-12">
            <button class="bg-[#01A080] w-52 h-11 rounded text-white">
                Aqui va la paginación
            </button>
        </div>
    </div>

    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl ">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg  text-white m-auto">Gestion de Roles de usuarios</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl relative"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body mb-0 overflow-y-auto h-full ">
                    <div class=" items-center justify-center p-10">

                        <form action="w-full" class="">
                            <ul class="w-full flex flex-row justify-center gap-4">
                                <li><input type="checkbox"> Alumno</li>
                                <li><input type="checkbox"> Profesor</li>
                                <li><input type="checkbox"> Administrador</li>
                                <li><input type="checkbox"> Cordinacion de carrera</li>
                                <li><input type="checkbox"> Asesor academico</li>
                            </ul>
                        </form>

                    </div>
                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Asignar Roles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .comment-icon {
            position: relative;
            width: 30px;
            height: 22px;
            background-color: #007bff;
            border-radius: 50%;
        }

        .comment-icon::after {
            content: '';
            position: absolute;
            bottom: -5px;
            right: 4px;
            width: 20px;
            height: 15px;
            border-style: solid;
            border-width: 0 8px 8px 0;
            border-color: transparent #007bff transparent transparent;
        }
    </style>
    <script>
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;
    </script>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
