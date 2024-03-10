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
        <div>
            <h1>Grafica anteproyecots</h1>
        </div>
        <div>
            <h1>
                Proyectos
            </h1>
        </div>
    </div>
</div>
@endsection


