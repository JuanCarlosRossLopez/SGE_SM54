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
                    <button data-target="#hola" class="showmodal2 standar_button"><span
                            class="show-modal2 ">Agregar</span></button>
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
                        @foreach ($books as $book)
                            <tr class="trow">
                                <td class="trowc">1</td>
                                <td class="trowc">{{ $book->book_name }}</td>
                                <td class="trowc">{{ $book->book_front_page }}</td>
                                <td class="trowc">{{ $book->book_description }}</td>
                                <td class="trowc">{{ $book->author }}</td>
                                <td class="trowc">{{ $book->price }}</td>
                                <td class="trowc">{{ $book->students_id }}</td>
                                <td class="trowc">

                                        <button class="showView" data-target="#view{{ $book->id }}">
                                            Ver
                                        </button>

                                </td>

                            </tr>
                            @include('super_admin.view_book_modal')

                        @endforEach
                        <tr class="trow">
                            <div>
                                <button class="">
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

    @include('super_admin.add_book_modal')



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;

            const modal_libro = document.querySelector('.modal2');
            const modal_view = document.querySelector('.modalView')

            //Funcionamiento de modal
            const showModalView = document.querySelectorAll('.showView');
            const showModalRoles = document.querySelectorAll('.showmodal2');


            const closeModal = document.querySelectorAll('.close-modal');

            showModalView.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const modalId = button.dataset.target;
        const modal = document.querySelector(modalId);
        console.log(modal);
    });
});

            const closeModalView = document.querySelectorAll('.close-modalView');
            showModalRoles.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault()
                    console.log("click")
                    const modalId = button.dataset.target
                    const modal = document.querySelector(modalId)
                    modal.classList.remove('hidden')
                    console.log(modalId)

                })
            })

            closeModal.forEach(closeModal => {
                closeModal.addEventListener('click', (e) => {
                    e.preventDefault();
                    const modal = closeModal.closest('.modal2')
                    modal.classList.add('hidden')
                })
            })
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection
