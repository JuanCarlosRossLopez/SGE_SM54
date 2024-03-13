@extends('test.test_template')
@section('title')
    Panel de control asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard asesor, </label>
            <label>Mayra Guadalupe</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-person-chalkboard"></i>
            </label>
        </div>
        <div class="conteiner_cards w-full flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-[79%]">
                <div>
                    <div class="content_conteiner w-full h-fit">
                        <label class="conteiner_word_title flex flex-col items-center">Acciones varias</label>
                        <div class="conteiner_cards2 w-full mt-3">
                            <!-- Panel 2 -->
                            <div class=" bg-white w-full p-3 rounded">
                                <div class=" justify-between w-full text-center flex flex-row items-center">
                                    <label
                                        class="font-semibold font-poppins text-lg text-start w-full">Anteproyectos</label>
                                    <div class=" flex relative dropdown-trigger">
                                        <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>
                                        <div class="hidden dropdown-content">
                                            <a href="/gestion_asesor_anteproyecto"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">En proceso</a>
                                            <a href="/gestion_asesor_anteproyecto"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Finalizados</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="font-normal font-poppins text-base text-start w-full">Ver
                                        anteproyectos</label>
                                </div>
                                <div
                                    class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                                    <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                                </div>
                            </div>


                            <!-- Panel 1 -->
                            <div class="bg-white p-3 rounded">
                                <div class="justify-between w-full text-center flex flex-row items-center">
                                    <label class="font-semibold font-poppins text-lg text-start w-full">Panel de
                                        alumnos</label>
                                    <div class="relative dropdown-trigger">
                                        <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>
                                        <div class="hidden absolute dropdown-content">
                                            <a href="/alumnos_asesorados"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Ver
                                                mis asesorados</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="font-normal font-poppins text-base text-start w-full">Gestión de mis
                                        asesorados</label>
                                </div>
                                <div
                                    class="flex flex-row items-center justify-start font-bold text-gray-400 text-[13px] gap-2">
                                    <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_conteiner w-full h-fit">
                        <label class="conteiner_word_title w-full flex flex-col items-center">Resumen de anteproyectos
                            asesorados</label>
                        <div class="conteiner_cards2 mt-3">
                            <!-- Panel 1 -->
                            <div class="bg-white rounded p-3 w-full h-fit flex flex-col items-center">
                                <label>Kisaku</label>
                                <div class="progress-item ">
                                    <svg width="190" height="190" class="progress-chart">
                                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none">
                                        </circle>
                                        <circle cx="85" cy="85" r="80" class="progress-front3" fill="none"
                                            stroke-dasharray="0 1000000"></circle>
                                        <g class="progress-text">
                                            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                id="percentage3">0%</text>
                                        </g>
                                    </svg>
                                </div>
                                <a href="/datos_proyecto" class="Button-progress">Visualizar detalles</a>
                            </div>
                            <!-- Panel 2 -->
                            <div class="bg-white rounded p-3 w-full h-fit flex flex-col items-center">
                                <label>Gym Bro</label>
                                <div class="progress-item ">
                                    <svg width="190" height="190" class="progress-chart">
                                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none">
                                        </circle>
                                        <circle cx="85" cy="85" r="80" class="progress-front2" fill="none"
                                            stroke-dasharray="0 1000000"></circle>
                                        <g class="progress-text">
                                            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                id="percentage2">0%</text>
                                        </g>
                                    </svg>
                                </div>
                                <a href="/datos_proyecto" class="Button-progress">Visualizar detalles</a>
                            </div>
                            <!-- Panel 3 -->
                            <div class="bg-white rounded p-3 w-full h-fit flex flex-col items-center">
                                <label>Tas'k in</label>
                                <div class="progress-item ">
                                    <svg width="190" height="190" class="progress-chart">
                                        <circle cx="85" cy="85" r="80" class="progress-back" fill="none">
                                        </circle>
                                        <circle cx="85" cy="85" r="80" class="progress-front" fill="none"
                                            stroke-dasharray="0 1000000"></circle>
                                        <g class="progress-text">
                                            <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                id="percentage">0%</text>
                                        </g>
                                    </svg>
                                </div>
                                <a href="/datos_proyecto" class="Button-progress">Visualizar detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-fit">
                <div class="content_conteiner h-fit p-1 w-[20rem]  sm:ml-0">
                    <div class="flex flex-col gap-1">
                        <label class="conteiner_word_title  h-fit flex flex-col items-center">¿Qué más?</label>
                        <div class="bg-white p-3 rounded">
                            <div class="w-[16rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-base text-start w-full">Libros</label>
                                <div class="relative dropdown-trigger">
                                    <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="hidden absolute dropdown-content">
                                        <button class="w-full show-modal px-4 py-2 text-gray-800 hover:bg-gray-200">
                                            Ver libros
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Información de los
                                    Libros</label>
                            </div>
                        </div>
                        <div class="bg-white w-full p-3 rounded">
                            <div class="w-[16rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-base text-start w-full">Historial de
                                    memorias</label>
                                <div class="relative dropdown-trigger">
                                    <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="hidden dropdown-content">
                                        <a href="/historial-memorias"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Ver memorias</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Consultar
                                    memorias</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_conteiner h-fit p-0 w-[20rem] sm:ml-0">
                    <div class="flex flex-col gap-0">
                        <div
                            class="border-2  rounded-[7px_7px_7px_7px] p-1 bg-[#F6F6F6] shadow w-full max-w-[220px] md:max-w-[715px] lg:max-w-[645px] h-fit">
                            <label
                                class="conteiner_word_title  h-fit flex flex-col items-center font-semibold text-lg text-[#18A689]">Recordatorios</label>
                            <div class="overflow-auto h-fit p-0">
                                <div class="flex flex-col">
                                    <div
                                        class="flex flex-row gap-0 border-1 border-[#2F4050] rounded-[7px_7px_7px_7px] p-2 bg-[#2F4050] text-white mt-4 mb-1 font-base">
                                        <p>05 Febrero | 8:30 AM</p>
                                        <p>Revisión de Memoria</p>
                                    </div>
                                    <div
                                        class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-2 bg-[#18A689] text-white my-1 font-base text-[12px]">
                                        <p>20 Febrero | 1:15 PM</p>
                                        <p>Revisión de Memoria</p>
                                    </div>
                                    <div
                                        class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-2 bg-[#18A689] text-white my-1 font-base text-[12px]">
                                        <p>20 Febrero | 1:15 PM</p>
                                        <p>Revisión de Memoria</p>
                                    </div>
                                    <div
                                        class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-2 bg-[#18A689] text-white my-1 font-base text-[12px]">
                                        <p>20 Febrero | 1:15 PM</p>
                                        <p>Revisión de Memoria</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal h-screen/2 w-full fixed flex-col left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

        <div class="bg-[#01A080] w-2/3 rounded shadow-lg ">
            <div class=" border-b px-2 py-2 flex justify-between items-center">
                <div></div>
                <label class="font-semibold text-lg text-white text-center">Lista de libros este cuatri</label>
                <div class="w-fit flex flex-col items-end justify-end p-2">
                    <button class="close-modal  rounded-full">
                        <p class="text-2xl  "><i class="fa-solid fa-circle-xmark bg-white rounded-full"
                                style="color: #d50101;"></i></p>
                    </button>
                </div>
            </div>
            <div class="bg-white w-full h-[85vh] p-2 flex flex-col items-center overflow-y-auto">
                <div class="conteiner_cards2 w-full mt-3">
                    <!-- Panel 2 -->
                    <div class=" bg-[#e8e8e8] w-full p-3 rounded flex flex-col items-center">
                        <div class="w-full flex flex-row p-2 ">
                            <label class="font-semibold font-poppins text-lg text-center w-full">Clean Code</label>
                            <div class="w-fit  flex relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden dropdown-content">
                                    <label class="block px-4 py-2 text-gray-800 text-lg font-semibold text-center">Estudiantes</label>
                                    <label  class="block px-4 py-2 text-gray-800 text-center">22393231</label>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white w-fit">
                            <img src="{{ asset('image/libro.jpeg') }}" alt="Libro Image" class="">
                        </div>
                    </div>
                    <div class=" bg-[#e8e8e8] w-full p-3 rounded flex flex-col items-center">
                        <div class="w-full flex flex-row p-2 ">
                            <label class="font-semibold font-poppins text-lg text-center w-full">Eloquent</label>
                            <div class="w-fit  flex relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden dropdown-content">
                                    <label class="block px-4 py-2 text-gray-800 text-lg font-semibold text-center">Estudiantes</label>
                                    <label  class="block px-4 py-2 text-gray-800 text-center">22393231</label>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white w-fit">
                            <img src="{{ asset('image/libro1.jpeg') }}" alt="Libro Image" class="">
                        </div>
                    </div>
                    <div class=" bg-[#e8e8e8] w-full p-3 rounded flex flex-col items-center">
                        <div class="w-full flex flex-row p-2 ">
                            <label class="font-semibold font-poppins text-lg text-center w-full">Python para principiantes</label>
                            <div class="w-fit  flex relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden dropdown-content">
                                    <label class="block px-4 py-2 text-gray-800 text-lg font-semibold text-center">Estudiantes</label>
                                    <label  class="block px-4 py-2 text-gray-800 text-center">22393231</label>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white w-fit">
                            <img src="{{ asset('image/libro2.jpeg') }}" alt="Libro Image" class="">
                        </div>
                    </div>
                    <div class=" bg-[#e8e8e8] w-full p-3 rounded flex flex-col items-center">
                        <div class="w-full flex flex-row p-2 ">
                            <label class="font-semibold font-poppins text-lg text-center w-full">Fundamentos de sistemas operativos</label>
                            <div class="w-fit  flex relative dropdown-trigger">
                                <button class="dropdown-btn w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="hidden dropdown-content">
                                    <label class="block px-4 py-2 text-gray-800 text-lg font-semibold text-center">Estudiantes</label>
                                    <label  class="block px-4 py-2 text-gray-800 text-center">22393231</label>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white w-fit">
                            <img src="{{ asset('image/libro3.jpg') }}" alt="Libro Image" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('js/progress.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('js/line-chart.js') }}"></script>
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
            const modal = document.querySelector('.modal');
            //Funcionamiento de modal
            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden')
            })

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden')
                })
            })
        </script>

        <script>
            // Desplaza automáticamente hacia abajo al cargar la página
            window.onload = function() {
                var container = document.querySelector('.content_conteiner');
                container.scrollTop = container.scrollHeight;
            };
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var dropdownTriggers = document.querySelectorAll(".dropdown-trigger");

                dropdownTriggers.forEach(function(dropdownTrigger) {
                    var dropdownBtn = dropdownTrigger.querySelector(".dropdown-btn");
                    var dropdownContent = dropdownTrigger.querySelector(".dropdown-content");

                    dropdownBtn.addEventListener("click", function(event) {
                        event
                            .stopPropagation(); // Evita que el evento de clic se propague al contenedor externo
                        dropdownContent.classList.toggle("hidden");
                    });

                    // Para cerrar el dropdown si se hace clic fuera de él
                    window.addEventListener("click", function(event) {
                        if (!dropdownContent.contains(event.target) && !dropdownBtn.contains(event
                                .target)) {
                            dropdownContent.classList.add("hidden");
                        }
                    });
                });
            });
        </script>
    @endsection
