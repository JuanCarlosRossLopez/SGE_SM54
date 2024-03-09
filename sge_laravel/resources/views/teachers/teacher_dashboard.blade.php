@extends('templates.test_template_teacher')

@section('title')
    Dashboard asesores
@endsection

@section('contenido')
    <div class="back_conteiner overflow-x-hidden">
        <div class="top_conteiner ">
            <label>Bienvenido(a) asesor(a) Mayra</label>
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
            <div class="flex flex-row gap-3 text-center titles">
                <button class="bg-white w-[25rem] flex flex-col items-center">
                    <a href="/gestion_anteproyecto">
                        <label>GYM BRO</label>
                        <img src="image/progreso_asesor.PNG" alt="Descripción de la imagen">
                    </a>


                </button>
                <div class="bg-white w-[25rem] flex flex-col items-center">
                    <label>FERRECUN</label>
                    <img src="image/progreso_asesor.PNG" alt="Descripción de la imagen">
                </div>
                <div class="bg-white w-[25rem] flex flex-col items-center">
                    <label>ASTROSEISA</label>
                    <img src="image/progreso_asesor.PNG" alt="Descripción de la imagen">
                </div>
                <div class="bg-white w-[25rem] flex flex-col items-center">
                    <label>TASK IN</label>
                    <img src="image/progreso_asesor.PNG" alt="Descripción de la imagen">
                </div>
            </div>
        </div>
        <div class="content_conteiner">
            <h1 class="text-4xl font-normal uppercase mb-5">Calendario de Actividades</h1>
            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6 lg:gap-8">
                <div
                    class="border-2 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#F6F6F6] shadow w-full max-w-[220px] md:max-w-[715px] lg:max-w-[645px] h-[410px]">
                    <h1 class="font-semibold text-xl text-[#18A689] md:text-3xl">Recordatorios</h1>
                    <div class="overflow-auto h-[325px] p-2">
                        <div class="flex flex-col">
                            <div
                                class="flex flex-row gap-4 border-1 border-[#2F4050] rounded-[7px_7px_7px_7px] p-3 bg-[#2F4050] text-white mt-4 mb-2 font-medium">
                                <p>05 Febrero | 8:30 AM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>09 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                            <div
                                class="flex flex-row gap-4 border-1 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#18A689] text-white my-2 font-medium">
                                <p>20 Febrero | 1:15 PM</p>
                                <p>Revisión de Memoria</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow bg-[#ceeae4] md:p-3 p-0 justify-center flex flex-col h-[410px] w-[220px] md:w-[715px] lg:w-[645px] rounded-[7px_7px_7px_7px]">
                    <p class="text-[#18A689] font-semibold text-3xl text-left ml-9 mb-4">Febrero</p>
                    <table>
                        <thead>
                            <tr>
                                <th class="font-semibold text-center text-xs md:text-sm">DOM</th>
                                <th class="font-semibold text-center text-xs md:text-sm">LUN</th>
                                <th class="font-semibold text-center text-xs md:text-sm">MAR</th>
                                <th class="font-semibold text-center text-xs md:text-sm">MIÉ</th>
                                <th class="font-semibold text-center text-xs md:text-sm">JUE</th>
                                <th class="font-semibold text-center text-xs md:text-sm">VIE</th>
                                <th class="font-semibold text-center text-xs md:text-sm">SÁB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center p-3 text-gray-500">28</td>
                                <td class="text-center p-3 text-gray-500">29</td>
                                <td class="text-center p-3 text-gray-500">30</td>
                                <td class="text-center p-3 text-gray-500">31</td>
                                <td class="text-center p-3">1</td>
                                <td class="text-center p-3">2</td>
                                <td class="text-center p-3">3</td>
                            </tr>
                            <tr>
                                <td class="text-center p-3">4</td>
                                <td
                                    class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer">
                                    <span
                                        class="border-[#2F4050] p-2 rounded-[7px_7px_7px_7px] bg-[#2F4050] text-white">5</span>
                                </td>
                                <td class="text-center p-3">6</td>
                                <td class="text-center p-3">7</td>
                                <td class="text-center p-3">8</td>
                                <td
                                    class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer">
                                    <span
                                        class="border-[#07D7A9] p-2 rounded-[7px_7px_7px_7px] bg-[#07D7A9] text-white">9</span>
                                </td>
                                <td class="text-center p-3">10</td>
                            </tr>
                            <tr>
                                <td class="text-center p-3">11</td>
                                <td class="text-center p-3">12</td>
                                <td class="text-center p-3">13</td>
                                <td class="text-center p-3">14</td>
                                <td class="text-center p-3">15</td>
                                <td class="text-center p-3">16</td>
                                <td class="text-center p-3">17</td>
                            </tr>
                            <tr>
                                <td class="text-center p-3">18</td>
                                <td class="text-center p-3">19</td>
                                <td
                                    class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer">
                                    <span
                                        class="border-[#07D7A9] p-2 rounded-[7px_7px_7px_7px] bg-[#07D7A9] text-white">20</span>
                                </td>
                                <td class="text-center p-3">21</td>
                                <td class="text-center p-3">22</td>
                                <td class="text-center p-3">23</td>
                                <td class="text-center p-3">24</td>
                            </tr>
                            <tr>
                                <td class="text-center p-3">25</td>
                                <td class="text-center p-3">26</td>
                                <td class="text-center p-3">27</td>
                                <td class="text-center p-3">28</td>
                                <td class="text-center p-3">29</td>
                            </tr>
                        </tbody>
                    </table>
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
