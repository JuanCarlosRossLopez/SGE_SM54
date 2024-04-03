<head></head>
@vite('resources/css/app.css')
</head>

<main>
    @csrf

    <h1>EDITAR MEMORIA</h1>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('historial_de_memorias.update', $memory->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="memory_name">nombre de la memoria</label>
            <input type="text" name="memory_name" id="memory_name" value="{{ $memory->memory_name }}" required>
        </div>

        <div>
            <label for="memorie_pdf">pdf memoria</label>
            <input type="text" name="memorie_pdf" id="memorie_pdf" value="{{ $memory->memorie_pdf}}" required>
        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar</button>
    </form>



</main>
