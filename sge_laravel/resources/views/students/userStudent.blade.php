@extends('test.test_template')

@section('titulo')
    ADMINISTRACIÓN DE CUENTA
@endsection

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
      <div class="flex flex-row items-center gap-2">
          <label class="conteiner_word_title">Si tiene un subtema tu vista ponlo aqui</label>
          <label id="infoButton" class="cursor-pointer mt-3"
              data-tooltip="Recomiendo ponerle una descripción a la vista">
              <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
          </label>
      </div>

      <label>De aqui en adelante puedes trabajar 🚬</label>
      <!-- Aqui va todo lo que esta en tu vista -->
  </div>
</div>

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
                    <input type="text" class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
