@extends('test.final_template')

@section('title')
    Dashboard administrador
@endsection

@section('contenido')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">


                <!-- Contenedor para cards de acciones -->
                <div class="conteiner_card">
                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-users-gear"></i></label>
                            </div>
                            <div class="">
                                <h1>Gestión de usuarios</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="/usuarios" class="buttons_card_blue">Gestionar usuarios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->

                    <!-- INICIO CARD ejemplo-->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-user-gear"></i></label>
                            </div>
                            <div>
                                <h1>Gestión de roles</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="/roles" class="buttons_card_blue">Gestionar roles y permisos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD ejemplo -->

                    <!-- INICIO CARD ejemplo-->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-person-chalkboard"></i></label>
                            </div>
                            <div>
                                <h1>Aginación de asesores</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="/asignar_alumnos" class="buttons_card_blue">Asinar asesor a estudiante</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD ejemplo -->

                    <!-- INICIO CARD ejemplo-->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-school"></i></label>
                            </div>
                            <div>
                                <h1>Academias</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="/division" class="buttons_card_blue">Gestionar divisiones</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD ejemplo -->

                    <!-- INICIO CARD DISEÑADA -->
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-file-lines"></i></label>
                            </div>
                            <div class="">
                                <h1>Anteproyectos</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="/gestion_asesor_anteproyecto" class="buttons_card_blue">Todos los anteproyectos</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FINAL CARD DISEÑADA -->

                    <!-- INICIO CARD DISEÑADA
                    <div class="item-1">
                        <div class="card">
                            <div class="flex p-2 bg-[#F1F0F0] rounded-lg h-full items-center">
                                <label class="text-[#489F8F] p-1  text-5xl"><i class="fa-solid fa-building-user"></i></label>
                            </div>
                            <div class="">
                                <h1>Empresas vinculadas</h1>
                                <div class="flex flex-col gap-1">
                                    <a href="#" class="buttons_card_blue">Gestionar empresas</a>
                                    
                                    <a href="empresas" class="buttons_card_blue">Gestionar empresas</a>
                                    <a href="#" class="buttons_card_red">Botón sin acción</a>
                                    <a href="#" class="buttons_card_green">Botón sin acción</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    FINAL CARD DISEÑADA -->
                </div>




                <!-- Mapeo de anteproyectos 
                <div class="content_conteiner w-full h-fit p-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Añadir algo si lo crees necesario:</label>
                    <div class="w-full ">
                        <div class="w-full conteiner_card">
                            <label>Nada por aqui aun</label>
                        </div>
                    </div>

                </div>-->
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a href="/libros" class=" buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                        <a href="/historial_de_memorias" class="buttons_card_green">
                            <i class="fi fi-sr-memo-circle-check flex"></i><button> Ver memorias finalizadas</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
