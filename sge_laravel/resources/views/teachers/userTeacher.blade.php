@extends('templates.template_teacher')

@section('titulo')
    ADMINISTRACIÓN DE CUENTA
@endsection

@section('contenido')
<h1 class="text-4xl font-bold text-center mt-16 mb-8">PERFIL DE DOCENTE</h1>
<div class="container grid grid-cols-3 gap-8 bg-[#F6F6F6] rounded-md p-4">
    <div class="container">
        <div class="flex mb-4">
            <div class="bg-gray-200 rounded-lg p-8 mr-8 h-[310px] w-[300px]">
                <div class="bg-white rounded-lg flex items-center justify-center mb-4 h-[200px] w-[230px]">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Imagen de perfil">
                </div>
                <button class="bg-teal-500 hover:bg-teal-700 w-[230px] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cambiar Imagen</button>
            </div>
        </div>
        <form class="grid grid-cols-2 gap-4 mb-4 justify-center">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text" class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4 justify-center">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text" class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>
    

    <div class="container mt-8">
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-3">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>

    <div class="container mt-8">
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <form class="grid grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold">Campo 1:</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <div class="mt-8">
            <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded focus:outline-none focus:shadow-outline">Guardar</button>
        </div>
    </div>
    @endsection
