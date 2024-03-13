<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>
        @role('admin')
        Bienvenido al dashboard admin
        @endrole
        @role('teacher')
        Bienvenido al dashboard maiestro
        @endrole
        @role('student')
        Bienvenido al dashboard estudainte
        @endrole

        @can('delete')
        <button>
            Eliminar
        </button>
        @endcan

    </h1>
</body>
</html>