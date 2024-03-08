@extends('templates.test_template_teacher')

@section('title')
    Dashboard asesores
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner ">
            <label>Bienvenido, asesora Mayra</label>
            <label>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </label>
        </div>

        <div class="content_conteiner">
            <div class="bg-gray-200 -m-2 rounded-t mb-2">
                <label class="subtitles">Resumen de avances en la corrección del anteproyecto.</label>
            </div>
            <div class="flex flex-row gap-3">
                <div class="bg-white w-[25rem]">
                    <label>a</label>
                </div>
                <div class="bg-white w-[25rem]">
                    <label>a</label>
                </div>
                <div class="bg-white w-[25rem]">
                    <label>a</label>
                </div>
                <div class="bg-white w-[25rem]">
                    <label>a</label>
                </div>
            </div>


        </div>
    </div>

    <!-- Modal -->
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Revision de Cedula AnteProyecto</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades -->
                <div class="modal-body h-[85vh]">
                    <h1 class="titles">Titulo de Proyecto</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                        texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Titulo:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                    <h1 class="titles">Objetivo General</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Objetivo General:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                    <h1 class="titles">Objetivo Especifico</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Objectivo Especifico:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                    <h1 class="titles">Alcance de Proyecto</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Alcance de Proyecto:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                    <h1 class="titles">Justificacion</h1>
                    <text class="modal_parrafs">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
                        archivos de
                        texto.</text>

                    <h1 class="subtitles">Realizar Comentario Referente al Justificacion:</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>

                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 p-2 py-1 rounded text-white">Realizarcomentarios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //Lo hizo roto, es un contador
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;
        const modal = document.querySelector('.modal');

        //Funcionamiento de modal
        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
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
