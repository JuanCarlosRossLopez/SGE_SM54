@extends('templates.template_students')

@section('titulo')
    SGE
@endsection

@section('contenido')
    <div class="w-screen">
        <h1 class="text-4xl font-normal uppercase mb-4 ml-30">Gestión de Anteproyecto</h1>
        <form class="shadow-md w-11/12 bg-[#f6f6f6] p-3 rounded mx-20"> <!-- En este apartado podemos cambiar el color del fondo del container -->
            <h1 class="text-lg text-center font-medium uppercase my-4">Datos Anteproyecto</h1>
            <div class="flex flex-col mb-3 items-center">
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" name="student_name" id="student_name"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Nombre del estudiante" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" name="student_group" id="student_group"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Grupo" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="student_email" id="student_email"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Correo electrónico" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="student_phone"
                                id="student_phone"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Teléfono (123-456-7890)" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="student_matricula" id="student_matricula"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Matrícula" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="project_title" id="project_title"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Título de Anteproyecto" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="project_company" id="project_company"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Empresa" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="project_advisor" id="project_advisor"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Asesor Empresarial" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="project_advisor_phone"
                                id="project_advisor_phone"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Teléfono del Asesor" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-2 mb-5">
                        <div class=" z-0 w-full group">
                            <textarea name="general_objective" id="general_objective"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Objetivo General" required></textarea>
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-2 mb-5">
                        <div class="relative z-0 w-full group">
                            <textarea name="specific_objectives" id="specific_objectives"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Objetivos Específicos" required></textarea>
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-2 mb-5">
                        <div class="relative z-0 w-full group">
                            <textarea name="project_scope" id="project_scope"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Alcance de Proyecto" required></textarea>
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                </div>
                <i
                    class="fa-regular fa-comment fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal"></i>
                <i
                    class="fa-regular fa-pen-to-square fa-lg ml-2 text-[#18A689] transition-transform hover:scale-110 duration-75 cursor-pointer show-modal-edit"></i>
            </div>
    </div>
    <div class="flex flex-row -mx-2 w-full">
        <div class="flex flex-col w-1/2 px-2 gap-4">
            <!-- Los otros elementos omitidos por brevedad -->
        </div>
    </div>
    </div>
    </div>
    <div class="flex flex-col mt-3">
        <button class="border p-3 rounded bg-[#18A689] text-white w-24 hover:bg-[#306157] mx-auto">Guardar</button>
    </div>
    </form>

    <div class="modal h-screen w-full fixed left-0 top-0 hidden-flex justify-center items-center bg-black bg-opacity-50 ">
        <!-- Contenido de la modal omitido por brevedad -->
    </div>

        <!-- Contenido de la modal-edit omitido por brevedad -->
    </div>
    
    </form>

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
