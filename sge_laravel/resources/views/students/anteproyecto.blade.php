@extends('test.test_template')

@section('title')
    Cédula Anteproyecto
@endsection

@section('contenido')
    <div class=" w-[1220px] mx-[70px]">
        <div class="top_conteiner">
            <label>Cédula de Anteproyecto De Estadías</label>
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
                <div class="transform-transition hover:scale-110 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                    </svg>
                </div>
            </div>
            @if (session()->has('status'))



<div class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
    <div class="modal-content bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-end">
            <button class="modal-close">
                <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div id="timeMessage" class="text-2xl font-sans text-green-700">{{ session('status') }}</div>
    </div>
</div>



            @endif
            <form method="POST" action="{{ route('anteproyecto.store') }}">
                <!-- En este apartado podemos cambiar el color del fondo del container -->
                @csrf
                <h1 class="text-lg text-center font-medium uppercase mt-4">Datos Estudiante</h1>
                <div class="w-full h-1 border border-[#18A689] bg-[#18A689] mb-5 mt-2"></div>
                <div class="flex flex-col mb-3 items-center">
                    <div class="grid grid-cols-3 gap-24">
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="educational_program">Programa Educativo</label>
                                <select type="text" name="educational_program" id="educational_program"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Programa Educativo" value="{{ old('educational_program') }}">
                                    <option value="" disabled selected class=" text-transparent">Programa Educativo
                                    </option>
                                    <option value="Ingeniería">Ingeniería</option>
                                    <option value="Licenciatura">Licenciatura</option>
                                    <option value="Técnico Superior Universitario">Técnico Superior Universitario</option>
                                    <option value="Posgrado">Posgrado</option>
                                </select>
                                @error('educational_program')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="project_title">Título de Proyecto</label>
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
                                <label for="student_name">Nombre del Estudiante</label>
                                <input type="text" name="student_name" id="student_name" class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer" placeholder="Nombre del estudiante" value="{{ Auth::user()->name }}" readonly />

                                @error('student_name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-10 group">
                                <label for="student_group">Grupo del Estudiante</label>
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
                                <label for="student_email">Correo del Estudiante</label>
                                <input type="text" name="student_id" id="" value="{{ Auth::user()->id }}" hidden>

                                <input type="text" name="likes" id="likes" value="0" hidden>
                                <input type="email" name="student_email" id="student_email"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Correo electrónico" value="{{ (Auth::user())->email }}" />
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
                                <label for="student_phone">Número del Estudiante</label>
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
                                <label for="student_id">Matrícula</label>
                                <input type="text" name="student_id" id="student_id"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Matrícula" value="22393130" />
                                @error('student_id')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                    </div>
                    <h1 class="text-lg text-center font-medium uppercase mt-4">Datos Asesor</h1>
                    <div class="w-full h-1 border border-[#18A689] bg-[#18A689] mb-5 mt-2"></div>
                    <div class="grid grid-cols-3 gap-24">
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="project_company">Empresa</label>
                                <select name="project_company" id="project_company"
                                    class="cursor-pointer block py-3 px-4 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer">
                                    <option value="" disabled selected class=" text-transparent">Empresa
                                    </option>
                                    <option value="Upnify">Upnify</option>
                                    <option value="DotNet">DotNet</option>
                                    <option value="Dapper Technologies">Dapper Technologies</option>
                                </select>
                                @error('project_company')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="direction">Dirección de la Empresa</label>
                                <input type="text" name="direction" id="direction"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Dirección de la Empresa" value="{{ old('direction') }}" />
                                @error('direction')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="project_advisor">Asesor en la Empresa</label>
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
                                <label for="position">Cargo del Asesor</label>
                                <input type="text" name="position" id="position"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Cargo" value="{{ old('position') }}" />
                                @error('position')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="project_advisor_phone">Celular Asesor</label>
                                <input type="text" name="project_advisor_phone" id="project_advisor_phone"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Teléfono del Asesor" value="{{ old('project_advisor_phone') }}" />
                                @error('project_advisor_phone')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-1"></div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="email_asesor">Correo Asesor</label>
                                <input type="email" name="email_asesor" id="email_asesor"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Correo del Asesor" value="{{ old('email_asesor') }}" />
                                @error('email_asesor')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                    </div>
                    <h1 class="text-lg text-center font-medium uppercase mt-4">Datos Proyecto</h1>
                    <div class="w-full h-1 border border-[#18A689] bg-[#18A689] mb-5 mt-2"></div>
                    <div class="grid grid-cols-3 gap-24">
                        <div class="col-span-8 mb-5">
                            <div class=" z-0 w-full group">
                                <label for="general_objective">Objetivo General</label>
                                <textarea name="general_objective" id="general_objective"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Objetivo General">{{ old('general_objective') }}</textarea>
                                @error('general_objective')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                        <div class="col-span-8 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton"
                                    data-tooltip="exponer los aspectos, elementos y relaciones del problema."><span
                                        class="mr-2">Planteamiento del Problema</span><i
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
                        <div class="col-span-8 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton"
                                    data-tooltip="debe manifestarse de manera clara y precisa del por qué y para qué se va llevar a cabo el estudio. Causas y propósitos que motivan la investigación."><span
                                        class="mr-2">Justificación</span><i
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
                        <div class="col-span-8 mb-5">
                            <div class="relative z-0 w-full group">
                                <label id="infoButton"
                                    data-tooltip="listar las actividades a llevar a cabo en orden."><span
                                        class="mr-2">Actividades para realizar</span><i
                                        class="fas fa-exclamation-circle text-[#01A080] "></i></label>
                                <textarea name="activities" id="activities"
                                    class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                    placeholder="Actividades para realizar">{{ old('activities') }}</textarea>
                                @error('activities')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <hr class="border-t-2 border-[#18A689]" />
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    {{-- <div class="flex flex-row -mx-2 w-full">
            <div class="flex flex-col w-1/2 px-2 gap-4">
                <!-- Los otros elementos omitidos por brevedad -->
            </div>
        </div> --}}
    <div class="flex flex-col mt-3">
        <button class="border p-3 rounded bg-[#18A689] text-white w-24 hover:bg-[#306157] mx-auto"
            type="submit">Guardar</button>
    </div>
    </form>

    {{-- <div
            class="modal h-screen w-full fixed left-0 top-0 hidden-flex justify-center items-center bg-black bg-opacity-50 ">
            <!-- Contenido de la modal omitido por brevedad -->
        </div> --}}

    <!-- Contenido de la modal-edit omitido por brevedad -->

    </form>
    </div>

    </div>
    </div>
@endsection

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


//Script para Modal del Señor R//

    setTimeout(function() {
        var element = document.getElementById('timeMessage');
        if (element) {
            var modalMessage = document.getElementById('modalMessage');
            modalMessage.innerHTML = element.innerHTML;
            var modal = document.querySelector('.modal');
            var closeModalButtons = document.querySelectorAll('.modal-close');

            modal.classList.remove('hidden');

            closeModalButtons.forEach(button => {
                button.addEventListener('click', function() {
                    modal.classList.add('hidden');
                });
            });
        }
    }, 5000);
</script>