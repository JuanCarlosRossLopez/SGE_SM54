@extends('test.final_template')
@section('title')
    Informes Asesor
@endsection
@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">


                <!-- Contenedor para cards de acciones -->
                <div class="conteiner_card my-4">
                        <!-- Card 1 -->
                        <div class="content_conteiner w-full bg-[#F6F6F6] rounded-lg shadow-md p-6">
                            <h3 class="text-[#01A080] font-bold text-2xl mb-4 text-center">Cédula de Anteproyecto</h3>
                            <form class="flex" action="{{ route('documents.index') }}" method="GET">
                                @csrf
                                <input type="hidden" name="type" value="1">
                                <button class="buttons_card_green"
                                    type="submit"><label class="text-center w-full cursor-pointer"><i class="fa-solid fa-file-export"></i> Generar</label></button>
                            </form>
                        </div>
                        <!-- Card 2 -->
                        <div class="content_conteiner w-full bg-[#F6F6F6] rounded-lg shadow-md p-6">
                            <h3 class="text-[#01A080] font-bold text-2xl mb-4 text-center">Carta de Autorización
                                Digitalización</h3>
                            <form class="flex" action="{{ route('documents.index') }}" method="GET">
                                @csrf
                                <input type="hidden" name="type" value="2">
                                <button class="buttons_card_green"
                                    type="submit"><label class="text-center w-full cursor-pointer"><i class="fa-solid fa-file-export"></i> Generar</label></button>
                            </form>
                        </div>
                        <!-- Card 3 -->
                        <div class="content_conteiner w-full bg-[#F6F6F6] rounded-lg shadow-md p-6">
                            <h3 class="text-[#01A080] font-bold text-2xl mb-4 text-center">Carta de Aprobación Memoria</h3>
                            <form class="flex" action="{{ route('documents.index') }}" method="GET">
                                @csrf
                                <input type="hidden" name="type" value="3">
                                <button class="buttons_card_green"
                                    type="submit"><label class="text-center w-full cursor-pointer"><i class="fa-solid fa-file-export"></i> Generar</label></button>
                            </form>
                        </div>
                        <!-- Card 4 -->
                        <div class="content_conteiner w-full bg-[#F6F6F6] rounded-lg shadow-md p-6">
                            <h3 class="text-[#01A080] font-bold text-2xl mb-4 text-center mt-4">Carta de Amonestación</h3>
                            <form class="flex" action="{{ route('documents.index') }}" method="GET">
                                @csrf
                                <input type="hidden" name="type" value="4">
                                <button class="buttons_card_green"
                                    type="submit"><label class="text-center w-full cursor-pointer"> <i class="fa-solid fa-gift"></i> Generar</label></button>
                            </form>
                        </div>

                    <!-- FINAL CARD ejemplo -->
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a href="/libro" class=" buttons_card_green w-full">
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
