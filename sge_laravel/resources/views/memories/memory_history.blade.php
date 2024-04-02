@extends('test.final_template')

@section('title')
    Historial de memorias
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
                                    <th class="theader">#</th>
                                    <th class="theader">Titulo</th>
                                    <th class="theader">PDF</th>
                                    <th class="theader">Fecha de subido</th>
                                    <th class="theader">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($memories as $memory)
                                    <tr class="trow">
                                        <td class="trowc">{{ $loop->iteration }} </td>
                                        <td class="trowc">{{ $memory->memory_name }}</td>
                                        <td class="trowc">{{ $memory->memorie_pdf }}</td>
                                        <td class="trowc">{{ $memory->created_at }}</td>
                                        <td>
                                            <a href="Archivos/{{ $memory->memorie_pdf }}" target="blank_"
                                                class="text-[#464646] py-1 px-2 rounded text-xl w-full ml-4"> <i
                                                    class="fa-solid fa-download"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-5">{{ $memories->links() }}</div>
                    </div>
                </div>
            </div>


            <div class="w-1/5 h-fit gap-0 flex flex-col">
                <div class="content_conteiner h-fit p-2 card flex justify-center">
                    <div class="flex flex-col gap-2 items-center">
                        <h1>¿Qué más hacer?</h1>
                        <a class="show-modal buttons_card_green w-full">
                            <i class="fi fi-sr-books flex"></i><button class="w-full text-start">Ver libros</button>
                        </a>
                    </div>
                </div>

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                        <label>Vaya a <a href="/crear_memoria" class="underline text-blue-600">/crear_memoria</a> para subir un archivo, ya es funcional <i class="fa-solid fa-thumbs-up"></i> </label>

                        <label>Lo estoy trabajando con coronado para cuando el estudiante haya terminado sus estadias aparezca el boton y suba su memoria, por eso es que de momento tiene que ir a la ruta (valor agregado)</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
