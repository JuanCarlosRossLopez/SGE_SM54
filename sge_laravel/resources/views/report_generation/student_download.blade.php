@extends('test.test_template')
@section('title')
    Descargas
@endsection

@section('contenido')
    <div class="top_conteiner">
        <label>Descarga de informes</label>
        <label>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
            </svg>
        </label>
    </div>


    <div class="bg-[#E9E9E9] min-h-screen rounded-xl">
        <div class="flex flex-row mx-[100px] py-12">
            <div class="grid gap-14 md:grid-cols-3 md:gap-14">
                <div
                    class="rounded-xl p-2 text-center shadow-xl flex flex-col @if (!in_array(1, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                        <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                    </div>
                    <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Cédula de
                        Anteproyecto</h1>
                    <button type="button">
                        <a href="/anteproyectosss" target="_blank"
                            class="flex items-center justify-center gap-2 show-modal @if (in_array(1, $access->toArray())) bg-[#01A080] @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                            <span>Descargar</span>
                        </a>
                    </button>
                </div>

                <div
                    class="rounded-xl p-2 text-center shadow-xl flex flex-col @if (!in_array(2, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                        <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                    </div>
                    <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Carta de
                        Autorización Digitalización</h1>
                    <button type="button">
                        <a href="/autodigit" target="_blank"
                            class="flex items-center justify-center gap-2 show-modal @if (in_array(2, $access->toArray())) bg-[#01A080] @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                            <span>Descargar</span>
                        </a>
                    </button>
                </div>

                <div
                    class="rounded-xl p-2 text-center shadow-xl flex flex-col @if (!in_array(3, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                        <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                    </div>
                    <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#5faf9f] font-bold text-xl">Carta de Aprobación
                        de Memoria</h1>
                    <button type="button">
                        <a href="/aprobacion" target="_blank"
                            class="flex items-center justify-center gap-2 show-modal @if (in_array(3, $access->toArray())) bg-gray-400 @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                            <span>Descargar</span>
                        </a>
                    </button>
                </div>

                <div
                    class="rounded-xl p-2 text-center shadow-xl flex flex-col @if (!in_array(4, $access->toArray())) bg-gray-500 opacity-50 pointer-events-none saturate-50 @else bg-white @endif">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                        <img src="{!! asset('img/pdf_icon.svg') !!}" class="w-[40px] items-center">
                    </div>
                    <h1 class="text-darken mb-3 lg:px-14 flex-grow text-[#01A080] font-bold text-xl">Carta de
                        Amonestación</h1>
                    <button type="button">
                        <a href="/amonestacionn" target="_blank"
                            class="flex items-center justify-center gap-2 show-modal @if (in_array(4, $access->toArray())) bg-[#01A080] @else bg-gray-400 @endif text-[#F6F6F6] font-bold cursor-pointer text-center rounded-[5px] border-none p-[8px] hover:bg-[#DFDFDF]">
                            <span>Descargar</span>
                        </a>
                    </button>
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
