<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-green-500 flex items-stretch justify-center h-screen">
    <!-- Left side with video -->
<div class="hidden lg:block lg:w-1/2 bg-green-500 rounded-l">
    <video autoplay muted loop class="object-cover w-full h-full rounded-tl-xl">
        <source src="{{ asset('video/VideoUT.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>


    <!-- Right side with password reset form -->
    <div class="w-full lg:w-1/2 bg-white px-20 shadow-md rounded-2xl rounded-tl-2xl rounded-bl-2xl">
        <img src="{{ asset('image/Logo.png') }}" alt="Logo Image" class="object-cover mx-auto my-20">
        <h2 class="text-3xl font-semibold text-black mb-6 text-center">Ingresa el Código</h2>
        <h2>Se envió un correo electrónico para restablecer tu contraseña.</h2>
        <!-- Password reset form -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <label for="code" class="block text-gray-700 font-semibold mb-2">Ingrese el Código</label>
                <x-text-input id="code" class="w-full px-4 py-2 border rounded-md focus:border-gray-500" type="code"
                    name="code" :value="old('code')" required autofocus />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>
            <div class="mb-4 items-center flex justify-center">
                <button type="submit"
                    class="w-1/3 bg-green-500 text-white font-semibold py-2 px-4 rounded-md  hover:bg-green-600 focus:outline-none focus:bg-green-600">Ingresar Código</button>
            </div>
        </form>
    </div>
</body>

</html>
