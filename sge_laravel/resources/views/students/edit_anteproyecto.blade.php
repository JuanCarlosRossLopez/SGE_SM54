@extends('test.final_template')

@section('title')
    Cédula Anteproyecto
@endsection

@section('contenido')
    <div class=" w-[1220px] mx-[70px]">
        @if (session()->has('notificacion'))
            <div id="notification"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded relative">
                {{ session('notificacion') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('notification').style.display = 'none';
                }, 8000);
            </script>
        @endif

        <div class="border-2 rounded bg-white m-4">
            <div class="flex flex-row items-center w-full justify-center my-4 gap-2">
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
                <label class="font-sans text-2xl w-fit text-[#393939] p-3 rounded-t  text-center font-semibold">Llenado de
                    información integral para cedula de anteproyecto.</label>
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
            </div>
            @if (session()->has('status'))
                <div class="modal fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                    <div class="modal-content bg-white p-6 rounded-lg shadow-md">
                        <div class="flex justify-end">
                            <button class="modal-close">
                                <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div id="timeMessage" class="text-2xl font-sans text-green-700">{{ session('status') }}</div>
                    </div>
                </div>
            @endif
            <div class="px-4">
                <form method="POST" action="{{ route('anteproyecto.update', $projects_management->id) }}">
                    // <!-- En este apartado podemos cambiar el color del fondo del container -->
                    @method('PUT')
                    @csrf
                    <div class="w-full border-1 border-[#a2a2a2]"></div>
                    <h1 class="text-lg text-center w-full bg-[#dedede] font-medium uppercase py-1 text-[#505050]">
                        Información del Estudiante</h1>
                    <div class="w-full border-1 border-[#a2a2a2] mb-4"></div>

                    <div class=" flex flex-col mb-3 items-center">
                        <div class="grid grid-cols-3 p-2 w-full gap-6">

                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="student_name" class="font-sans font-semibold text-[#545454]">Nombre del
                                        Estudiante:</label>
                                    <input type="text" name="id_student"
                                        value="{{ Auth::user()->student ? Auth::user()->student->id : 'Sin estudiante asociado' }}"
                                        class="hidden">
                                    <input type="text" name="student_name" id="student_name"
                                        class="w-full text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed"
                                        placeholder="Nombre del estudiante"
                                        value="{{ Auth::user()->student->student_name }}" readonly />
                                    @error('student_name')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="student_id" class="font-sans font-semibold text-[#545454]">Matrícula del
                                        Estudiante:</label>
                                    <input type="text" name="student_id" id="student_id"
                                        class="w-full text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed"
                                        placeholder="Matrícula" value="{{ Auth::user()->student->id_student }}" readonly />
                                    @error('student_id')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="student_email" class="font-sans font-semibold text-[#545454]">Correo del
                                        Estudiante:</label>
                                    <input type="text" name="student_id" id="" value="{{ Auth::user()->id }}"
                                        hidden>

                                    <input type="text" name="likes" id="likes" value="0" hidden>
                                    <input type="email" name="student_email" id="student_email"
                                        class="w-full text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed"
                                        placeholder="Correo electrónico" value="{{ Auth::user()->email }}" readonly />
                                    @error('student_email')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="student_group" class=" font-sans font-semibold text-[#545454]">Grupo del
                                        Estudiante:</label>
                                    <input name="student_group" id="student_group"
                                        value="{{ $projects_management->student_group }}" readonly
                                        class="w-full  text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed">
                                    </input>
                                    @error('student_group')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="student_phone" class="font-sans font-semibold text-[#545454]">Teléfono de
                                        celular del
                                        Estudiante:</label>
                                    <input type="text" name="student_phone" id="student_phone"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Teléfono (123-456-7890)"
                                        value="{{ $projects_management->student_phone }}" />
                                    @error('student_phone')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="educational_program"
                                        class=" font-sans font-semibold text-[#545454]">Programa Educativo al
                                        que pertenece:</label>
                                    <input name="educational_program" id="educational_program"
                                        value="{{ Auth::user()->student->division->division_name }}" readonly
                                        class="w-full  text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed">
                                    </input>
                                    @error('educational_program')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3">

                            </div>

                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="career" class=" font-sans font-semibold text-[#545454]">Carrera al
                                        que pertenece:</label>
                                    <input name="career" id="career" value="{{ $projects_management->career }}"
                                        readonly
                                        class="w-full  text-base text-[#4f4f4f] rounded bg-[#f4f4f4] border-1 border-[#0000002b] focus:ring-[#0000002b] focus:border-[#69696900] cursor-not-allowed">
                                    </input>
                                    @error('career')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label class="font-sans font-semibold text-[#545454]">Fecha Inicio:</label>
                                    <input type="date" name="start_date" id="start_date"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Fecha de Inicio" value="{{ $projects_management->start_date }}" />
                                    @error('start_date')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label class="font-sans font-semibold text-[#545454]">Fecha Finalización:</label>
                                    <input type="date" name="end_date" id="end_date"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Fecha de Término" value="{{ $projects_management->end_date }}" />
                                    @error('end_date')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="w-full border-1 border-[#a2a2a2] mt-4"></div>
                        <h1 class="text-lg text-center w-full bg-[#dedede] font-medium uppercase py-1 text-[#505050]">
                            Información de la empresa y asesor
                            empresarial</h1>
                        <div class="w-full border-1 border-[#a2a2a2] mb-4"></div>


                        <div class="grid grid-cols-3 p-2 w-full gap-6">
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="project_company" class="font-sans font-semibold text-[#545454]">Nombre de
                                        la empresa:</label>
                                    <select name="project_company" id="project_company"
                                        class="w-full text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white">
                                        <option value="{{ $projects_management->project_company }}"
                                            class="text-transparent">{{ $projects_management->project_company }}</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->company_name }}">{{ $company->company_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('project_company')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="direction" class="font-sans font-semibold text-[#545454]">Dirección de la
                                        empresa:</label>
                                    <input type="text" name="direction" id="direction"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Dirección de la Empresa"
                                        value="{{ $projects_management->direction }}" />
                                    @error('direction')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="project_advisor" class="font-sans font-semibold text-[#545454]">Nombre del
                                        asesor empresarial:</label>
                                    <input type="text" name="project_advisor" id="project_advisor"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Asesor Empresarial"
                                        value="{{ $projects_management->project_advisor }}" />
                                    @error('project_advisor')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="position" class="font-sans font-semibold text-[#545454]">Cargo del
                                        asesor:</label>
                                    <input type="text" name="position" id="position"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Cargo" value="{{ $projects_management->position }}" />
                                    @error('position')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="project_advisor_phone"
                                        class="font-sans font-semibold text-[#545454]">Teléfono de celular del asesor
                                        empresarial:</label>
                                    <input type="text" name="project_advisor_phone" id="project_advisor_phone"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Teléfono (123-456-7890)"
                                        value="{{ $projects_management->project_advisor_phone }}" />
                                    @error('project_advisor_phone')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="email_asesor" class="font-sans font-semibold text-[#545454]">Correo de
                                        asesor empresarial:</label>
                                    <input type="email" name="email_asesor" id="email_asesor"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Correo del Asesor"
                                        value="{{ $projects_management->email_asesor }}" />
                                    @error('email_asesor')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="work_area" class="font-sans font-semibold text-[#545454]">Área de
                                        Trabajo:</label>
                                    <select name="work_area" id="work_area"
                                        class="w-full text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white">
                                        <option value="{{ $projects_management->work_area }}" class="text-transparent">
                                            {{ $projects_management->work_area }}</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->work_area }}">{{ $company->work_area }}</option>
                                        @endforeach
                                    </select>
                                    @error('work_area')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full border-1 border-[#a2a2a2] mt-4"></div>
                        <h1 class="text-lg text-center w-full bg-[#dedede] font-medium uppercase py-2 text-[#505050]">Datos
                            Proyecto</h1>
                        <div class="w-full border-1 border-[#a2a2a2] mb-4"></div>
                        <div class=" grid grid-cols-3 p-2 w-full gap-6">
                            <div class="col-span-1">
                                <div class="w-full flex flex-col">
                                    <label for="project_title" class="font-sans font-semibold text-[#545454]">Título de
                                        Proyecto:</label>
                                    <input type="text" name="project_title" id="project_title"
                                        class="w-full  text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Ingresa título de anteproyecto"
                                        value="{{ $projects_management->project_title }}" />
                                    @error('project_title')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-8">
                                <div class="w-full flex flex-col">
                                    <label for="general_objective"
                                        class="font-sans font-semibold px-2 text-[#545454]">Objetivo General:
                                    </label>
                                    <textarea name="general_objective" id="general_objective"
                                        class="w-full h-[5rem] text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Objetivo General">{{ $projects_management->general_objective }}</textarea>
                                    @error('general_objective')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-8">
                                <div class="w-full flex flex-col">
                                    <label class="font-sans font-semibold px-2 text-[#545454]">Planteamiento del
                                        Problema:</label>
                                    <label class="italic px-2">Exponer los aspectos, elementos y relaciones del
                                        problema.</label>
                                    <textarea name="problem_statement" id="problem_statement"
                                        class="w-full h-[10rem] text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white "
                                        placeholder="Planteamiento del Problema">{{ $projects_management->problem_statement }}</textarea>
                                    @error('problem_statement')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-8">
                                <div class="w-full flex flex-col">
                                    <label class="font-sans font-semibold px-2 text-[#545454]">Justificación:</label>
                                    <label class="italic px-2">Debe manifestarse de manera clara y precisa del por qué y
                                        para
                                        qué se va llevar a cabo el estudio. Causas y propósitos que motivan la
                                        investigación.
                                        Contesta las preguntas: ¿Cuáles son los beneficios que este trabajo proporcionará?
                                        ¿Quiénes serán los beneficiados? ¿Cuál es su utilidad?</label>
                                    <textarea name="justification" id="justification"
                                        class="w-full h-[10rem] text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Justificación">{{ $projects_management->justification }}</textarea>
                                    @error('justification')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-8">
                                <div class="w-full flex flex-col">

                                    <label class="font-sans font-semibold px-2 text-[#545454]">Actividades para realizar:
                                        listar las
                                        actividades a llevar a cabo en orden.</label>
                                    <label class="italic px-2">Listar las actividades a llevar a cabo en orden.</label>
                                    <textarea name="activities" id="activities"
                                        class="w-full h-[10rem] text-base text-[#000000] border-1 border-[#0000002b] focus:ring-[#0000004e] focus:border-[#0000004e] rounded bg-white"
                                        placeholder="Actividades para realizar">{{ $projects_management->activities }}</textarea>
                                    @error('activities')
                                        <span class="text-red-500 w-full">{{ $message }}</span>
                                        <hr class="border-2 w-full h-0 border-[#00000059]" />
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col mt-4 ">
                            <button class="buttons_card_green border-2 border-[#489F8F] rounded" type="submit"><label
                                    class="cursor-pointer">Guardar datos </label><i class="fa-solid fa-floppy-disk"></i>
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>

    {{-- 
        <div class="flex flex-row -mx-2 w-full">
            <div class="flex flex-col w-1/2 px-2 gap-4">
                <!-- Los otros elementos omitidos por brevedad -->
            </div>
        </div> 
    --}}

    {{-- 
        <div class="modal h-screen w-full fixed left-0 top-0 hidden-flex justify-center items-center bg-black bg-opacity-50 ">
            <!-- Contenido de la modal omitido por brevedad -->
        </div> --}}
    <!-- Contenido de la modal-edit omitido por brevedad -->
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
