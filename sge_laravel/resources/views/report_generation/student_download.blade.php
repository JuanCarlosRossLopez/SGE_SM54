@extends('templates.template_students')
@section('titulo')
    Descargas
@endsection

@section('contenido')
    <div>
        <div class=" p-[20px]">
            <h1 class=" text-[#2f4050] text-2xl font-bold p-[10px]">GENERACIÓN DE INFORMES</h1>
            <h3 class="text-[#2f4050] text-lg font-bold p-[10px]">Descarga aquí tus documentos</h3>
            <div class=" w-[900px] rounded-[10px] bg-[#01A080] mt-[20px] p-[10px] flex justify-between text-center">
                <h3 class="text-white">Cédula de Anteproyecto</h3>
                <button type="submit"
                    class="show-modal1 cursor-pointer bg-[#F6F6F6] border-none p-[8px] rounded-[5px] hover:bg-green-400">
                    <h2 class="text-black">Descargar</h2>
                </button>
            </div>
            <div class=" w-[900px] rounded-[10px] bg-[#01A080] mt-[20px] p-[10px] flex justify-between text-center">
                <h3 class="text-white">Carta de Autorización Digitalización</h3>
                <button type="submit"
                    class="show-modal2 cursor-pointer bg-[#F6F6F6] border-none p-[8px] rounded-[5px] hover:bg-green-400">
                    <h2 class=" text-black">Descargar</h2>
                </button>
            </div>
            <div class=" w-[900px] rounded-[10px] bg-[#01A080] mt-[20px] p-[10px] flex justify-between text-center">
                <h3 class="text-white">Carta de Aprobación de Memoria</h3>
                <button type="submit"
                    class="show-modal3 cursor-pointer bg-[#F6F6F6] border-none p-[8px] rounded-[5px] hover:bg-green-400">
                    <h2 class="text-black">Descargar</h2>
                </button>
            </div>
        </div>
    </div>
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-[400px] rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-content-end">
                <button class="close-modal ">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark items-end bg-white rounded-full" style="color: #d50101;"></i></p>
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
        const tableBody = document.querySelector('tbody');
    </script>

    <script>
        const modal = document.querySelector('.modal');

        const showModal1 = document.querySelector('.show-modal1');
        const showModal2 = document.querySelector('.show-modal2');
        const showModal3 = document.querySelector('.show-modal3');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal1.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })
        showModal2.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })
        showModal3.addEventListener('click', function() {
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
