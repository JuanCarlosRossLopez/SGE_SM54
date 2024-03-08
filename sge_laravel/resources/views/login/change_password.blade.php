<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-green-500 flex items-stretch justify-center h-screen">
    <!-- Left side with image -->
    <div class="hidden lg:block lg:w-1/2 bg-green-500 rounded-l">
        <!-- You can replace the src with your own image -->
        <img src="{{ asset('image/SGE.png') }}" alt="Login Image" class="object-cover w-full h-full rounded-tl-xl">
    </div>


    <!-- Right side with login form -->
    <div class="w-full lg:w-1/2 bg-white px-20 shadow-md rounded-2xl rounded-tl-2xl rounded-bl-2xl">
        <img src="{{ asset('image/Logo.png') }}" alt="Logo Image" class="object-cover mx-auto my-20">
        <h2 class="text-3xl font-semibold text-black mb-6 text-center">Cambiar Contraseña</h2>
        <!-- Login form -->
        <form action="#" method="POST">
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                <div class="relative">
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded-md  focus:border-blue-500 pr-10"
                        required>
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center h-full focus:outline-none">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Cambiar Contraseña</label>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border rounded-md  focus:border-blue-500 pr-10"
                            required>
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center h-full focus:outline-none">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                
            </div>
            <div class="mb-4 items-center flex justify-center">
                <button type="submit"
                    class="w-1/3 bg-green-500 text-white font-semibold py-2 px-4 rounded-md  hover:bg-green-600 focus:outline-none focus:bg-green-600">Cambiar Contraseña</button>
            </div>
        </form>
    </div>
</body>

</html>
