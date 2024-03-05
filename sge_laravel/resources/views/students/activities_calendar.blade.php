@extends('templates.template_students')
@section('titulo')
    Inicio
@endsection
@section('contenido')
    <h1 class="text-4xl font-normal uppercase mb-5">Calendario de Actividades</h1>
    <div class="flex gap-16 justify-center">
        <div class="border-1 border-[#18A689] w-[715px] rounded-[7px_7px_7px_7px] p-3 bg-[#F6F6F6] h-[445px] shadow">
            <h1 class="font-semibold text-3xl text-[#18A689]">Recordatorios</h1>
            <div class="overflow-auto h-[355px] p-2">
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
        <div class="border shadow bg-[#ceeae4] p-3 justify-center flex flex-col h-[445px] w-[715px] rounded-[7px_7px_7px_7px]">
            <p class="text-[#18A689] font-semibold text-3xl text-left ml-9 mb-4">Febrero</p>
            <table>
                <thead>
                    <tr>
                        <th class="font-semibold text-center">DOM</th>
                        <th class="font-semibold text-center">LUN</th>
                        <th class="font-semibold text-center">MAR</th>
                        <th class="font-semibold text-center">MIÉ</th>
                        <th class="font-semibold text-center">JUE</th>
                        <th class="font-semibold text-center">VIE</th>
                        <th class="font-semibold text-center">SÁB</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center p-3">28</td>
                        <td class="text-center p-3">29</td>
                        <td class="text-center p-3">30</td>
                        <td class="text-center p-3">31</td>
                        <td class="text-center p-3">1</td>
                        <td class="text-center p-3">2</td>
                        <td class="text-center p-3">3</td>
                    </tr>
                    <tr>
                        <td class="text-center p-3">4</td>
                        <td class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer"><span class="border-[#2F4050] p-2 rounded-[7px_7px_7px_7px] bg-[#2F4050] text-white">5</span></td>
                        <td class="text-center p-3">6</td>
                        <td class="text-center p-3">7</td>
                        <td class="text-center p-3">8</td>
                        <td class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer"><span class="border-[#07D7A9] p-2 rounded-[7px_7px_7px_7px] bg-[#07D7A9] text-white">9</span></td>
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
                        <td class="text-center p-3 transition-transform hover:scale-110 duration-100 cursor-pointer"><span class="border-[#07D7A9] p-2 rounded-[7px_7px_7px_7px] bg-[#07D7A9] text-white">20</span></td>
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
@endsection
