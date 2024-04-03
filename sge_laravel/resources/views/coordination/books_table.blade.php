@extends('test.final_template')

@section('title')
    Panel de control coordinación
@endsection

@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de mis alumnos
                        como asesor</label>
                    <!-- Panel 1 -->
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">Nombre del libro</th>
                                    <th class="theader">Descripción</th>
                                    <th class="theader">Autor</th>
                                    <th class="theader">Precio</th>
                                    <th class="theader">Estudiante</th>
                                    <th class="theader">Carrera</th>
                                    <th class="theader">Grupo</th>
                                    <th class="theader">Proyectos</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr class="trow">
                                    <td class="trowc">JavaScript en el futuro</td>
                                    <td class="trowc">Habla sobre el campo de este lenguaje muy conocido</td>
                                    <td class="trowc">Leonardo Di Caprio</td>
                                    <td class="trowc">$899.00</td>
                                    <td class="trowc">Marco Antonio Hau Pech</td>
                                    <td class="trowc">Desarrollador software multiplataforma</td>
                                    <td class="trowc">SM54</td>
                                    <td class="trowc">Sistema Gestor de Estadias</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a href="/libro" class="buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    @endsection
