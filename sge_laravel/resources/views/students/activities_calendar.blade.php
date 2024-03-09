@extends('templates.template_students')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
    <div class="w-screen">
        <div class="w-full pr-4 pl-12 items-center">
            <div class="bg-gray-100 text-3xl rounded border mt-2 p-2 flex flex-row items-center gap-2">
                <div class="flex flex-row items-center gap-3">
                    <label class="font-sans">Dashboard Estudiante</label>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </div>

            </div>
            <div class="bg-gray-100 rounded border mt-1 p-2">
                <div class="flex flex-row gap-4 justify-center">
                    <div class="bg-white w-1/5 rounded h-[350px] my-3 p-3">
                        <p class="font-medium text-sm text-center sm:text-xl">ESTADO DE ANTEPROYECTO</p>
                        <p class=" text-center">Astroseiza</p>
                        <img src="image/progreso_estudiante.png" alt="" class="">
                    </div>
                    <div class="bg-white w-[68%] rounded h-[350px] my-3 p-3 flex flex-col">
                        <div class="overflow-auto p-2">
                            <h1 class="font-semibold text-xl text-[#18A689] md:text-3xl">Proyecto Astroseiza</h1>
                            <div >
                                <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                                <p class="flex text-lg my-1 font-medium">Rafael Villegas Velasco</p>
                                <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                    bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                            </div>
                            <div>
                                <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                                <p class="flex text-lg my-1 font-medium">Mayra Guadalupe Fuentes Sosa</p>
                                <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                    bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                            </div>
                            <div>
                                <p class="flex text-xl my-2 font-medium">Comentario referente al título</p>
                                <p class="flex text-lg my-1 font-medium">Irvin Arlin Chan Ac</p>
                                <p>El título está bien pensado de acuerdo al proyecto que me presentas, el título resume muy
                                    bien lo que trata su anteproyecto de la mamoria a realizar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6 lg:gap-8">
                    <div
                        class="border-2 border-[#18A689] rounded-[7px_7px_7px_7px] p-3 bg-[#F6F6F6] shadow w-full max-w-[220px] md:max-w-[715px] lg:max-w-[44%] h-[410px]">
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
                        class="border shadow bg-[#ceeae4] md:p-3 p-0 justify-center flex flex-col h-[410px] w-[220px] md:w-[715px] lg:w-[44%] rounded-[7px_7px_7px_7px]">
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
                                            class="border-[#07D7A9] p-2 rounded-[7px_7px_7px_7px] bg-[#07D7A9] text-white">
                                            20
                                        </span>
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
    @endsection
