@extends('templates.template_students')

@section('titulo')
    SGE
@endsection

@section('contenido')
    <h1 class=" text-4xl font-normal uppercase mb-4">Gestión de Anteproyecto</h1>
    <form class="shadow-md w-11/12 bg-[#F6F6F6] p-3 rounded mx-auto">
        <h1 class="text-lg text-center font-medium uppercase my-4">Datos Anteproyecto</h1>
        <div class="flex flex-col mb-3 items-center">
            <label for="titulo" class="text-lg font-medium">Título del proyecto</label>
            <p class="italic mt-2">El título debe ser claro y consciso</p>
            <input type="text" id="titulo" name="titulo"
                class="outline-none focus:border-[#18A689] block shadow-sm w-1/2 sm:text-sm border-gray-300 rounded-md">
            {{-- <i
                class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
            <i
                class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i> --}}
        </div>
        <div class="flex flex-row -mx-2 w-full">
            <div class="flex flex-col w-1/2 px-2 gap-4">

                <div class="flex flex-col">
                    <label for="titulo" class="text-lg font-medium">Objetivo General</label>
                    <p class="italic mt-2">El objetivo debe describir lo que se busca hacer con el proyecto</p>
                    <textarea type="text" id="titulo" name="titulo"
                        class="outline-none focus:border-[#18A689] block shadow-sm sm:text-sm border-gray-300 rounded-md h-28"></textarea>
                    {{-- <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i> --}}
                </div>
                <div class="flex flex-col">
                    <label for="titulo" class="text-lg font-medium">Objetivo Específicos</label>
                    <p class="italic mt-2">Los objetivos específicos deben ser objetivos del general</p>
                    <textarea type="text" id="titulo" name="titulo"
                        class="outline-none focus:border-[#18A689] block shadow-sm sm:text-sm border-gray-300 rounded-md h-28"></textarea>
                    {{-- <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i> --}}
                </div>
            </div>
            <div class="flex flex-col w-1/2 px-2 gap-4">
                <div class="flex flex-col">
                    <label for="titulo" class="text-lg font-medium">Alcance del Proyecto</label>
                    <p class="italic mt-2">Describir el objetivo del proyecto</p>
                    <textarea type="text" id="titulo" name="titulo"
                        class="outline-none focus:border-[#18A689] block shadow-sm sm:text-sm border-gray-300 rounded-md h-28"></textarea>
                    {{-- <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i> --}}
                </div>
                <div class="flex flex-col">
                    <label for="titulo" class="text-lg font-medium">Justificación</label>
                    <p class="italic mt-2">Describir la justificación del proyecto</p>
                    <textarea type="text" id="titulo" name="titulo"
                        class="outline-none focus:border-[#18A689] block shadow-sm sm:text-sm border-gray-300 rounded-md h-28"></textarea>
                    {{-- <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i> --}}
                </div>
            </div>
        </div>
        <div class="flex flex-col mt-3">
            <button class="border p-3 rounded bg-[#18A689] text-white w-24 hover:bg-[#306157] mx-auto">Guardar</button>
        </div>
    </form>

    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
        <div class="bg-[#01A080] w-[80%] rounded shadow-lg max-w-4xl md:mx-auto">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg text-white mx-auto">Comentarios</h3>
                <button class="close-modal">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark bg-white rounded-full"
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body mb-0 overflow-y-auto  h-[50vh] overflow-auto">
                    <div class="flex items-center gap-2">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-full h-8 w-8"
                            alt="avatar_rafa">
                        <h5 class="text-black text-base mb-1 font-bold">Rafael Villegas Velasco</h5>
                    </div>
                    <text class="text-base italic ml-10">Me gusta mucho el SGE del SM54.</text>
                    <div class="flex flex-row gap-2 ml-10">
                        <input type="checkbox" class="my-auto">
                        <label class="my-auto">Completado</label>
                    </div>

                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal-edit h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
        <div class="bg-[#01A080] w-[80%] rounded shadow-lg max-w-4xl md:mx-auto">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg text-white mx-auto">Resolución de comentario</h3>
                <button class="close-modal">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark bg-white rounded-full"
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body mb-0 h-[23vh]">
                    <label for="titulo" class="block text-sm font-medium">Título del proyecto</label>
                    <input type="text" id="titulo" name="titulo"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white mt-3">Resolver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initializeModalEvents(triggerSelector, modalSelector) {
            const modal = document.querySelector(modalSelector);
            const showTriggers = document.querySelectorAll(triggerSelector);
            const closeModalButtons = modal.querySelectorAll('.close-modal');

            showTriggers.forEach(trigger => {
                trigger.addEventListener('click', function() {
                    modal.classList.remove('hidden');
                });
            });

            closeModalButtons.forEach(button => {
                button.addEventListener('click', function() {
                    modal.classList.add('hidden');
                });
            });
        }

        initializeModalEvents('.show-modal', '.modal');
        initializeModalEvents('.show-modal-edit', '.modal-edit');
    </script>
@endsection
