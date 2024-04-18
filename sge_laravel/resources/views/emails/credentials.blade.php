<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credenciales de acceso a la plataforma SGE</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <header style="background-color: #f0f0f0; padding: 10px; text-align: center;">
            <h1 style="color: #333;">SGE</h1>
        </header>
        <main style="padding: 20px; height:100vh;">
            <div style="display: flex; flex-direction:column; justify-content:center;">
                <h1>Hola, {{ $name }}, espero que estés pasando un excelente día.</h1>
                <p>Aquí tienes tus credenciales para acceder a la plataforma:</p>
                <ul>
                    @if ($role == 'Aspirante')
                        <li><strong>Nombre:</strong> {{ $name }}</li>
                        <li><strong>Matrícula:</strong> {{ $id }}</li>
                    @elseif ($role == 'Asesor')
                        <li><strong>Nombre:</strong> {{ $name }}</li>
                        <li><strong>Nómina:</strong> {{ $id }}</li>
                    @endif
                    <li><strong>Usuario:</strong> {{ $email }}</li>
                    <li><strong>Contraseña:</strong> {{ $password }}</li>
                </ul>
                <p>Recuerda cambiar tu contraseña en tu primer inicio de sesión. De otra forma, no podrás acceder a la plataforma.</p>
            </div>
        </main>
    </div>
</body>
</html>
