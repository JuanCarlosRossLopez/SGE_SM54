@extends('test.final_template')

@section('title')
    Alumnos asesorados
@endsection
<style>



</style>

@section('contenido')
    <div class="back_conteiner">
        <div class="conteiner_cards justify-center flex flex-row">
            <div class="conteiner_cards1 flex flex-col w-3/4">

                <!-- Mapeo de anteproyectos -->
                <div class="content_conteiner w-full h-full p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start">Tabla de mis alumnos
                        como asesor</label>
                    <!-- Panel 1 -->
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">Alumno</th>
                                    <th class="theader">Matrícula</th>
                                    <th class="theader">Correo electrónico</th>
                                    <th class="theader">Anteproyecto</th>
                                    <th class="theader">División</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">

                                @if ($Advising->isEmpty())
                                    <label class="w-fit font-sans font-semibold text-red-600 bg-red-100 p-2 flex justify-center items-center">Usted no tiene alumnos asesorados</lab>
                                @else
                                    @foreach ($Advising as $advising)
                                        <tr class="trow">
                                            <td class="trowc">
                                                {{ $advising->teacher ? $advising->student->student_name : 'Wtf porque hay error?' }}
                                            </td>
                                            <td class="trowc">
                                                {{ $advising->student ? $advising->student->id_student : 'No se encontro el alumno' }}
                                            </td>
                                            <td class="trowc">
                                                {{$advising->student->user->email}}
                                            </td>
                                            <td class="trowc">
                                                @if ($advising->student && $advising->student->projectManagement->isNotEmpty())
                                                    @foreach ($advising->student->projectManagement as $project)
                                                        {{ $project->project_title }}
                                                    @endforeach
                                                @else
                                                    Sin anteproyecto
                                                @endif
                                            </td>
                                            <td >
                                                {{$advising->student->division->division_name}}
                                            </td>
                                            
                                            
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>
                    </div>
                    <!-- Panel 3 -->
                </div>
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

                <div class="content_conteiner h-fit p-4 card">
                    <div class="flex flex-col gap-2 justify-center w-full items-center">
                        <h1>Recordatorios</h1>
                        <p class="font-normal font-poppins text-center text-lg">Sin nada que hacer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    

    <script>
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
