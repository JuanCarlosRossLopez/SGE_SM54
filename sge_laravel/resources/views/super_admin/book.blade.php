@extends('test.template')

@section('title')
    Libros
@endsection

@section('contenido')
    <div class="lg:w-[98rem] sm:w-[12rem] ml-[3rem] items-center flex-col">
        <div class="bg-[#e6e6e6] mt-[0.5rem] p-[0.5rem] pl-2 rounded-md  flex flex-row items-center text-[#3a3a3a] text-[1.8rem]">
            <div class="">
                <label>Historial de libros</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                </label>
            </div>

        </div>
        <div class="bg-[#e6e6e6] mt-4 pt-[0.1rem] pb-4 p-8 rounded-md grid grid-flow-row  ">
            <div class="flex flex-row items-center  justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de libros por revisar</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede realizar amonestaciones, explicando el por qué de la misma.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>
            <div class="inside_content_conteiner justify-between">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button data-target="#hola" class="showmodal2 standar_button "><span
                            class="show-modal2  ">Agregar</span></button>
                </div>
            </div>

            <div class=" overflow-y-auto">
                <table class="standar_table ">
                    <thead class="bg-[#01a080] text-center text-white">

                        <tr>
                            <th class="theader md:table-cell">id</th>
                            <th class="theader  md:table-cell">Nombre(s)</th>
                            <th class="theader md:table-cell">Pagina</th>
                            <th class="theader md:table-cell">Descripción</th>
                            <th class="theader md:table-cell">Autor</th>
                            <th class="theader md:table-cell">Precio</th>
                            <th class="theader md:table-cell">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($books as $book)
                            <tr class="trow">
                                <td class="trowc md:table-cell">@php echo ++$i @endphp</td>
                                <td class="trowc md:table-cell">{{ $book->book_name }}</td>
                                <td class="trowc md:table-cell">
                                    imagen
                                </td>
                                <td class="trowc md:table-cell">{{ $book->book_description }}</td>
                                <td class="trowc md:table-cell">{{ $book->author }}</td>
                                <td class="trowc md:table-cell">{{ $book->price }}</td>
                                <td class="trowc">
                                    <button class="showView" data-target="#view{{ $book->id }}">
                                        <img src="{{ asset('icons/show.svg') }}" alt="Delete buttto" class="w-7 h-7  m-auto   ">
                                    </button>
                                    <button class="showEdit" data-target="#edit{{ $book->id }}">
                                        <img src="{{ asset('icons/edit.svg') }}" alt="Delete buttto" class="w-7 h-7    ">
                                    </button>
                                    <button class="deleteBook" data-target="#delete{{ $book->id }}">
                                        <img src="{{ asset('icons/trash.svg') }}" alt="Delete buttto" class="w-7 h-7   text-red-500  ">
                                    </button>
                                </td>
                            </tr>
                            @include('super_admin.view_book_modal')
                            @include('super_admin.edit_book_modal')
                            @include('super_admin.delete_book_modal')
                        @endforEach
                     
                    </tbody>
                </table>
            </div>

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                    <
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
>
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

            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;

            const modal_libro = document.querySelector('.modal2');
            const modal_view = document.querySelector('.modalView')
            const modal_edit = document.querySelector('.modalEdit')
            const modal_delete = document.querySelector('.modalDelete')

            //Funcionamiento de modal
            const showModalView = document.querySelectorAll('.showView');
            const showModalRoles = document.querySelectorAll('.showmodal2');
            const showModalEdit = document.querySelectorAll('.showEdit');
            const showModalDelete = document.querySelectorAll('.deleteBook');

            const closeModal = document.querySelectorAll('.close-modal');
            const closeModalView = document.querySelectorAll('.modalView');
            const closeModalEdit = document.querySelectorAll('.modalEdit');
            const closeModalDelete = document.querySelectorAll('.modalDelete');

            showModalView.forEach(button => {
                button.addEventListener("click", (e) => {
                    e.preventDefault();
                    const modalId = button.dataset.target;
                    const modal = document.querySelector(modalId);
                    console.log(modal);
                });
            });

            showModalDelete.forEach(button => {
                button.addEventListener("click", (e) => {
                    e.preventDefault();
                    const modalId = button.dataset.target;
                    const modal = document.querySelector(modalId);
                    modal.classList.remove('hidden');
                    console.log(modal);
                });
            })

            

            
            
            showModalView.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault()
                    console.log("click")
                    const modalId = button.dataset.target
                    const modal = document.querySelector(modalId)
                    modal.classList.remove('hidden')
                    console.log(modalId)

                })
            })
            showModalEdit.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault()
                    console.log("click")
                    const modalId = button.dataset.target
                    const modal = document.querySelector(modalId)
                    modal.classList.remove('hidden')
                    console.log(modalId)

                })
            })


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

            const modal = closeModal.closest('.modal2');
            const modal1 = closeModal.closest('.modalEdit');
            const modal2 = closeModal.closest('.modalView');
            const modal3 = closeModal.closest('.modalEdit');
            const modal4 = closeModal.closest('.modalDelete');
            const modal5 = closeModal.closest('.delete-modal-permissions');

            if (modal) {
                modal.classList.add('hidden');
            }
            if (modal1) {
                modal1.classList.add('hidden');
            }
            if (modal2) {
                modal2.classList.add('hidden');
            }
            if (modal3) {
                modal3.classList.add('hidden');
            }
            if (modal4) {
                modal4.classList.add('hidden');
            }
            if (modal5) {
                modal5.classList.add('hidden');
            }



        })
    })
            
        
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </div>
@endsection
