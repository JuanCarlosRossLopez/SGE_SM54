@extends('test.template')
@section('title')
    visualizar
@endsection
@section('contenido')
<div class="back_conteiner">
    <div class="top_conteiner">
        <label>Aqui el titulo de tu vista, te recomiendo cambiar el icono</label>
        <label>
            <!-- Este svg es el icono -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
            </svg>
        </label>
    </div>

    <div class="content_conteiner">
        <div class="flex flex-row items-center gap-2">
            <label class="conteiner_word_title">Si tiene un subtema tu vista ponlo aqui</label>
            <label id="infoButton" class="cursor-pointer mt-3"
                data-tooltip="Recomiendo ponerle una descripción a la vista">
                <i class="fas fa-exclamation-circle text-[#01A080] text-2xl "></i>
            </label>
        </div>

        <label>De aqui en adelante puedes trabajar 🚬</label>
        <!-- Aqui va todo lo que esta en tu vista -->
    </div>
</div>

<!-- De aqui para abajo es tu vista -->


    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Generación de informes</label>
            <label>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>
        <div class="content_conteiner">
            <!-- Te recomiendo cabiar el color de el background de esas cards -->
            <div class="flex flex-raw ml-[100px] py-12">
                <!--Separacion-->
                <div class="max-w-sm h-fit p-6 rounded-[20px] bg-[#F6F6F6] flex flex-col">
                    <div class="w-full flex flex-col items-center gap-4">
                        <h3 class="text-[#01A080] font-bold text-2xl mt-4 text-center">Cédula de Anteproyecto</h3>
                        <div class="">
                            <button type="button"
                                class="bg-[#01A080] items-center text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none mt-[10px] hover:bg-[#DFDFDF] p-[8px]">
                                <a href="{{ route('envio') }}">Generar</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Separacion-->
                <div class="max-w-sm h-fit p-6 rounded-[20px] bg-[#F6F6F6] mx-[30px] flex flex-col">
                    <div class="w-full flex flex-col items-center gap-4">
                        <h3 class="text-[#01A080] font-bold text-2xl text-center">Carta de Autorización Digitalización</h3>
                        <div class="">
                            <button type="button"
                                class="bg-[#01A080] items-center text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none hover:bg-[#DFDFDF] p-[8px]">
                                <a href="{{ route('envio') }}">Generar</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Separacion-->
                <div class="max-w-sm h-fit p-6 rounded-[20px] bg-[#F6F6F6] flex flex-col">
                    <div class="w-full flex flex-col items-center gap-4">
                        <h3 class="text-[#01A080] font-bold text-2xl text-center">Carta de Aprobación Memoria</h3>
                        <div class="">
                            <button type="button"
                                class="bg-[#01A080] items-center text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none hover:bg-[#DFDFDF] p-[8px]">
                                <a href="{{ route('envio') }}">Generar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-raw ml-[100px]">
                <!--Separacion-->
                <div class="max-w-sm h-fit p-6 rounded-[20px] bg-[#F6F6F6] flex flex-col">
                    <div class="w-full flex flex-col items-center gap-4">
                        <h3 class="  text-[#01A080] font-bold text-2xl text-center">Subir Excel</h3>
                        <div class="">
                            <button type="button"
                                class=" show-modal group flex flex-row items-center gap-2 show-modal2 bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF] ">
                                Subir

                            </button>
                        </div>
                    </div>
                </div>
                <!--Separacion-->
                <div class="max-w-sm h-fit p-6 rounded-[20px] bg-[#F6F6F6] mx-[30px] flex flex-col">
                    <div class="w-full flex flex-col items-center gap-4">
                        <h3 class="text-[#01A080] font-bold text-2xl text-center">Carta Amonestación</h3>
                        <div class="">
                            <button type="button"
                                class="group flex flex-row items-center gap-2 show-modal2 bg-[#01A080] text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF] ">
                                <a href="{{ route('envio') }}">Generar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-[400px] rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-modal ">
                    <p class="text-2xl"><i class="fa-solid bg-white rounded-full fa-circle-xmark items-end" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body mb-0 overflow-y-auto h-44">
                    <h4 class="text-black text-center mt-5 text-2xl font-bold">Archivo descargado!</h4>
                </div>
            </div>
        </div>
    </div>
    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
