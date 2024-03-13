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

        <div class="flex flex-row">
            <div class="bg-gray-100 rounded border mt-1 p-4 mx-auto">
                <form>
                    <h1 class="text-lg text-center font-medium uppercase my-4">Información de los libros</h1>
                    <div class="flex flex-col mb-3 items-center">
                        <div class="grid grid-cols-2 gap-12">
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="book_title" id="book_title"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Nombre del libro" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="book_description" id="book_description"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Descripción del libro" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="book_author" id="book_author"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Autor" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="book_price"
                                        id="book_price"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Precio" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Additional elements or sections can be added here -->

            <div class="bg-gray-100 rounded border mt-1 p-4 mx-auto">
                <form>
                    <h1 class="text-lg text-center font-medium uppercase my-4">Información de los Estudiantes</h1>
                    <div class="flex flex-col mb-3 items-center">
                        <div class="grid grid-cols-2 gap-12">
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="student_matricula" id="student_matricula"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Estudiante" required />
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
                                    <input type="text" name="student_group" id="student_group"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Grupo" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="student_phone"
                                        id="student_phone"
                                        class="block py-3 px-0 w-full text-lg text-black bg-transparent border-0 border-b-2 border-green-600 appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder="Carrera" required />
                                    <hr class="border-t-2 border-[#18A689]" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Additional elements or sections can be added here -->

        </div>

        <div class="flex flex-col mt-3">
            <button class=" ver-Check border p-3 rounded bg-[#18A689] text-white w-24 hover:bg-[#306157] mx-auto">Guardar</button>
        </div>
    </div>
    <!--Modal-->
    <div class=" check h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-Check">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end  "
                            style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-2xl">
                <div class="modal-body mb-0 overflow-y-auto h-[190px]">
                    <h4 class="text-black text-center mt-3 text-2xl font-bold">¡Registrado con éxito!
                    </h4>
                    <div class=" flex justify-center">
                        <img src="{!! asset('img/check.png') !!}" class="w-[50px] h-[50px] items-center mt-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const check = document.querySelector('.check');
        const verCheck = document.querySelector('.ver-Check');
        const closeCheck = document.querySelectorAll('.close-Check');
        verCheck.addEventListener('click', function() {
            check.classList.remove('hidden')
        });

        closeCheck.forEach(close => {
            close.addEventListener('click', function() {
                check.classList.add('hidden')
            });
        });
    </script>
@endsection
