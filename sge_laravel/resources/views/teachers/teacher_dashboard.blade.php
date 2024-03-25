@extends('test.test_template')
@section('title')
    Panel de control asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>
                @if (Auth::user()->teachers)
                    Bienvenido Asesor, {{ Auth::user()->teachers->name_teacher }}
                @else
                    No se encontró información del asesor para este usuario.
                @endif
            </label>

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
                    <!-- Mapeo de anteproyectos -->
                    <div class="content_conteiner w-full h-fit">
                        <label class="conteiner_word_title w-full flex flex-col items-center">Resumen de anteproyectos
                            asesorados</label>
                        <div class="conteiner_cards2 mt-3">
                            <!-- Panel 1 -->
                            @foreach ($Project_management as $project)
                                <div class="bg-white rounded p-3 w-full h-fit flex flex-col items-center">
                                    <label>
                                        <p>{{ $project->project_title }}</p>
                                        <!-- Mostrar más información del proyecto según tus necesidades -->
                                    </label>
                                    <div class="progress-item">
                                        <svg width="190" height="190" class="progress-chart">
                                            <circle cx="85" cy="85" r="80" class="progress-back"
                                                fill="none"></circle>
                                            <circle cx="85" cy="85" r="80" class="progress-front3"
                                                fill="none" stroke-dasharray="0 1000000"></circle>
                                            <g class="progress-text">
                                                <text x="92" y="88" alignment-baseline="middle" text-anchor="middle"
                                                    id="percentage3">0%</text>
                                            </g>
                                        </svg>
                                    </div>
                                    <a href="{{ route('information_project.show', $project->id) }}" class="Button-progress">Visualizar
                                        detalles</a>
                                </div>
                            @endforeach

                            <!-- Panel 3 -->

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
                                        <a href="/memory" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Ver
                                            memorias</a>
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
                            <br />
                            <div class="overflow-auto h-fit p-0">
                                <div class="flex flex-col">

                                    <p class="font-medium text-xl text-center">Sin revisiones</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal h-screen/2 w-full fixed flex-col left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

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
                    <p class="text-2xl font-light text-center">Ningún libro subido este cuatrimestre</p>


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
