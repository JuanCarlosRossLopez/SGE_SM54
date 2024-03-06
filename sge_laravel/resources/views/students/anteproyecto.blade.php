@extends('templates.template_students')

@section('titulo')
    SGE
@endsection

@section('formulario')
<h1 class=" text-4xl font-normal uppercase mb-4">Gestión de Anteproyecto</h1>
<div class="w-[95%] bg-[#F6F6F6] p-6 rounded-md border-[#18A689] border-1 md:ml-3">
    
    <form class="space-y-6">
        <div>
            <label for="titulo" class="block text-sm font-medium">Título del proyecto</label>
            <div class="flex items-center">
                <input type="text" id="titulo" name="titulo" class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <i class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
                <i class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
            </div>
        </div>
        <div>
            <label for="objetivo_general" class="block text-sm font-medium">Objetivo General</label>
            <div class="flex items-center">
                <textarea id="objetivo_general" name="objetivo_general" rows="4" class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
                <i class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
            </div>
        </div>
        
        <div>
            <label for="objetivos_especificos" class="block text-sm font-medium">Objetivos Específicos</label>
            <div class="flex items-center">
                <textarea id="objetivos_especificos" name="objetivos_especificos" rows="4" class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
                <i class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
            </div>
        </div>
        
        <div>
            <label for="alcance_proyecto" class="block text-sm font-medium">Alcance del proyecto</label>
            <div class="flex items-center">
                <textarea id="alcance_proyecto" name="alcance_proyecto" rows="4" class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
                <i class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
            </div>
        </div>
        
        <div>
            <label for="justificacion" class="block text-sm font-medium">Justificación</label>
            <div class="flex items-center">
                <textarea id="justificacion" name="justificacion" rows="4" class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
                <i class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer"></i>
            </div>
        </div>
        
        <div class="flex justify-center max-w-6xl items-center mx-auto"> 
            <button type="submit" class="p-2 h-12 w-24 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#2F4050] hover:bg-[#18A689] outline-none">
                Enviar
            </button>
        </div>
            
        </form>
    </div>
@endsection
