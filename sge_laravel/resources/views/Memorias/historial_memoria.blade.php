@extends('templates.template_teacher')

@section('project_teacher')
<head>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<div class="container mx-auto my-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-light ml-[2%]">HISTORIAL DE MEMORIAS</h1>
        <br/>
    </div>
    <div class="mt-4 ml-[2%]">
        <input type="text"
            class="border border-gray-300 px-5 py-2 rounded-l-md focus:outline-none focus:ring focus:border-blue-500"
            placeholder="Buscar..." />
        <button
            class="border border-gray-300 bg-gray-100 px-4 py-2 rounded-r-md focus:outline-none focus:ring focus:border-blue-500">
            <i class="fas fa-search text-gray-500"></i>
        </button>
    </div>
    <br/>
    <br/>
    <table class="table-auto w-full rounded-lg overflow-hidden ml-[2%]">
        <thead class="bg-[#6BBBAA]">
            <tr>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">#</th>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">Titulo Memoria</th>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">Estudiante</th>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">Grupo</th>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">Año de realización</th>
                <th class="border border-gray-400 px-4 py-2 text-center font-bold text-xl">Acción</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">1</td>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">Huerto Inteligente</td>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">Pedro Josué Che Cahun</td>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">SM54</td>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">2023</td>
                <td class="border border-gray-400 px-4 py-2 text-center font-light text-xl">
                    <i class="fa-solid fa-book-open"></i>
                    
                </td>
            </tr>

        </tbody>
    </table>
</div>

@endsection