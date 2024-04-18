@extends('test.final_template')

@section('title')
    libros
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



            @if ($errors->any())
                <div id="error" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-full rounded relative">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('error').style.display = 'none';
                    }, 9000);
                </script>
            @endif
        </div>

        <div class="conteiner_cards justify-center  flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4 mt-4">

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Libros</label>
                    <div class="w-full ">
                        <div class="w-full ">
                            <div class="content_conteiner flex-col  w-full h-auto p-4">
                                <div class="inside_content_conteiner ">
                                    @role('Estudiante')
                                        @if ($userBooks->isEmpty())
                                            <div class="-400 w-full">
                                                <div class="inside_content_conteiner">
                                                    <div class="">
                                                        <div
                                                            class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2 cursor-pointer">
                                                            <label
                                                                class="text-start font-sans w-fit font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center ">Añadir
                                                                libro

                                                                <div class="relative dropdown-trigger gap-2">
                                                                    <button data-target='#add'
                                                                        class="dropdown-btn button_add_green show-modal2 showmodal2">
                                                                        <i class="fa-solid fa-circle-plus"></i>
                                                                    </button>

                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endrole

                                </div>

                                <div class="flex flex-col ">
                                    @if ($userBooks)
                                        @foreach ($userBooks as $book)
                                        <div class="flex">
                                            <div >
                                                <button class="showEdit absolute-child" data-target="#edit{{ $book->id }}">
                                                    <div class="button_edit_yellow">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </div>
                                                </button>
                                            </div>
                                            <div>
                                                <button class="deleteBook" data-target="#delete{{ $book->id }}">
                                                <div class="button_delete_red">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                            </button>
                                            </div>
                                            </div>

                                        <ul id="bk-list" class="bk-list clearfix">
                                            <li>
                                                <div class="bk-book book-1 bk-bookdefault">
                                                    <div class="bk-front ">
                                                        <div class="bk-cover-back"></div>
                                                        <div class="bk-cover"
                                                            style="background-image:url('{{ asset('books/' . $book->book_front_page) }}')">
                                                            <h2>
                                                                <span>{{ $book->author }}</span>
                                                                <span>{{ $book->book_name }}</span>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <div class="bk-back">
                                                        <p>{{ $book->book_description }}</p>
                                                    </div>
                                                    <div class="bk-right"></div>
                                                    <div class="bk-left">
                                                        <h2>
                                                            <span>{{ $book->title }}</span>
                                                            <span>{{ $book->author }}</span>
                                                        </h2>
                                                    </div>

                                                </div>
                                                <div class="bk-info">
                                                    <button class="bk-bookback">Voltear</button>
                                                </div>
                                            </li>
                                        </ul>
                                            
                                            @include('students.libros.editBookStudent')
                                           
                                        @endforeach
                                    @else
                                        <h1 class="">No tienes libros</h1>
                                    @endif
                            {{--<button class="showView2 "
                                            data-target="#view2{{ $book->id }}">
                                           
                                        </button>--}}
                                </div>
                                {{-- <button class="showView2 "
                                            data-target="#view2{{ $book->id }}">
                                           
                                        </button> --}}

                                <h1>Mas libros</h1>
                                <div class="grid grid-cols-4  ">
                                    @foreach ($books as $book)
                                    
                                        <ul id="bk-list" class="bk-list clearfix">
                                            <li>
                                                <div class="bk-book book-1 bk-bookdefault">
                                                    <div class="bk-front ">
                                                        <div class="bk-cover-back"></div>
                                                        <div class="bk-cover"
                                                            style="background-image:url('{{ asset('books/' . $book->book_front_page) }}')">
                                                            <h2>
                                                                <span>{{ $book->author }}</span>
                                                                <span>{{ $book->book_name }}</span>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <div class="bk-back">
                                                        <p>{{ $book->book_description }}</p>
                                                    </div>
                                                    <div class="bk-right"></div>
                                                    <div class="bk-left">
                                                        <h2>
                                                            <span>{{ $book->title }}</span>
                                                            <span>{{ $book->author }}</span>
                                                        </h2>
                                                    </div>

                                                </div>
                                                <div class="bk-info">
                                                    <button class="bk-bookback">Voltear</button>
                                                </div>
                                            </li>
                                        </ul>

                                        @include('students.libros.viewBooks')
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            


            <div class="content_conteiners h-fit flex flex-col w-fit">
                <div class=" h-fit  p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>

                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>

                <div class="content_conteiners h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                    </div>
                </div>
            </div>
        </div>
        @include('students.libros.addBookStudent')
    </div>
    <script>
        const modal_libro = document.querySelector('.modal2');
        const modal_view = document.querySelector('.modalView');
        const modal_viewBook = document.querySelector('.modalView2');
        const modal_edit = document.querySelector('.modalEdit');
        const modal_delete = document.querySelector('.modalDelete')
        const modal_delete = document.querySelector('.modalDelete')


        //Funcionamiento de modal

        const showModalRoles = document.querySelectorAll('.showmodal2');
        const showModalView = document.querySelectorAll('.showView');
        const showModalViewBook = document.querySelectorAll('.showView2');
        const showModalEdit = document.querySelectorAll('.showEdit');
        const showModalDelete = document.querySelectorAll('.deleteBook');
        const showModalDelete = document.querySelectorAll('.deleteBook');
        const closeModal = document.querySelectorAll('.close-modal');
        const closeModalView = document.querySelectorAll('.modalView');
        const closeModalDelete = document.querySelectorAll('.modalDelete');
        const closeModalDelete = document.querySelectorAll('.modalDelete');
        const closeModalViewBook = document.querySelectorAll('.modalView2');



        showModalView.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                const modalId = button.dataset.target;
                const modal = document.querySelector(modalId);
                console.log(modal);
            });
        });


        showModalRoles.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("hola")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })

        showModalEdit.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("quee")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })

        showModalView.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("adios")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })

        showModalViewBook.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("quee")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })

        showModalDelete.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("quee")
                const modalId = button.dataset.target
                const modal = document.querySelector(modalId)
                modal.classList.remove('hidden')
                console.log(modalId)

            })
        })

        showModalDelete.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault()
                console.log("quee")
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
                const modal3 = closeModal.closest('.modalView2');
                const modal4 = closeModal.closest('.modalDelete');
                const modal4 = closeModal.closest('.modalDelete');

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
                if (modal4) {
                    modal4.classList.add('hidden');
                }




            })
        })
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $(function() {

            Books.init();

        });
    </script>
    <script src={{ asset('js/books.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

@endsection
