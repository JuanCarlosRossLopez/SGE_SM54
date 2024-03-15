@extends('test.template')

@section('title')
    Libros
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Historial de libros</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner  h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de libros</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>
            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button  id="showModalButton2"  class="show-modal2 standar_button"><span class="show-modal2 ">Agregar</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">

                        <tr>
                            <th class="theader">id</th>
                            <th class="theader">Nombre(s)</th>
                            <th class="theader">Pagina</th>
                            <th class="theader">Descripción</th>
                            <th class="theader">Autor</th>
                            <th class="theader">Precio</th>
                            <th class="theader">Estudiante</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @foreach ($books as $books)
                            <tr class="trow">
                                <td class="trowc">1</td>
                                <td class="trowc">{{ $books->book_name }}</td>
                                <td class="trowc">{{ $books->book_front_page }}</td>
                                <td class="trowc">{{ $books->book_description }}</td>
                                <td class="trowc">{{ $books->author }}</td>
                                <td class="trowc">{{ $books->price }}</td>
                                <td class="trowc">{{ $books->students_id }}</td>
                                <td class="trowc">
                                    <div>
                                        <button class="show-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round"stroke-linejoin="round"
                                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                            </svg>
                                        </button>
                                    </div>

                                </td>

                            </tr>
                        @endforEach
                        <tr class="trow">
                            <div>
                                <button class="show-modalb">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24"stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round"stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>
                                </button>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        1
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        2
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 focus:outline-none focus:ring focus:border-[#01A080]">
                        3
                    </button>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">

                    </button>
                </div>
                <div>
                    <span>Cantidad de registros :</span>
                    <span id="rowCount"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cedula AnteProyecto</h3>
                <button id="closeModalButton" class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <h1 class="titles">Titulo de Proyecto</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                        texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Titulo:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>


                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Realizarcomentarios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal2 h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-max rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center text-center">
                <h3 class="font-semibold text-lg ml-60 text-white ">Agregar libro</h3>
                <button class="close-modal2 bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            
            <div class="bg-white p-10">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body max-h-full h-auto">
                    <form action="{{route('libros.store')}}" method="POST" class="w-full max-w-lg">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Nombre
                                </label>
                                <input
                                    class="appearance-none block w-full h-2 bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="book_name" placeholder="Jane">
                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @error('book_name')
                <span style="color: red">{{ $message }}</span>
            @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Pagina
                                </label>
                                <input
                                    class="appearance-none block w-full h-2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" name="book_front_page" type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Descripción
                                </label>
                                <input
                                    class="appearance-none block w-full h-16  bg-gray-200 text-gray-700 border border-gray-200 rounded  px-4  focus:outline-none focus:bg-white focus:border-gray-500"
                                     name="book_description" type="text" >
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-city">
                                    Autor
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-city" name="author" type="text" placeholder="Carlos">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-city">
                                    Precio
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-city"  name="price" type="text" placeholder="$$$$">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-state">
                                    Estudiantes
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state">
                                        <option>New Mexico</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </form>
                    <button type="submit" class="bg-[#05af9b] pl-[0.5rem] pr-[0.5rem]  border-[#05af9b] item-center rounded-lg w-full  text-white px-2  py-1 hover:bg-green-950">Añadir libro</button>
                </div>
            </div>
        </div>
    </div>

    <script>
       <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;

        // Selección de los modales por su id
        const modal = document.getElementById('modal1'); // Utilizamos el id "modal1"
        const modalb = document.getElementById('modal2'); // Utilizamos el id "modal2"

        // Funcionamiento de modal
        const showModal = document.getElementById('showModalButton');
        const closeModal = document.getElementById('closeModalButton');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });

        const showModalb = document.getElementById('showModalButton2');
        const closeModalb = document.getElementById('closeModalButton2');

        showModalb.addEventListener('click', function() {
            modalb.classList.remove('hidden');
        });

        closeModalb.addEventListener('click', function() {
            modalb.classList.add('hidden');
        });
    });
</script>

    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection
