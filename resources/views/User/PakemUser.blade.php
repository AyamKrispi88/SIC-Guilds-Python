<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/logo1.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     @vite(['resources/css/app.css', 'resources/js/home.js'])
     @include('FontDLainnya.Font')
</head>
<body>
    <x-nav-bar></x-nav-bar>
    @yield('konten')
    <x-footer> </x-footer>
</body>
</html>