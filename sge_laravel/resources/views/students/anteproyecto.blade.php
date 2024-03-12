@extends('test.test_standars')

@section('titulo')
    SGE
@endsection

@section('contenido')
<div class="w-screen">
    <div class="w-full pr-4 pl-12 items-center">
        <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
            <div class="flex flex-row items-center gap-3">
                <label class="font-sans">Cédula de Anteproyecto</label>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
            </div>

        </div>

        <div>
            <div class="bg-gray-100 rounded border mt-1 p-2">
            <form>
                <!-- En este apartado podemos cambiar el color del fondo del container -->
                <h1 class="text-lg text-center font-medium uppercase my-4">Datos Anteproyecto</h1>
                <div class="flex flex-col mb-3 items-center">
                    <div class="grid grid-cols-2 gap-12">
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
                                <select name="project_company" id="project_company"
                                    class="block py-3 px-4 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    required>
                                    <option value="" disabled selected class=" text-transparent">Escoja su empresa
                                    </option>
                                    <option value="empresa1">Empresa 1</option>
                                    <option value="empresa2">Empresa 2</option>
                                    <option value="empresa3">Empresa 3</option>
                                </select>
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
                </div>
        </div>
        <div class="flex flex-row -mx-2 w-full">
            <div class="flex flex-col w-1/2 px-2 gap-4">
                <!-- Los otros elementos omitidos por brevedad -->
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

    </form>
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
