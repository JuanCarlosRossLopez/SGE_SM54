@extends('test.template')

@section('contenido')
<div class="back_conteiner">
    <div class="top_conteiner">
        <label>Aqui el titulo de tu vista, te recomiendo cambiar el icono</label>
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
        <label class="conteiner_word_title">Si tiene un subtema tu vista ponlo aqui</label>
        <!-- Aqui va todo lo que esta en tu vista -->
    </div>
</div>

<!-- De aqui para abajo es tu vista -->

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