<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/guayabo.css')
</head>

<body class="bg-[#d2d2d2] flex items-center justify-center h-screen overflow-hidden">
    <div class="w-screen">
        <img src="{{ asset('image/fondo.svg') }}" alt="fondo" class="">
    </div>
    <div class="w-fit absolute bg-white p-2 px-4 rounded-md flex flex-row items-center justify-center">
        <div class="w-fit h-fit flex flex-col px-4 my-[1rem] rounded-tl-xl rounded-bl-xl ">
            <img src="{{ asset('image/LOGO.svg') }}" alt="Logo Image" class="">


            <!-- Laravel login form -->
            <div class="w-full flex flex-row gap-2 text-center justify-center">
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
                <label class="w-1/3  text-lg font-semibold text-[#387f75] flex items-center justify-center my-2">Iniciar
                    sesión</label>
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
            </div>

            <form method="POST" action="{{ route('login') }}" class="">
                @csrf
                <div class="">
                    <label for="email" class="block text-gray-700 font-semibold ">Ingrese su correo
                        electrónico:</label>
                    <x-text-input id="email" class="w-full px-2 py-2 border rounded-md focus:border-gray-500"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                        placeholder="Correo electrónico" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="p-2">
                    <label for="password" class="block text-gray-700 font-semibold">Ingrese su contraseña:</label>
                    <div class="relative">
                        <x-text-input id="password" class="w-full px-2 py-2 border rounded-md focus:border-blue-500"
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Contraseña" />
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center h-full focus:outline-none">
                            <i class="fas fa-eye"></i>
                        </button>
                        {{-- script para que funcione el boton del ojo --}}
                        <script>
                            const togglePassword = document.querySelector('#togglePassword');
                            const password = document.querySelector('#password');

                            togglePassword.addEventListener('click', function() {
                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                password.setAttribute('type', type);
                                this.querySelector('i').classList.toggle('fa-eye-slash');
                            });
                        </script>

                    </div>
                    <a href="{{ route('password.request') }}"
                        class="block px-4 py-2 font-normal underline text-[#257d6c] mb-2 text-center">¿Haz
                        Olvidado la contraseña? Recupérala aquí</a>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="p-2">
                    <button type="submit" class="buttons_card_green">
                        <label class="w-full cursor-pointer">Iniciar sesión</label>
                    </button>
                </div>
            </form>
        </div>
        <div class="h-full bg-white flex p-[0.3rem] rounded-tr-xl rounded-br-xl">
            <video autoplay muted loop class="object-cover rounded-tr-xl rounded-br-xl">
                <source src="{{ asset('video/VideoUT4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>

</html>
