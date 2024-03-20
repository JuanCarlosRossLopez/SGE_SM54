@extends('test.test_template')
@section('titulo')
    Registro
@endsection
@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <div class="modal-wrapper">
        <div
            class="modal fixed top-0 left-0 w-full h-[700px] overflow-hidden flex justify-center items-center bg-opacity-500">
            <div class="bg-green-500 w-[600px] rounded shadow-lg max-w-4xl ">
                <div class="border-b px-4 py-2 flex justify-between items-center">
                    <h3 class="font-semibold text-lg justify-center items-center text-white text-center">Editar
                        Coordinador</h3>
                    <button class="close-modal bg-white rounded-full">
                        <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                    </button>
                </div>
                <div class="bg-white p-2">
                    <div class="modal-body mb-0 overflow-y-auto h-[100vh]">
                        <div class="container mx-auto px-4 py-8">
                            <h1 class="text-center font-semibold text-2xl">Editar Coordinador</h1>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                                <div class="bg-white rounded-lg p-8 mx-auto flex justify-center items-center flex-col">
                                    <form action="{{ route('coordinacion.store') }}" method="POST"
                                        class="flex flex-col gap-4">
                                        @csrf
                                        @method('POST')
                                        <div class="flex gap-4">
                                            <div class="flex flex-col gap-4">
                                                <input type="text" name="coordinator_name" id="coordinator_name"
                                                    placeholder="Nombre del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                                <input type="text" name="user_id" id="user_id"
                                                    placeholder="ID de usuario del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                            </div>
                                            <div class="flex flex-col gap-4">
                                                <input type="number" name="payroll" id="payroll"
                                                    placeholder="Número de nómina del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                                <input type="text" name="division_id" id="division_id"
                                                    placeholder="ID de la división del coordinador"
                                                    class="rounded-md border border-gray-300 p-2">
                                            </div>
                                        </div>
                                        <!-- Puedes agregar más campos aquí según sea necesario -->
                                        <div class="flex justify-end mt-4">
                                            <button type="submit"
                                                class="bg-[#01A080] text-white rounded p-2">Agregar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.querySelector('.modal');

        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');
        const addStudentBtn = document.querySelector('.add-student');

        showModal.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModal.forEach(close => {
            close.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        });

        addStudentBtn.addEventListener('click', function() {
            const form = document.getElementById('studentForm');
            const formData = new FormData(form);




            alert('Alumno Agregado correctamente');

            form.reset();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
@endsection
