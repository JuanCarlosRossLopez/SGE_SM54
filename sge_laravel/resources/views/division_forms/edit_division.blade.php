<head></head>
@vite('resources/css/app.css')
</head>

<main>
    @csrf

    <h1>Editar division</h1>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('division.update', $divisions->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="division_name">Nombre de la división</label>
            <input type="text" name="division_name" id="division_name" value="{{ $divisions->divisions_name }}" required>
        </div>


        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar</button>
    </form>



</main>
