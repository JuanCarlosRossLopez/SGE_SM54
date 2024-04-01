@extends('test.final_template')
@section('title')
    Panel de control asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">


                <!-- Contenedor para cards de acciones -->
                <div class="conteiner_card">
                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-file-pen"></i></label>
                            </div>
                            <div class="">
                                <h1>Ver anteproyectos</h1>
                                <div class="flex flex-col gap-1">
                                    <button class="buttons_card">Todos los anteproyectos</button>
                                    <button class="buttons_card ">Solo anteproyectos en revisión</button>
                                    <button class="buttons_card">Solo anteproyectos aprobados</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->

                    <!-- INICIO CARD ejemplo-->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-users"></i></label>
                            </div>
                            <div>
                                <h1>Mis estudiantes</h1>
                                <div class="flex flex-col gap-1">
                                    <button class="buttons_card">Ver mis estudiantes asesorados</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD ejemplo -->
                </div>




                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Resumen diario de mis anteproyectos como asesor:</label>
                    <div class="conteiner_cards2">
                        <!-- Panel 1 -->
                        @foreach ($Project_management as $project)
                            <div class="bg-[#F7FAFC] border rounded p-4 w-full h-fit flex flex-col items-center">
                                <label class="text-xl text-[#333333] uppercase font-semibold">{{ $project->project_title }}</label>
                                <a href="{{ route('information_project.show', $project->id) }}" class="buttons_card flex justify-center mt-2">Visualizar detalles</a>
                            </div>
                        @endforeach

                        <!-- Panel 3 -->

                    </div>
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <button class="show-modal bg-[#DEF7EC] w-full p-2 rounded text-center flex flex-row text-[#046C4E] items-center justify-center gap-2 text-lg">
                            <i class="fi fi-sr-books flex"></i><label class="font-poppins font-normal text-start cursor-pointer">Ver libros</label>
                        </button>
                        <a href="/memory" class="bg-[#DEF7EC] w-full p-2 rounded text-center flex flex-row text-[#046C4E] items-center justify-center gap-2 text-lg">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button  class="font-poppins font-normal text-start cursor-pointer"> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center cursor-pointer text-lg">Sin nada que hacer hijo de su pinche madre</p>
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
