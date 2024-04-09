@extends('test.final_template')

@section('title')
    libros
@endsection

@section('contenido')
    <div class="back_conteiner items-center  ">

        <div class="conteiner_cards1  w-full m-4 ">
            <div class="">
                <label class=" font-semibold text-[32px]">Historial de libros</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class=" fa-solid fa-bars-progress"></i>

            </div>

            <div class="content_conteiner flex-col w-full h-fit p-4">
                <div class="inside_content_conteiner ">


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('Estudiante')
                        @if ($userBooks->isEmpty())
                            
                            <div class="inside_content_conteiner">
                                <div class="">
                                    <div
                                        class="w-fit p-1 border-2 bg-[#F1F0F0] text-center flex flex-row items-center rounded gap-2">
                                        <label
                                            class="text-start font-sans w-fit font-semibold text-[#545454] text-lg flex flex-row gap-2 justify-center items-center">Añadir libro
                                             <i class="fa-solid fa-arrow-right flex"></i></label>
                                        <div class="relative dropdown-trigger gap-2">
                                            <button  data-target='#add' class="dropdown-btn button_add_green show-modal2 showmodal2">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </button>
                                            <div
                                                class="hidden absolute bg-white border border-gray-200 mt-2  py-2 rounded w-48 z-10 dropdown-content">
                                                <a
                                                    class="show-modal-add block font-sans w-full text-center cursor-pointer p-2 hover:bg-gray-200 font-normal text-[#545454] text-base">Usuario</a>
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
                            <h1 class="text-[18px] mb-6">Mis libros</h1>
                            <button class="showView  rounded-md border text-black w-fit"
                                data-target="#view{{ $book->id }}">
                                <div
                                    class="flex flex-col w-56 transition ease-in-out delay-200 hover:-translate-y-1 hover:scale-110 ">
                                    <img class=" w-56" src="{{ $book->book_front_page }}" alt="img_book">
                                    <span class=" font-semibold text-[15px] text-[#111111]">{{ $book->book_name }}</span>
                                    <span class=" font-light text-[15px] text-[#111111]"> {{ $book->author }}</span>
                                    @if ($book->status == 0)
                                        <span class="font-light text-[15px] text-[#111111]">Aceptado</span>
                                    @elseif($book->status == 1)
                                        <span class="font-light text-[15px] text-[#111111]">En Revision</span>
                                    @endif


                                </div>
                            </button>
                            @include('students.libros.viewBookStudent')
                        @endforeach
                    @else
                        <h1 class="">No tienes libros</h1>
                    @endif

                </div>
                <h1>Mas libros</h1>
                <div class="grid grid-cols-4 gap-1 py-2">

                    @foreach ($books as $book)
                        <button class="showView2  rounded-md border text-black w-fit h-fit"
                            data-target="#view2{{ $book->id }}">
                            <div
                                class="flex flex-col w-40  transition ease-in-out delay-200 hover:-translate-y-1 hover:scale-110">
                                <img class="w-56" src="{{ $book->book_front_page }}" alt="img_book">
                                <span class=" font-semibold text-[15px] text-[#111111]">{{ $book->book_name }}</span>
                                <span class=" font-light text-[15px] text-[#111111]"> {{ $book->author }}</span>
                            </div>
                        </button>
                        @include('students.libros.viewBooks')
                    @endforeach
                </div>
            </div>



            @include('students.libros.addBookStudent')

        </div>

        <script>
            const modal_libro = document.querySelector('.modal2');
            const modal_view = document.querySelector('.modalView');
            const modal_viewBook = document.querySelector('.modalView2');



            //Funcionamiento de modal

            const showModalRoles = document.querySelectorAll('.showmodal2');
            const showModalView = document.querySelectorAll('.showView');
            const showModalViewBook = document.querySelectorAll('.showView2');

            const closeModal = document.querySelectorAll('.close-modal');
            const closeModalView = document.querySelectorAll('.modalView');
            const closeModalEdit = document.querySelectorAll('.modalEdit');
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

            closeModal.forEach(closeModal => {
                closeModal.addEventListener('click', (e) => {
                    e.preventDefault();

                    const modal = closeModal.closest('.modal2');
                    const modal1 = closeModal.closest('.modalEdit');
                    const modal2 = closeModal.closest('.modalView');
                    const modal3 = closeModal.closest('.modalView2');

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
