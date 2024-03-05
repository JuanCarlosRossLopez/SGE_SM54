@extends('templates.template_students')

@section('titulo')
    SGE
@endsection

@section('formulario')
<h1 class=" text-3xl font-bold mb-4">Gestión de Anteproyecto</h1>
<div class="max-w-6xl bg-gray-200 p-6 rounded-md  border-green-400 border-2">
    
    <form class="space-y-6">
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título del proyecto</label>
            <div class="flex items-center">
                <input type="text" id="titulo" name="titulo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <i class="fa-regular fa-comment fa-xl ml-2" style="color: #18A689;"></i>
                <i class="fa-regular fa-pen-to-square fa-xl ml-2" style="color: #18A689;"></i>
            </div>
        </div>
        <div>
            <label for="objetivo_general" class="block text-sm font-medium text-gray-700">Objetivo General</label>
            <div class="flex items-center">
                <textarea id="objetivo_general" name="objetivo_general" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-xl ml-2" style="color: #18A689;"></i>
                <i class="fa-regular fa-pen-to-square fa-xl ml-2" style="color: #18A689;"></i>
            </div>
        </div>
        
        <div>
            <label for="objetivos_especificos" class="block text-sm font-medium text-gray-700">Objetivos Específicos</label>
            <div class="flex items-center">
                <textarea id="objetivos_especificos" name="objetivos_especificos" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-xl ml-2" style="color: #18A689;"></i>
                <i class="fa-regular fa-pen-to-square fa-xl ml-2" style="color: #18A689;"></i>
            </div>
        </div>
        
        <div>
            <label for="alcance_proyecto" class="block text-sm font-medium text-gray-700">Alcance del proyecto</label>
            <div class="flex items-center">
                <textarea id="alcance_proyecto" name="alcance_proyecto" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-xl ml-2" style="color: #18A689;"></i>
                <i class="fa-regular fa-pen-to-square fa-xl ml-2" style="color: #18A689;"></i>
            </div>
        </div>
        
        <div>
            <label for="justificacion" class="block text-sm font-medium text-gray-700">Justificación</label>
            <div class="flex items-center">
                <textarea id="justificacion" name="justificacion" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                <i class="fa-regular fa-comment fa-xl ml-2" style="color: #18A689;"></i>
                <i class="fa-regular fa-pen-to-square fa-xl ml-2" style="color: #18A689;"></i>
            </div>
        </div>
        
        <div class="flex justify-center max-w-6xl"> 
            <button type="submit" class="py-3 px-6 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Enviar
            </button>
        </div>
            
        </form>
    </div>
@endsection
