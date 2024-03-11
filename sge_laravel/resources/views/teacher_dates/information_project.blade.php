@extends('templates.template_teacher')

@section('title')
    Plantilla base
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner">
            <label>Consulta individual de anteproyecto</label>
            <label>
            </label>
        </div>

        <div class="flex flex-nowrap space-x-4">
            <div class="content_conteiner w-full mx-h-full">
                <div class="conteiner flex items-center">
                    <label class="conteiner_word_title">Información de anteproyecto</label>
                    <div class="relative ml-80 mt-2">
                        <select class="rounded-lg text-xs w-30 h-8 ml-35">
                            <option>Citas Proximas</option>
                            <option>Citas Proximas</option>
                            <option>Citas Proximas</option>
                        </select>
                    </div>
                </div>
                <div class="inside_content_conteiner">
                    <h1>Nada dentro de este</h1>
                </div>
            </div>

            <div class="content_conteiner w-1/2">
                <label class="conteiner_word_title">Control de Visitas</label>
                <div class="inside_content_conteiner">
                    <div class="bg-green-500 bg-opacity-40 shadow overflow-hidden sm:rounded-lg">
                        <h1 class="font-bold text-2xl p-2 text-center text-green-500">Febrero 2024</h1>
                        <ol class="grid grid-cols-7 gap-4 p-3 text-sm">
                            <li class="font-bold">Lun</li>
                            <li class="font-bold">Mar</li>
                            <li class="font-bold">Mie</li>
                            <li class="font-bold">Jue</li>
                            <li class="font-bold">Vie</li>
                            <li class="font-bold">Sab</li>
                            <li class="font-bold">Dom</li>
                            <li class="col-start-4">1</li>
                            <li>2</li> <li>3</li> <li>4</li> <li>5</li> <li>6</li> <li>7</li> <li>8</li> <li>9</li>
                            <li>10</li> <li>11</li> <li>12</li> <li>13</li> <li>14</li> <li>15</li> <li>16</li> <li>17</li>
                            <li>18</li> <li>19</li> <li>20</li> <li>21</li> <li>22</li> <li>23</li> <li>24</li> <li>25</li>
                            <li>26</li> <li>27</li> <li>28</li> <li>29</li>
                        </ol>
                    </div>
                </div>
                <div class="flex flex-col space-y-2 p-4">
                    <button
                        class="show-modal bg-gray-700 text-green-300 px-4 py-3 rounded-lg border-solid border-2 border-green-600">Asignar
                        cita de revision</button>
                    <button
                        class="show-modalb bg-green-600 bg-opacity-80 text-gray-800 px-4 py-3 rounded-lg border-solid border-2 border-gray-700">Editar
                        cita de revision</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Agendar Citas Para Revisión</h3>
                <button class="close-modal bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <h1 class="titles">Fecha de Revisión</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>

                    <h1 class="titles">Hora de Revisión</h1>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-full px-2 py-1 mb-3"></input>


                    <h1 class="titles">Motivo de Cita</h1>
                    <textarea placeholder="cometarios...." class="border-2 border-[#01A080] rounded-md w-full h-[7rem] px-2 py-1 mb-3"></textarea>


                    <div class="flex justify-center items-center w-full border-t pt-2">
                        <button class="bg-green-600 hover:bg-green-700 p-2 py-1 rounded text-white">Confirmar Cita</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modalb h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-4xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Editar Citas Para Revisión</h3>
                <button class="close-modalb bg-white rounded-full h-[1rem] flex items-center">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="modal_conteiner">
                <!-- Aqui en esta parte ajusta el valor de h segun tus necesidades, si es muy grande el contenido recomiendo dejar como h-[85vh]-->
                <div class="modal-body h-fit">
                    <h1 class="titles ">Primera Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <button class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</button>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <button class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</button>

                    <h1 class="titles mt-4">Segunda Cita</h1>
                    <input type="date" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <input type="time" class="border-2 border-[#01A080] rounded-md w-64 px-2 py-1 mr-20"></input>
                    <button class="bg-green-600 hover:bg-green-700 p-2 py-1 w-44 rounded text-white">Editar Cita</button>
                    <div class="flex justify-center items-center w-full border-t pt-2">
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script>
        //Lo hizo roto, es un contador
        const modal = document.querySelector('.modal');
        const modalb = document.querySelector('.modalb');

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

        //
        const showModalb = document.querySelector('.show-modalb');
        const closeModalb = document.querySelectorAll('.close-modalb');

        showModalb.addEventListener('click', function() {
            modalb.classList.remove('hidden')
        })

        closeModalb.forEach(close => {
            close.addEventListener('click', function() {
                modalb.classList.add('hidden')
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
