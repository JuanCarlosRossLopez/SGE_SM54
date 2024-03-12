@extends('templates.template_admin')
@section('titulo')
Panel de control administrador
@endsection
@section('contenido')
<div class="p-3"> 
    <!-- container titulo -->
    <div class="p-2 m-2 rounded-md bg-[#E3E3E3] poppins-light text-[40px] ">
        <h1>Bienvenido Rafael Villegas</h1>
    </div>
    <div class="bg-[#C8C8C8] m-2 p-2 rounded-md poppins-light text-[30px]">
        <h2>
        Panel de administración
        </h2>
    </div>
    <div class="flex flex-col">
        <canvas  width="200" height="200" class=""></canvas>
    </div>
    <!-- cuerpo del dashboard -->
    <div>
        <!-- cuerpo del dashboard -->
    <div class="flex flex-row px-12 space-x-11">
        <div class="bg-white w-[800px] h-96 rounded-md flex items-cente">
            
                <img src="{{ asset('image/Group 16.png') }}" alt="Logo Image" class=" object-cover m-auto mt-10 ">
            
        </div>
        <div class="bg-white w-[450px] h-96 rounded-md ">
            <img src="{{ asset('image/Group 9.png') }}" alt="Logo Image" class=" object-cover m-auto mt-10 ">
        </div>
    </div>
    <div class="flex flex-row py-12 px-12 space-x-3  ">
        <div class="bg-white  w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3">Historial de memoria</h1>
            <img src="{{ asset('image/file-circle-info_1.png') }}" alt="Logo Image" class="object-cover m-auto mt-10">
            <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
        </div>
        <div class="bg-white  w-80 h-80 rounded-md text-center">
            <h1 class="poppins-light m-3">Proyectos finalizados</h1>
        <img src="{{ asset('image/features.png') }}" alt="Logo Image" class="object-cover m-auto mt-10 ">
        <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm bottom-6">Visualizar</button>
        </div>
        <div class="bg-white w-80 h-80 rounded-md text-center">
        <h1 class="poppins-light m-3">Proyectos aprobados</h1>
        <img src="{{ asset('image/memo-circle-check 1.png') }}" alt="Logo Image" class="object-cover m-auto mt-10">
        <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>

        </div>
        <div class="bg-white  w-80 h-80 rounded-md text-center">
        <h1 class="poppins-light m-3"> Asesores</h1>
        <img src="{{ asset('image/workshop 1.png') }}" alt="Logo Image" class="object-cover m-auto mt-10">
        <button class="bg-[#18A689] text-white w-32 h-9 rounded-md text-sm">Visualizar</button>
        </div>

        
    </div>
    <div class="py-12 px-12">
    <div class="bg-white w-auto h-80  flex justify-center">
        <div>
            <img src="{{ asset('image/Group 16.png') }}" alt="Logo Image" class="object-cover m-auto mt-10">
        </div>
    </div>
    </d>
  
   
</div>

        
    </div>
</div>
@endsection


