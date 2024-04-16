<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/guayabo.css')
</head>

<body class="bg-[#d2d2d2] flex items-center justify-center h-screen overflow-hidden">
    <div class="w-screen">
        <img src="{{ asset('image/fondo.svg') }}" alt="fondo" class="">
    </div>
    <div class="w-fit absolute bg-white p-2 px-4 rounded-md flex flex-row items-center justify-center">
        <div class="w-[30rem] h-[40rem] flex flex-col px-4 my-[1rem] rounded-tl-xl rounded-bl-xl ">
            <img src="{{ asset('image/Logo.svg') }}" alt="Logo Image">


            <!-- Password reset form -->
            <div class="w-full flex flex-row gap-2 text-center justify-center">
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
                <label class="w-1/3  text-lg font-semibold text-[#387f75] flex items-center justify-center my-2">Ingresa el Código</label>
                <img src="{{ asset('image/line.svg') }}" alt="Logo Image" class="">
            </div>

            <form method="POST" action="{{ route('password.email') }}" class="">
                @csrf
                <div class="">
                    <label for="code" class="block text-gray-700 font-semibold mb-2">Ingrese el Código</label>
                    <x-text-input id="code" class="w-full px-2 py-2 border rounded-md focus:border-gray-500"
                        type="code" name="code" :value="old('code')" required autofocus />
                    <x-input-error :messages="$errors->get('code')" class="mt-2" />
                </div>
                <div class="p-2">
                    <button type="submit" class="buttons_card_login">
                        <label class="w-full cursor-pointer">Ingresar Código</label>
                    </button>
                </div>
            </form>
        </div>
        <div class="w-[30rem] h-[40rem] flex  px-4 my-[1rem] rounded-tl-xl rounded-bl-xl ">
            <video autoplay muted loop class="object-cover rounded-tr-xl rounded-br-xl">
                <source src="{{ asset('video/VideoUT4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>

</html>
