@foreach ($grupos as $grupo)
    <div id="delete{{ $grupo->id }}" class="delete-modal h-screen w-full fixed left-0 top-0 hidden flex justify-center items-center bg-black bg-opacity-50">
        <input type="hidden" name="career_id" value="{{ $grupo->id }}">
        <div class="bg-[#01A080] w-full rounded shadow-lg max-w-2xl">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60 text-white">Eliminar carrera</h3>
                <button class="close-modal bg-white rounded-full">
                    <p class="text-2xl"><i class="fa-solid fa-circle-xmark" style="color: #d50101;"></i></p>
                </button>
            </div>
            <div class="bg-white p-2">
                <div class="modal-body flex-col gap-4 mb-0 overflow-y-auto flex items-center justify-center p-10">
                    <h1 class="poppins-light text-[20px]">
                        ¿Estás seguro de eliminar el grupo "{{ $grupo->group_name }}"?
                    </h1>
                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 p-2 rounded-md">
                            Sí
                        </button>
                        <button type="button" class="bg-blue-500 p-2 rounded-md close-modal">
                            No
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach