@extends('test.test_template')

@section('title')
    Panel de control coordinación
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Registrar libros donados por los Estudiantes</label>
            <label>
                <!-- Este svg es el icono -->
                <i class="fa-solid fa-user-tie"></i>
            </label>
        </div>

   

    <div>
        <div class="bg-gray-100 rounded border mt-1 p-2">
        <form>
            <!-- En este apartado podemos cambiar el color del fondo del container -->
            <h1 class="text-lg text-center font-medium uppercase my-4">Información de los libros</h1>
            <div class="flex flex-col mb-3 items-center">
                <div class="grid grid-cols-2 gap-12">
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" name="student_name" id="student_name"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Matrícula" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-10 group">
                            <input type="text" name="student_group" id="student_group"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Nombre del libro" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="student_email" id="student_email"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Descripción del libro" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="student_phone"
                                id="student_phone"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Autor" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="student_matricula" id="student_matricula"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Precio" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="project_title" id="project_title"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Estudiante" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                   
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="project_advisor" id="project_advisor"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Carrera" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="project_advisor_phone"
                                id="project_advisor_phone"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Grupo" required />
                            <hr class="border-t-2 border-[#18A689]" />
                        </div>
                    </div>
                    <div class="col-span-2 mb-5">
                        <div class=" z-0 w-full group">
                            <textarea name="general_objective" id="general_objective"
                                class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                placeholder="Proyectos" required></textarea>
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
    @endsection
