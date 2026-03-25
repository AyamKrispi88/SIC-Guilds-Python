<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/home.js'])
    @include('FontDLainnya.Font')
</head>
<body>
    <x-nav-bar></x-nav-bar>
    <div class=" flex flex-col md:flex-row justify-center items-center w-full md:w-full h-full md:h-full p-20">
    <x-admin-statuslaporan/>
    </div>

    <x-footer> </x-footer>
</body>
</html>