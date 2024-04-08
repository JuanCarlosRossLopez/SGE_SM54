@extends('test.final_template')

@section('title')
    libros
@endsection

@section('contenido')
    <div class="lg:w-[98rem] sm:w-[12rem] ml-[3rem] items-center  ">

        <div
            class="bg-[#e6e6e6] mt-[0.5rem] p-[0.5rem] pl-2 rounded-md  flex flex-row items-center text-[#3a3a3a] text-[1.8rem]">
            <div class="">
                <label>Historial de libros</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-bars-progress"></i>
                    
            </div>
        </div>
        <div class="bg-[#e6e6e6] mt-4 pt-[0.1rem] pb-4 p-8 rounded-md   ">
            <div class="inside_content_conteiner justify-between">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @role('Estudiante')
                @if ($userBooks->isEmpty())
                    <div class="">
                        <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                        <button data-target="#add" class="showmodal2 ">
                            <span class="show-modal2 buttons_card_green">Agregar libro</span></button>
                    </div>
                @endif
                @endrole
            </div>
            <div class="flex flex-col ">


                @if ($userBooks)
                    @foreach ($userBooks as $book)
                        <h1 class="">Mis libros</h1>
                        <button class="showView  rounded-md border text-black w-fit" data-target="#view{{ $book->id }}">
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
            <div class="grid grid-cols-4 gap-4 py-6  ">

                @foreach ($books as $book)
                    <button class="showView2 bg-gray-300 rounded-md border text-black w-fit"
                        data-target="#view2{{ $book->id }}">
                        <div
                            class="flex flex-col w-56  transition ease-in-out delay-200 hover:-translate-y-1 hover:scale-110 bg-[#818181]">
                            <img class=" w-56 " src="{{ $book->book_front_page }}" alt="">
                            <span class=" font-semibold text-[15px] text-[#111111]">{{ $book->book_name }}</span>
                            <span class=" font-light text-[15px] text-[#111111]"> {{ $book->author }}</span>
                        </div>
                    </button>
                    @include('students.libros.viewBooks')
                @endforeach
            </div>
        </div>


        @include('students.libros.addBookStudent')



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
