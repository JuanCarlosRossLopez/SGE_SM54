@extends('test.test_template')
@section('title')
    Panel de control coordinación
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard Coordinación</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-user-tie"></i>
            </label>
        </div>
        <div class=" conteiner_cards">
            <div class="conteiner_cards1 flex flex-col w-[50rem]">
                <div class="content_conteiner w-fit h-fit">
                    <label class="conteiner_word_title flex flex-col items-center">Actividades diarias</label>
                    <div class="conteiner_cards2 ">
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Subir excel</label>
                                <button class="w-[2rem] h-[2rem] ver-Agregar hover:bg-slate-300 rounded-full ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Enviar
                                    reporte/informe</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">

                            </div>
                        </div>

                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Subir pdf</label>
                                <button class="w-[2rem] h-[2rem] ver-Agregar2 hover:bg-slate-300 rounded-full ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Enviar
                                    reporte/informe</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                            </div>
                        </div>
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[15rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-lg text-start w-full">Subir word</label>
                                <button class="w-[2rem] h-[2rem] ver-Agregar3 hover:bg-slate-300 rounded-full ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-base text-start w-full">Enviar documento</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="content_conteiner h-fit p-1 w-fit ml-[1.5rem]">
                <div class="flex flex-col gap-1">
                    <label class="conteiner_word_title  h-fit flex flex-col items-center">Otras opciones</label>
                    <div class="bg-white p-6 rounded shadow-md">
                        <div class="w-[16rem] text-center flex flex-row items-center mb-4">
                            <label class="font-semibold font-poppins text-lg">Visualizar Libros</label>
                        </div>

                        <ul>
                            <li class="py-4 border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="mr-4">
                                        <p class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Libro 1
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Autor: <span class="font-bold">Daniel</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4 border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="mr-4">
                                        <p class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Libro 2
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Autor: <span class="font-bold">Salmerón</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4 border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="mr-4">
                                        <p class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Libro 3
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Autor: <span class="font-bold">Boris</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="py-4">
                                <div class="flex items-center">
                                    <div class="mr-4">
                                        <p class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Libro 4
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Autor: <span class="font-bold">Alejandro</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button type="button"
                        class="bg-[#01A080] verLibro items-center text-[#F6F6F6] cursor-pointer text-center rounded-[5px] border-none hover:bg-[#DFDFDF] p-[1px] px-[4px]"
                        onclick="window.location.href='/libros'">
                        Ver más
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="agregar h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-[550px] rounded-xl shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-agregar">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end"
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-xl">
                <div class="modal-body mb-0 overflow-y-auto ml-4 h-auto">
                    <h4 class="text-black text-center text-2xl font-bold">Subir archivo</h4>
                    <div class=" my-2">
                        <label class=" block text-gray-700 font-semibold">Usuario</label>
                        <input class="w-full px-4 py-2 border rounded-md  focus:border-blue-500 pr-10">
                    </div>
                    <label class=" block text-gray-700 font-semibold">Adjuntar documento</label>
                    <div class="flex items-center justify-center w-[500px]">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Dale
                                        click para subir el archivo</span> o arrastra y suelta</p>
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="close-agregar ver-Check flex justify-center gap-2 bg-[#01A080] text-[#F6F6F6] mt-4 font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF] ">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div class=" check h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-Check">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end  "
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-2xl">
                <div class="modal-body mb-0 overflow-y-auto h-[190px]">
                    <h4 class="text-black text-center mt-3 text-2xl font-bold">¡El archivo ha sido enviado correctamente!
                    </h4>
                    <div class=" flex justify-center">
                        <img src="{!! asset('img/check.png') !!}" class="w-[50px] h-[50px] items-center mt-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/progress.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/line-chart.js') }}"></script>

    <script>
        const libro = document.querySelector('.libro');
        const verLibro = document.querySelector('.verLibro');
        const closeLibro = document.querySelectorAll('.close-Libro');

        verLibro.addEventListener('click', function() {
            libro.classList.remove('hidden')
        });

        closeLibro.forEach(close => {
            close.addEventListener('click', function() {
                libro.classList.add('hidden')
            });
        });
    </script>

    <script>
        const agregar = document.querySelector('.agregar');
        const verAgregar = document.querySelector('.ver-Agregar');
        const closeAgregar = document.querySelectorAll('.close-agregar');

        verAgregar.addEventListener('click', function() {
            agregar.classList.remove('hidden')
        });
        closeAgregar.forEach(close => {
            close.addEventListener('click', function() {
                agregar.classList.add('hidden')
            });
        });
    </script>
    <script>
        const check = document.querySelector('.check');
        const verCheck = document.querySelector('.ver-Check');
        const closeCheck = document.querySelectorAll('.close-Check');
        const verAgregar2 = document.querySelector('.ver-Agregar2');
        const verAgregar3 = document.querySelector('.ver-Agregar3');

        verAgregar2.addEventListener('click', function() {
            agregar.classList.remove('hidden')
        });
        verAgregar3.addEventListener('click', function() {
            agregar.classList.remove('hidden')
        });
        verCheck.addEventListener('click', function() {
            check.classList.remove('hidden')
        });

        closeCheck.forEach(close => {
            close.addEventListener('click', function() {
                check.classList.add('hidden')
            });
        });
    </script>
    {{-- <script>
        const modal3 = document.querySelector('.modal3');
        const showModal3 = document.querySelector('.show-modal3');
        const closeModal3 = document.querySelectorAll('.close-modal3');

        showModal3.addEventListener('click', function() {
            modal2.classList.remove('hidden')
        });
        closeModal3.forEach(close => {
            close.addEventListener('click', function() {
                modal1.classList.add('hidden')
            });
        });
    </script> --}}

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {}
        });
    </script>

    <script>
        // Desplaza automáticamente hacia abajo al cargar la página
        window.onload = function() {
            var container = document.querySelector('.content_conteiner');
            container.scrollTop = container.scrollHeight;
        };
    </script>
@endsection
