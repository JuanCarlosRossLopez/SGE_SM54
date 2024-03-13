@extends('test.test_template')

@section('title')
    Cédula
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Cédula de Anteproyecto</label>
            <label>
                <!-- Este svg es el icono -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </label>
        </div>

        <div class="content_conteiner">
            <div class="flex flex-row items-center gap-2">
                <label class="conteiner_word_title">Datos de Anteproyecto</label>
                <label id="infoButton" class="cursor-pointer mt-3"
                    data-tooltip="Llena correctamente el formulario de anteproyecto">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
                </label>
            </div>
            @if (session()->has('status'))
                <div class="text-md text-green-700" id="timeMessage">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('anteproyecto.store') }}">
                <!-- En este apartado podemos cambiar el color del fondo del container -->
                @csrf
                <h1 class="text-lg text-center font-medium uppercase my-4">Datos Anteproyecto</h1>
                <div class="flex flex-col mb-3 items-center">
                    <div class="grid grid-cols-2 gap-24">
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="project_title" id="project_title"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Título de Anteproyecto" value="{{ old('project_title') }}" />
                                @error('project_title')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-10 group">
                                <input type="text" name="student_name" id="student_name"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Nombre del estudiante" value="{{ old('student_name') }}" />
                                @error('student_name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-10 group">
                                <input type="text" name="student_group" id="student_group"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Grupo" value="{{ old('student_group') }}" />
                                @error('student_group')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="email" name="student_email" id="student_email"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Correo electrónico" value="{{ old('student_email') }}" />
                                @error('student_email')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-10 group">
                                <label class="bg-transparent">Fecha Inicio</label>
                                <input type="date" name="start_date" id="start_date"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Fecha de Inicio" value="{{ old('start_date') }}" />
                                @error('start_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label>Fecha Finalización</label>
                                <input type="date" name="end_date" id="end_date"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Fecha de Término" value="{{ old('end_date') }}" />
                                @error('end_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="student_phone" id="student_phone"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Teléfono (123-456-7890)" value="{{ old('student_phone') }}" />
                                @error('student_phone')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="student_id" id="student_id"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Matrícula" value="{{ old('student_id') }}" />
                                @error('student_id')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <select name="project_company" id="project_company"
                                    class="block py-3 px-4 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer">
                                    <option value="" disabled selected class=" text-transparent">Escoja su
                                        empresa
                                    </option>
                                    <option value="empresa1">Empresa 1</option>
                                    <option value="empresa2">Empresa 2</option>
                                    <option value="empresa3">Empresa 3</option>
                                </select>
                                @error('project_company')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="project_advisor" id="project_advisor"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Asesor Empresarial" value="{{ old('project_advisor') }}" />
                                @error('project_advisor')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="project_advisor_phone" id="project_advisor_phone"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Teléfono del Asesor" value="{{ old('project_advisor_phone') }}" />
                                @error('project_advisor_phone')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-2 mb-5">
                            <div class=" z-0 w-full group">
                                <textarea name="general_objective" id="general_objective"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Objetivo General">{{ old('general_objective') }}</textarea>
                                @error('general_objective')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-2 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton"
                                    data-tooltip="exponer los aspectos, elementos y relaciones del problema."><i
                                        class="fas fa-exclamation-circle text-[#01A080] "></i></label>
                                <textarea name="problem_statement" id="problem_statement"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Planteamiento del Problema">{{ old('problem_statement') }}</textarea>
                                @error('problem_statement')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-2 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton"
                                    data-tooltip="debe manifestarse de manera clara y precisa del por qué y para qué se va llevar a cabo el estudio. Causas y propósitos que motivan la investigación."><i
                                        class="fas fa-exclamation-circle text-[#01A080] "></i></label>
                                <textarea name="justification" id="justification"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Justificación">{{ old('justification') }}</textarea>
                                @error('justification')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-2 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton" data-tooltip="listar las actividades a llevar a cabo en orden."><i
                                        class="fas fa-exclamation-circle text-[#01A080] "></i></label>
                                <textarea name="activities" id="activities"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Actividades para realizar">{{ old('activities')}}</textarea>
                                @error('activities')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
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
            <button class="border p-3 rounded bg-[#18A689] text-white w-24 hover:bg-[#306157] mx-auto"
                type="submit">Guardar</button>
        </div>
        </form>

        <div
            class="modal h-screen w-full fixed left-0 top-0 hidden-flex justify-center items-center bg-black bg-opacity-50 ">
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
    <script>
        setTimeout(function() {
            var element = document.getElementById('timeMessage');
            if (element) {
                element.style.display = 'none';
            }
        }, 5000);
    </script>
@endsection
