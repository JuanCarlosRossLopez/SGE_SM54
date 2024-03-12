@extends('test.template')
@section('titulo')
    Panel de control administrador
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Dashboard administrador</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-user-tie"></i>
            </label>
        </div>
        <div class="conteiner_cards">
            <div class="conteiner_cards flex flex-col gap-0 w-fit">
                <div class="content_conteiner h-fit ">
                    <label class="conteiner_word_title flex flex-col items-center">Acciones varias</label>
                    <div class="conteiner_cards">
                        <!-- Panel 1 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[18rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-xl text-start w-full">Panel de
                                    asesoramiento</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-lg text-start w-full">Asignar asesores</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-sm gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>

                        <!-- Panel 2 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[18rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-xl text-start w-full">Panel de algo</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-lg text-start w-full">Gestionar 1</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-sm gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>

                        <!-- Panel 3 -->
                        <div class="bg-white p-3 rounded">
                            <div class="w-[18rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-xl text-start w-full">Panel de algo 2</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-lg text-start w-full">Gestionar 2</label>
                            </div>
                            <div class="flex flex-row items-center justify-start font-bold text-gray-400 text-sm gap-2">
                                <i class="fa-regular fa-clock"></i><label>Hace 3hrs</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_conteiner gap-2 h-fit">
                    <label class="conteiner_word_title flex flex-col items-center">Graficas</label>
                    <div class="conteiner_cards w-full gap-2">
                        <!-- Panel 1 -->
                        <div class="bg-white w-1/2 p-2 rounded">
                            <div class="line-chart-container">
                                <h1>AVANCE DE LOS ALUMNOS</h1>
                                <canvas id="line-chart"></canvas>
                            </div>
                        </div>
                        <div class="bg-white w-1/3 p-3 rounded">
                            <div class="w-[18rem] text-center flex flex-row items-center">
                                <label class="font-semibold font-poppins text-base text-start w-full">Información relevante</label>
                                <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                        class="fa-solid fa-ellipsis-vertical"></i></button>
                            </div>
                            <div>
                                <label class="font-normal font-poppins text-sm text-start w-full">Descripciones</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_conteiner p-1 w-fit bg-blue-900">
                <div class="flex flex-col gap-1">
                    <label class="conteiner_word_title  h-fit flex flex-col items-center">¿Qué más?</label>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[18rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-base text-start w-full">Panel de algo 2</label>
                            <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Gestionar 2</label>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[18rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-base text-start w-full">Panel de algo 2</label>
                            <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Gestionar 2</label>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[18rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-base text-start w-full">Panel de algo 2</label>
                            <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Gestionar 2</label>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[18rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-base text-start w-full">Panel de algo 2</label>
                            <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Gestionar 2</label>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div class="w-[18rem] text-center flex flex-row items-center">
                            <label class="font-semibold font-poppins text-base text-start w-full">Panel de algo 2</label>
                            <button class="w-[2rem] h-[2rem] hover:bg-slate-300 rounded-full "><i
                                    class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div>
                            <label class="font-normal font-poppins text-sm text-start w-full">Gestionar 2</label>
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
        // Desplaza automáticamente hacia abajo al cargar la página
        window.onload = function() {
            var container = document.querySelector('.content_conteiner');
            container.scrollTop = container.scrollHeight;
        };
    </script>
@endsection
