@extends('templates.template_students')

@section('titulo')
    SGE
@endsection

@section('formulario')
    <h1 class=" text-4xl font-normal uppercase mb-4">Gestión de Anteproyecto</h1>
    <div class="w-[90%] bg-[#F6F6F6] p-6 rounded-md border-[#18A689] border-1 md:ml-16">

        <form class="space-y-6">
            <div>
                <label for="titulo" class="block text-sm font-medium">Título del proyecto</label>
                <div class="flex items-center">
                    <input type="text" id="titulo" name="titulo"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
                </div>
            </div>
            <div>
                <label for="objetivo_general" class="block text-sm font-medium">Objetivo General</label>
                <div class="flex items-center">
                    <textarea id="objetivo_general" name="objetivo_general" rows="4"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
                </div>
            </div>

            <div>
                <label for="objetivos_especificos" class="block text-sm font-medium">Objetivos Específicos</label>
                <div class="flex items-center">
                    <textarea id="objetivos_especificos" name="objetivos_especificos" rows="4"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
                </div>
            </div>

            <div>
                <label for="alcance_proyecto" class="block text-sm font-medium">Alcance del proyecto</label>
                <div class="flex items-center">
                    <textarea id="alcance_proyecto" name="alcance_proyecto" rows="4"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
                </div>
            </div>

            <div>
                <label for="justificacion" class="block text-sm font-medium">Justificación</label>
                <div class="flex items-center">
                    <textarea id="justificacion" name="justificacion" rows="4"
                        class="mt-1 outline-none focus:border-[#18A689] block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    <i
                        class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                    <i
                        class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
                </div>
            </div>

            <div class="flex justify-center max-w-6xl items-center mx-auto">
                <button type="submit"
                    class="p-2 h-12 w-24 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#2F4050] hover:bg-[#18A689] outline-none">
                    Enviar
                </button>
            </div>

        </form>
    </div>
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
    <div class="modal-edit h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50 ">
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
