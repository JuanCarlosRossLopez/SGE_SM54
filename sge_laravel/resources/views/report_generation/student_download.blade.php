@extends('test.final_template')
@section('title')
    Descargas
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4 mt-4">


                <!-- Contenedor para cards de acciones -->
                <div class="conteiner_card my-4">
                    <!-- Card 1 -->
                    <div
                        class="rounded-xl p-2 mb-4 text-center shadow-xl flex flex-col @if (!in_array(1, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                        <div
                            class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                            <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                        </div>
                        <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Cédula de
                            Anteproyecto</h1>
                        <a href="/anteproyectosss" target="_blank" class="buttons_card_green p-0"
                            class="flex items-center justify-center show-modal @if (in_array(1, $access->toArray())) text-[#01A080] bg-[#01A080] @else bg-gray-400 @endif text-[#ffffff] font-bold cursor-pointer text-center rounded-[5px] border-none  hover:bg-[#DFDFDF] ">
                            <span class="text-[#01A080] h-full w-full hover:text-[#ffffff] hover:font-semibold">Descargar</span>
                        </a>
                    </div>

                    <div
                        class="rounded-xl p-2 mb-4 text-center shadow-xl flex flex-col @if (!in_array(2, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                        <div
                            class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                            <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                        </div>
                        <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Carta de
                            Autorización Digitalización</h1>
                            <a href="/autodigit" target="_blank" class="buttons_card_green p-0"
                                class="flex items-center justify-center gap-2 show-modal @if (in_array(2, $access->toArray())) bg-[#01A080] @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                                <span class="text-[#01A080] h-full w-full hover:text-[#ffffff] hover:font-semibold">Descargar</span>
                            </a>
                    </div>

                    <div
                        class="rounded-xl mb-4 p-2 text-center shadow-xl flex flex-col @if (!in_array(3, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                        <div
                            class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                            <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                        </div>
                        <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#5faf9f] font-bold text-xl">Carta de Aprobación
                            de Memoria</h1>
                            <a href="/aprobacion" target="_blank" class="buttons_card_green p-0"
                                class="flex items-center justify-center gap-2 show-modal @if (in_array(3, $access->toArray())) bg-gray-400 @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                                <span class="text-[#01A080] h-full w-full hover:text-[#ffffff] hover:font-semibold">Descargar</span>
                            </a>
                    </div>

                    <div
                        class="rounded-xl mb-4 p-2 text-center shadow-xl flex flex-col @if (!in_array(4, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                        <div
                            class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                            <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                        </div>
                        <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Carta de
                            Amonestación</h1>
                            <a href="/amonestacionn" target="_blank" class="buttons_card_green p-0"
                                class="flex items-center justify-center gap-2 show-modal @if (in_array(4, $access->toArray())) bg-[#01A080] @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                                <span class="text-[#01A080] h-full w-full hover:text-[#ffffff] hover:font-semibold">Descargar</span>
                            </a>
                    </div>

                    <!-- FINAL CARD ejemplo -->
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1"
        class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded-2xl shadow-lg max-w-[300px]">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-modal">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark items-end bg-white rounded-full"
                            style="color: #c97979;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2 rounded-b-2xl">
                <div class="modal-body mb-0 overflow-y-auto h-[190px]">
                    <h4 class="text-black text-center mt-3 text-2xl font-bold">El archivo ha sido descargado</h4>
                    <div class=" flex justify-center">
                        <img src="{!! asset('img/check.png') !!}" class="w-[50px] h-[50px] items-center mt-[20px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tableBody = document.querySelector('tbody');
    </script>

    <script>
        const modal = document.querySelector('.modal');
        const showModal1 = document.querySelector('.show-modal1');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal1.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })


        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
            });
        });
    </script>
    <script>
        const showModal2 = document.querySelector('.show-modal2');

        showModal2.addEventListener('click', function() {
            modal.classList.remove('hidden')
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
