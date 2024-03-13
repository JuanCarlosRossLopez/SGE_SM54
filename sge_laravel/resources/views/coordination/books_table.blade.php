@extends('test.test_template')

@section('title')
    Panel de control coordinación
@endsection

@section('contenido')

<div class="back_conteiner">
    <div class="top_conteiner">
        <label>Libros donados por los Estudiantes</label>
        <label>
            <!-- Este svg es el icono -->
            <i class="fa-solid fa-user-tie"></i>
        </label>
    </div>

<div class="bg-gray-100 rounded border mt-1 p-2">

    <div class="w-full flex flex-row justify-between mt-2">
        <div class="flex">
            <button class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                <i class="fas fa-search text-gray-500"></i>
            </button>
            <input type="text" class="border border-gray-300 w-[30rem] px-2 py-1 rounded-r-md" placeholder="Buscar..." />
        </div>
    </div>

    <table class="w-full mt-2 border">
        <thead class="bg-[#01A080] text-center text-white">
            <tr>
                <th class="px-4 py-2 border-b">Matrícula</th>
                <th class="px-4 py-2 border-b">Nombre del libro</th>
                <th class="px-4 py-2 border-b">Descripción</th>
                <th class="px-4 py-2 border-b">Autor</th>
                <th class="px-4 py-2 border-b">Precio</th>
                <th class="px-4 py-2 border-b">Estudiante</th>
                <th class="px-4 py-2 border-b">Carrera</th>
                <th class="px-4 py-2 border-b">Grupo</th>
                <th class="px-4 py-2 border-b">Proyectos</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="bg-red-white hover:bg-[#5e5f5f46]">
                <td class="px-4 py-2 border-b">22393169</td>
                <td class="px-4 border-b">JavaScript en el futuro</td>
                <td class="px-4 py-2 border-b">Habla sobre el campo de este lenguaje muy conocido</td>
                <td class="px-4 border-b">Leonardo Di Caprio</td>
                <td class="px-4 border-b">$899.00</td>
                <td class="px-4 border-b">Marco Antonio Hau Pech</td>
                <td class="px-4 border-b">Desarrollador software multiplataforma</td>
                <td class="px-4 border-b">SM54</td>
                <td class="px-4 border-b">Sistema Gestor de Estadias</td>
                <td class="w-full flex flex-row items-center justify-center py-2 gap-2 border-b">
                    
                </td>
            </tr>
        </tbody>
    </table>
    
    <div class="flex justify-end mt-2">
        <button @click="currentPage = currentPage > 1 ? currentPage - 1 : 1" class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
            Anterior
        </button>
        <input type="number" x-model="currentPage" class="border border-gray-300 w-20 px-2 py-1 text-center" />
        <button @click="currentPage = currentPage < totalPages ? currentPage + 1 : totalPages" class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
            Siguiente
        </button>
    </div>
    
    <div class="text-gray-700 ml-auto">Total de registros: <span id="rowCount">2</span></div>
</div>

@endsection
