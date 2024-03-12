@extends('templates.template_admin')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <button class="show-modal flex justify-center items-center"> Agregar </button>
    <div class="modal-wrapper">
        <div class="modal  fixed top-0 left-0 w-full h-[700px] overflow-hidden flex justify-center items-center bg-opacity-500">
            <div class="bg-green-500 w-[600px] rounded shadow-lg max-w-4xl ">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg justify-center items-center text-white text-center">Registrar Alumnos</h3>
                    <button class="close-modal bg-white rounded-full">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body mb-0 overflow-y-auto h-[100vh]">
                        <div class="container mx-auto px-4 py-8">
                            <h1 class="text-center font-semibold text-2xl">Registrar Alumno</h1>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="bg-white rounded-lg p-8 mx-auto flex justify-center items-center flex-col">
                                    <form action="#funciones futura" method="POST" class="w-full">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Nombre:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Apellido Paterno:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Apellido Materno:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Matricula:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                    </div> <!-- end of first column -->
                                    <div class="flex justify-center items-center flex-col"> <!-- start of second column -->
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Division:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Carrera :</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Grupo:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                        <div class="mb-4">
                                            <label for="grupo" class="text-gray-700 block mb-2">Asesor:</label>
                                            <input type="text" name="grupo" id="grupo" class="form-control w-full border rounded-lg py-2 px-4">
                                        </div>
                                      
                                    </form>
                                    
                                    
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tableBody = document.querySelector('tbody');
        const rowCount = tableBody.querySelectorAll('tr').length;
        document.getElementById('rowCount').textContent = rowCount;
    </script>

    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden')
        })

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden')
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
