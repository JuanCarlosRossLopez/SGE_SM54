<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex flex-col justify-center items-center">
    <div class="max-w-lg text-center">
    <dotlottie-player src="https://lottie.host/b7cf9205-b147-412b-a4dc-dc7b15c269fa/oXWQegGagV.json" background="transparent" speed="1" style="items-center width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <h1 class="text-4xl font-bold text-gray-800 mb-4">404 - Página no encontrada</h1>
        <p class="text-lg text-gray-600 mb-8">Lo sentimos, la página que estás buscando no pudo ser encontrada.</p>
        <a href="#" onclick="history.go(-1)"
            class="inline-block bg-green-500/20 text-green-900 font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition-colors duration-300">Volver</a>
    </div>
</body>

</html>
