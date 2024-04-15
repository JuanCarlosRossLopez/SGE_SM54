@extends('test.final_template')

@section('title')
    Libros
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
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
        </div>
        <div class="content_conteiner w-full h-fit p-4  ">
            <div class="flex flex-row items-center  justify-start gap-2">
                <div class="w-full ">
                    <label class="w-full font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de
                        libros:</label>
                </div>
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
                    <button data-target="#hola" class="showmodal2 standar_button   "><span
                            class="show-modal2  text-white">Agregar</span></button>
                </div>
            </div>

            <div class=" table_conteiner">
                <table class="standar_table ">
                    <thead class="standar_thead">

                        <tr>
                            <th class="theader ">#</th>
                            <th class="theader  ml">Nombre(s)</th>
                            <th class="theader ">Portada</th>
                            <th class="theader ">Titulo</th>
                            <th class="theader ">Estado</th>
                            <th class="theader">Precio</th>
                            <th class="theader ">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($books as $book)
                            <tr class="trow">
                                <td class="trowc ">@php echo ++$i @endphp</td>
                                <td class="trowc ">{{ $book->book_name }}</td>
                                <td class="trowc ">
                                    imagen
                                </td>
                                <td class="trowc ">{{ $book->author }}</td>
                                <td class="trowc ">
                                    <?php
                                    $coloresPorPalabra = [
                                        'En revision' => ['bg' => '#B52121', 'text' => '#e1fcf2'],
                                        'Aceptado' => ['bg' => '#45a291cb', 'text' => '#e1e7fc'],
                                    ];
                                    $statusText = ['Aceptado', 'En revision'];
                                    ?>
                                    @if (array_key_exists($statusText[$book->status], $coloresPorPalabra))
                                        @php
                                            $color = $coloresPorPalabra[$statusText[$book->status]];
                                        @endphp
                                        @if ($book->status == 0)
                                            <span class="text-base font-semibold px-2 rounded"
                                                style="color: {{ $color['text'] }}; background-color: {{ $color['bg'] }};">Aceptado</span>
                                        @elseif($book->status == 1)
                                            <span class="text-base font-semibold px-2 rounded"
                                                style="color: {{ $color['text'] }}; background-color: {{ $color['bg'] }};">En
                                                Revision</span>
                                        @endif
                                    @endif
                                </td>

                                <td class="trowc ">{{ $book->price }}</td>
                                <td class="trowc">
                                    <button class="showView" data-target="#view{{ $book->id }}">
                                        <div class="button_see_blue">
                                            <i class="fa-solid fa-eye"></i>
                                        </div>
                                    </button>
                                    @if($book->status==1)
                                    <button class="showEdit" data-target="#edit{{ $book->id }}">
                                        <div class="button_edit_yellow">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
                                    </button>
                                    <button class="checkBook" data-target="#check{{ $book->id }}">
                                        <div class="button_check_green">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                    </button>
                                    @endif
                                    <button class="deleteBook" data-target="#delete{{ $book->id }}">
                                        <div class="button_delete_red">
                                
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </button>
                                    
                                    
                                </td>
                            </tr>
                            @include('super_admin.view_book_modal')
                            @include('super_admin.edit_book_modal')
                            @include('super_admin.delete_book_modal')
                            @include('super_admin.check_book')
                        @endforEach

                    </tbody>
                </table>
            </div>

            <!-- Esto solo es una paginación para entregar, en laravel ya hicimos una paginacion chida asi que ignoren esto-->
            <div class="text-gray-700 w-full flex flex-row justify-between mt-1">
                <div>
                    <button
                        class="border-1 border-gray-500 bg-gray-300 px-2 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                        < </button>
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
        const modal_check = document.querySelector('.modalCheck')

        //Funcionamiento de modal
        const showModalView = document.querySelectorAll('.showView');
        const showModalRoles = document.querySelectorAll('.showmodal2');
        const showModalEdit = document.querySelectorAll('.showEdit');
        const showModalDelete = document.querySelectorAll('.deleteBook');
        const showModalCheck = document.querySelectorAll('.checkBook');

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


        showModalCheck.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                const modalId = button.dataset.target;
                const modal = document.querySelector(modalId);
                console.log(modalId);
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
                const modal6 = closeModal.closest('.modalCheck');

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
                if (modal6) {
                    modal6.classList.add('hidden');
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
