@extends('test.template')
@section('titulo')
    Panel de control administrador
@endsection
@section('contenido')
<head>
    <meta name="viewport" content="width=device-width,init-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Bienvenido(a), presidenta Mayra</label>
            <label>
                <!-- Este svg es el icono -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>

        <div class="content_conteiner">
            <div class="flex flex-row items-center gap-2">
                <label class="conteiner_word_title">Panel de presidencia desarrollo de software multiplataforma </label>
                <label id="infoButton" class="cursor-pointer mt-3"
                    data-tooltip="Recomiendo ponerle una descripción a la vista">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
                </label>
            </div>

            <!-- Aqui va todo lo que esta en tu vista -->
        </div>
    </div>


    <!-- cuerpo del dashboard -->
    <div class="flex flex-row md:flex-col px-12 space-y-6 md:space-y-0 md:space-x-11">
        <div class="bg-white w-full md:w-[800px] h-[27rem] rounded-md flex items-center object-center">
            <canvas id="line-chart"></canvas>
        </div>
        <div class="bg-rwhite w-full md:w-[450px] flex items-center object-center h-96 rounded-md ">
            <canvas id="donut-chart"></canvas>
        </div>
    </div>
    <div class="flex flex-col md:flex-row py-12 px-12 space-y-6 md:space-y-0 md:space-x-3">
        <div class="bg-white  w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3">Historial de memoria</h1>
            <img src="{{ asset('image/file-circle-info 1.svg') }}" alt="Logo Image" class="object-cover m-auto mt-10">
            <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
        </div>
        <div class="bg-white  w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3">Proyectos finalizados</h1>
            <img src="{{ asset('image/features-alt 1.svg') }}" alt="Logo Image" class="object-cover m-auto mt-10 ">
            <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm bottom-6">Visualizar</button>
        </div>
        <div class="bg-white w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3">Proyectos aprobados</h1>
            <img src="{{ asset('image/memo-circle-check 1.svg') }}" alt="Logo Image" class="object-cover m-auto mt-10">
            <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>

        </div>
        <div class="bg-white  w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3"> Asesores</h1>
            <img src="{{ asset('image/workshop 1.svg') }}" alt="Logo Image" class="object-cover m-auto mt-10">
            <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
        </div>
    </div>
    <div class="py-12 px-12">
        <div class="">
            <div class="bg-white w-full md:w-[2000px] h-[28rem] ml-48 rounded-md flex items-center object-center"">
                <canvas id="hola-chart"></canvas>
            </div>
        </div>
        </d>
    </div>
    </div>
    </div>
    </div>
    <footer>
        <script src="{{ asset('js/cedulas.js') }}"></script>
    <script src="{{asset('js/alumnos.js')  }}"></script>
    <script src="{{asset('js/grafica_admin.js')  }}"></script>

    </footer>
@endsection
    
    
