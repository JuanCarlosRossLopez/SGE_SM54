@extends('test.test_template')

@section('titulo')
    ADMINISTRACIÓN DE CUENTA
@endsection

@section('contenido')

<!-- De aqui para abajo es tu vista -->

    <h1 class="text-4xl font-bold text-center mt-16 mb-8">PERFIL DE USUARIO</h1>
    <div class="container grid grid-cols-3 gap-8 bg-[#F6F6F6] rounded-md p-4">
        <div class="container">
            <div class="flex mb-4">
                <div class="bg-gray-300 rounded-lg p-8 mr-8 h-[310px] w-[300px]">
                    <div class="bg-white rounded-lg flex items-center justify-center mb-4 h-[200px] w-[230px]">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Imagen de perfil">
                    </div>
                    <button class="bg-teal-500 hover:bg-teal-700 w-[230px] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cambiar Imagen</button>
                </div>
            </div>
            <form class="grid grid-cols-2 gap-4 mb-4 justify-center">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Asesor:</label>
                    <input type="text" class="shadow-2xl appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <form class="grid grid-cols-2 gap-4 mb-4 justify-center">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Empresa:</label>
                    <input type="text" class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
        </div>
        

        <div class="container mt-8">
            <form class="grid grid-cols-2 gap-4 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Nombre:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <form class="grid grid-cols-2 gap-4 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Apellidos Paternos:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <form class="grid grid-cols-2 gap-4 mb-2">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Apellidos Maternos:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <form class="grid grid-cols-2 gap-4 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Division:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <form class="grid grid-cols-2 gap-4 mb-3">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold">Carrera:</label>
                    <input type="text"
                        class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </form>
        </div>

        <div class="container mt-9">
            <form class="grid grid-cols-2 gap-8 mb-4">
              <div class="mb-4">
                <div class="flex items-center justify-center text-center text-2xl bg-green-600 rounded-2xl p-4 w-[300px] h-[50px]">
                  <card>Status:</card>
                </div>
              </div>
            </form>
          
            <form class="grid grid-cols-2 gap-4 mb-4">
              <div class="mb-4">
                <div class="flex items-center justify-center text-center text-2xl bg-blue-300 rounded-2xl p-4 w-[300px] h-[50px]">
                  <card>Aprobado</card>
                </div>
              </div>
            </form>
          
            <form class="grid grid-cols-2 gap-8 mb-4">
              <div class="mb-4">
                <div class="flex items-center justify-center text-center text-2xl bg-green-600 rounded-2xl p-4 w-[300px] h-[50px]">
                  <card>Amonestaciones:</card>
                </div>
              </div>
            </form>
          
            <form class="grid grid-cols-2 gap-4 mb-4">
              <div class="mb-4">
                <div class="flex items-center justify-center text-center text-2xl bg-red-600 rounded-2xl p-4 w-[300px] h-[50px]">
                  <card>1</card>
                </div>
              </div>
            </form>
          </div>
          
          
            </form>
            <div class="mt-8">
                <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-3 px-8 rounded focus:outline-none focus:shadow-outline">Guardar</button>
            </div>
        </div>
    @endsection
