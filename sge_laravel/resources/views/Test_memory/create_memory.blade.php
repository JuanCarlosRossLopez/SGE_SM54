
<head>
    @vite('resources/css/app.css')
</head>

<main>
@csrf

<h1>CREAR MEMORIA</h1>

<form action="{{ route('memory.store') }}" method="POST">
@csrf
    <div>
    <label  for="memory_name">nombre de la memoria</label>
    <input type="text" name="memory_name" id="memory_name">
    </div>

    <div>
    <label  for="memorie_pdf">pdf memoria</label>
    <input type="text" name="memorie_pdf" id="memorie_pdf">
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Guardar</button>
</form>



</main>
