@extends('test.test_template')

@section('title')
    Alumnos asesorados
@endsection
<style>



</style>

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <div class="w-[70rem]">
                <label>Mis alumnos asesorados</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-hands-holding-child"></i>
                </label>
            </div>

        </div>
        <div class="content_conteiner h-fit">
            <div class="flex flex-row items-center justify-start gap-2">
                <label class="conteiner_word_title items-center">Tabla de estudiantes asesorados</label>
                <label id="infoButton" class="cursor-pointer mt-[0.8rem]"
                    data-tooltip="Aquí usted puede ver sus estudiantes asesorados y asignar amosnestaciones en caso de merecerla.">
                    <i class="fas fa-exclamation-circle text-[#01A080] text-xl "></i>
                </label>
            </div>

            <div class="inside_content_conteiner">
                <div class="search_conteiner">
                    <button class="search_button">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="search_input" placeholder="Buscar..." />
                </div>
                <div class="search_button_conteiner">
                    <!-- En caso que necesites el boton dejalo, sino aplica hidden en el class -->
                    <button class="standar_button hidden"><span class="inside_button ">Si lo necesitas</span></button>
                </div>
            </div>

            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">Nombre</th>
                            <th class="theader">Asesor</th>
                            <th class="theader">Amonestaciones</th>
                            <th class="theader">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">

                    @foreach($students as $student)
                        <tr class="trow">
                            <td class="trowc">{{$student->student_id}}</td>
                            <td class="trowc">{{$student->teacher_id}}</td>
                            <td class="trowc"></td>
                            <td class="trowc">
                                <div>
                                    <button class="show-modal bg-[#ae0808] text-white font-semibold px-2 py-2 rounded">Amonestar</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
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


        <!-- Modal -->
        <div
            class="modal h-screen/2 w-full fixed flex-col left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">

            <div class="bg-[#01A080] w-full rounded shadow-lg max-w-md">
                <div class="border-b px-2 py-2 flex justify-between items-center">
                    <label class="font-semibold text-lg text-white text-center">¿Está seguro de que desea amonestar al
                        estudiante?</label>
                    <div class="max-w-md flex flex-col items-end justify-end p-2">
                        <button class="close-modal bg-white rounded-full ">
                            <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded p-2 flex flex-col items-center">
                    <h5 class="text-black text-lg mb-2 font-thin">Marco Antonio Hau Pech</h5>
                    <div class="modal-body mb-0 overflow-y-auto h-[auto]">
                        <button class="bg-[#0064d7] hover:bg-[#1f695a] p-2 py-1 rounded text-white mr-2">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Contador
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
@endsection
