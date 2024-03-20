@extends('test.test_template')

@section('title')
    Panel de control coordinación
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="top_conteiner mr-[3rem]">
            <div class="w-[70rem]">
                <label>Libros donados por los Estudiantes</label>
                <label>
                    <!-- Este svg es el icono -->
                    <i class="fa-solid fa-user-tie"></i>
                </label>
            </div>
        </div>

        <div class="bg-gray-100 rounded border mt-1 mr-[3rem] p-2">
            <div class="w-full flex flex-row justify-between mt-2">
                <div class="flex">
                    <button
                        class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                    <input type="text" class="border border-gray-300 w-[30rem] px-2 py-1 rounded-r-md"
                        placeholder="Buscar..." />
                </div>
            </div>
            <div class="table_conteiner">
                <table class="standar_table">
                    <thead class="standar_thead">
                        <tr>
                            <th class="theader">Matrícula</th>
                            <th class="theader">Nombre del libro</th>
                            <th class="theader">Descripción</th>
                            <th class="theader">Autor</th>
                            <th class="theader">Precio</th>
                            <th class="theader">Estudiante</th>
                            <th class="theader">Carrera</th>
                            <th class="theader">Grupo</th>
                            <th class="theader">Proyectos</th>
                            <th class="theader">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr class="trow">
                            <td class="trowc">22393169</td>
                            <td class="trowc">JavaScript en el futuro</td>
                            <td class="trowc">Habla sobre el campo de este lenguaje muy conocido</td>
                            <td class="trowc">Leonardo Di Caprio</td>
                            <td class="trowc">$899.00</td>
                            <td class="trowc">Marco Antonio Hau Pech</td>
                            <td class="trowc">Desarrollador software multiplataforma</td>
                            <td class="trowc">SM54</td>
                            <td class="trowc">Sistema Gestor de Estadias</td>
                            <td class="trowc">
    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end mt-2">
                <button @click="currentPage = currentPage > 1 ? currentPage - 1 : 1"
                    class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-l-md focus:outline-none focus:ring focus:border-[#01A080]">
                    Anterior
                </button>
                <input type="number" x-model="currentPage" class="border border-gray-300 w-20 px-2 py-1 text-center" />
                <button @click="currentPage = currentPage < totalPages ? currentPage + 1 : totalPages"
                    class="border border-gray-500 bg-gray-300 px-4 py-1 rounded-r-md focus:outline-none focus:ring focus:border-[#01A080]">
                    Siguiente
                </button>
            </div>

            <div class="text-gray-700 ml-auto">Total de registros: <span id="rowCount">2</span></div>
        </div>
<br>
        <button type="button"
                        class="bg-[#01A080] verLibro items-center text-[#F6F6F6] cursor-pointer text-center rounded-[5px] border-none hover:bg-[#DFDFDF] p-[1px] px-[4px]"
                        onclick="window.location.href='/registro_libros'">
                        Agregar libro de Estudiante
                    </button>
    @endsection
