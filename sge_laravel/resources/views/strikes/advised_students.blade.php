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
                <div class="content_conteiner w-full h-fit p-4 mt-4">
                    <label class="font-poppins font-semibold text-2xl text-[#333333] text-start pb-3">Tabla de mis alumnos
                        como asesor</label>
                    <!-- Panel 1 -->
                    <div class="table_conteiner">
                        <table class="standar_table">
                            <thead class="standar_thead">
                                <tr>
                                    <th class="theader">Asesor</th>
                                    <th class="theader">Alumno</th>
                                    <th class="theader">Anteproyecto</th>
                                    <th class="theader">Amonestaciones</th>
                                    <th class="theader">Realizar amonestación</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">

                                @foreach ($Advising as $advising)
                                <tr class="trow">
                                    <td class="trowc">
                                        {{ $advising->teacher ? $advising->teacher->name_teacher : 'Wtf porque hay error?' }}
                                    </td>
                                    <td class="trowc">
                                        {{ $advising->student ? $advising->student->student_name : 'No se encontró el alumno' }}
                                    </td>
                                    <td class="trowc">
                                        <!-- Código para mostrar el anteproyecto del estudiante -->
                                    </td>
                                    <td class="trowc">
                                        {{ $advising->student ? $advising->student->strike : 'No se encontró el alumno' }}
                                    </td>
                                    <td class="trowc flex items-center justify-center">
                                        <button class="show-modal button_strike justify-center"
                                                data-student-id="{{ $advising->student->id }}"  <!-- Agrega el ID del estudiante como atributo de datos -->
                                                data-student-name="{{ $advising->student->student_name }}">  <!-- Agrega el nombre del estudiante como atributo de datos -->
                                            <i class="fa-solid fa-bowling-ball"></i>Amonestar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
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






   <!-- Modal -->
<div class="modal h-screen/2 w-full fixed flex-col left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-[#01A080] w-full rounded shadow-lg max-w-md">
        <div class="border-b px-2 py-2 flex justify-between items-center">
            <label class="font-semibold text-lg text-white text-center">¿Está seguro de que desea amonestar al estudiante?</label>
            <div class="max-w-md flex flex-col items-end justify-end p-2">
                <button class="close-modal bg-white rounded-full ">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
        </div>
        <div class="bg-white rounded p-2 flex flex-col items-center">
            <h5 class="text-black text-lg mb-2 font-thin" id="student-name">Nombre del Estudiante</h5>
            <div class="modal-body mb-0 overflow-y-auto h-[auto]">
                <button class="bg-[#0064d7] hover:bg-[#1f695a] p-2 py-1 rounded text-white mr-2" id="confirm-button">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.show-modal').forEach(button => {
        button.addEventListener('click', function() {
            const studentId = this.getAttribute('data-student-id');
            const studentName = this.getAttribute('data-student-name');

            const modal = document.querySelector('.modal');
            const studentNameElement = modal.querySelector('#student-name');
            const confirmButton = modal.querySelector('#confirm-button');

            studentNameElement.textContent = studentName;

            confirmButton.addEventListener('click', function() {
                // Aquí puedes implementar la lógica para amonestar al estudiante con el ID 'studentId'
                // Por ejemplo, puedes hacer una solicitud AJAX o redirigir a una ruta de Laravel
            });

            modal.classList.remove('hidden');
        });
    });

    document.querySelectorAll('.close-modal').forEach(close => {
        close.addEventListener('click', function() {
            const modal = document.querySelector('.modal');
            modal.classList.add('hidden');
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
