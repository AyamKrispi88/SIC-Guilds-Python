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
<body class=" bg-[#3E3E3E]">
    <x-nav-bar></x-nav-bar>
    <main>
        <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[400px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/buron.png') }}')">
         <div class=" relative py-9 px-10 lg:px-20 lg:py-40">
        <h1 class="  text-center font-bold text-2xl lg:text-[64px] leading-tight">DAFTAR TERSANKGA</h1>
        <div class=" border-t border-white w-40 lg:w-96 mx-auto"></div>
        <p class=" text-center text-[10px] lg:text-base">Daftar Orang Dalam pencarian </p>
        </div>
    </section>
    <section class=" grid grid-cols-1 lg:grid-cols-3 w-full h-auto lg:w-full lg:h-auto p-10">
        <p>anjay</p>
         <p>anjay</p>
          <p>anjay</p>
           <p>anjay</p>
            <p>anjay</p>
             <p>anjay</p>
              <p>anjay</p>
    </section>
    </main>
<x-footer> </x-footer>
</body>
</html>