<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<<<<<<< HEAD
    <x-navbar-admin></x-navbar-admin>
    <div class=" flex flex-col md:flex-row justify-center items-center w-full md:w-full h-full md:h-full p-20 hover:animate-bounce">
         <h1 class=" text-7xl text-red-800 font-extrabold">Semangat semua</h1>
         <h1 class=" text-7xl text-red-800 font-extrabold">Semangat semuaa</h1>
    </div>
=======
    <x-nav-bar></x-nav-bar>
    @yield('konten')
>>>>>>> 365186f9a7a598d02c6719ed7e09a4b5244a5bd4
    <x-footer> </x-footer>
</body>
</html>