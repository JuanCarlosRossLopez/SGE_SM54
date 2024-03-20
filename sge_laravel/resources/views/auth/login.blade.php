<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
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


    <!-- Right side with login form -->
    <div class="w-full lg:w-1/2 bg-white px-20 shadow-md rounded-2xl rounded-tr-xl rounded-br-xl">
        <img src="{{ asset('image/Logo.png') }}" alt="Logo Image" class="object-cover mx-auto my-20">

        <!-- Laravel login form -->
        <form method="POST" action="{{ route('login') }}" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                <x-text-input id="email" class="w-full px-4 py-2 border rounded-md focus:border-gray-500" type="email"
                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                <div class="relative">
                    <x-text-input id="password" class="w-full px-4 py-2 border rounded-md focus:border-blue-500 pr-10"
                        type="password" name="password" required autocomplete="current-password" />
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center h-full focus:outline-none">
                        <i class="fas fa-eye"></i>
                    </button>
                    {{-- script para que funcione el boton del ojo --}}
                    <script>
                        const togglePassword = document.querySelector('#togglePassword');
                        const password = document.querySelector('#password');
                    
                        togglePassword.addEventListener('click', function () {
                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                            password.setAttribute('type', type);
                            this.querySelector('i').classList.toggle('fa-eye-slash');
                        });
                    </script>
                    
                </div>
                <a href="{{ route('password.request') }}" class="block text-gray-700 font-semibold mb-2 text-center">¿Haz
                    Olvidado la contraseña? Recupérala aquí</a>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mb-4 items-center flex justify-center">
                <button type="submit"
                    class="w-1/3 bg-green-500 text-white font-semibold py-2 px-4 rounded-md  hover:bg-green-600 focus:outline-none focus:bg-green-600">Iniciar
                    sesión</button>
            </div>
        </form>
    </div>
</body>

</html>

