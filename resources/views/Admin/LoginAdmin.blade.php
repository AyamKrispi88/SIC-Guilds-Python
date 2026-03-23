<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/logo2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/home.js'])
     @include('FontDLainnya.Font')
</head>
<body>
<x-navbar-lr></x-navbar-lr>

<div class="mt-10 px-4">
    <div class="mb-6 w-[90%] md:w-full max-w-md mx-auto">
        <h4 class="text-md md:text-lg font-semibold mb-2">Email atau Username</h4>
        <input 
            type="text" 
            placeholder="Email atau Username" 
            class="w-full p-3 md:p-4 border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
    </div>

    <div class="mb-6 w-[90%] md:w-full max-w-md mx-auto">
        <h4 class="text-md md:text-lg font-semibold mb-2">Password</h4>
        <div class="relative">
            <input 
                type="password" 
                placeholder="8-Digit Password" 
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
            
            <div class="absolute inset-y-0 right-4 flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-gray-400 hover:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="w-[90%] md:w-full max-w-md mx-auto">
        <x-button variant="generalUse" class="w-full bg-blue-500 hover:bg-blue-700 flex justify-center mt-6 md:mt-10 py-3 md:py-4 font-bold">
            Login
        </x-button>
    </div>

</div>


</body>
</html>