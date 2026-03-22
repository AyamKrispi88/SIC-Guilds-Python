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
     
    <input type="text" placeholder="Cari Nama Tersangka" class="border rounded-lg ml-16 my-8 px-4 text-2xl bg-amber-50 w-[50%] mr-8">

    <section class=" grid grid-cols-1 lg:grid-cols-3 w-full gap-8 h-auto lg:w-full lg:h-auto p-10 justify-items-center">
        <x-daftarburonan
            image="{{ asset('assets/GambarBuron/1.png') }}"
            title="Krisna Arduy"
            content="Perampokan Bank BPD Bali. 18 Maret 2025. Dalung-Badung"
        />

         <x-daftarburonan 
            image="{{ asset('assets/GambarBuron/2.png') }}"
            title="Tryas Angsadewi"
            content="Penyeludupan narkoba. 29 april 2024. Gilimanuk-Jembrana"
        />

        <x-daftarburonan 
            image="{{ asset('assets/GambarBuron/3.png') }}"
            title="Rania"
            content="Pelaku pembegalan jalan raya. 28 april 2022. Sidan-Jakarta "  
        />

        <x-daftarburonan  
            image="{{ asset('assets/GambarBuron/4.png') }}"
            title="Guy"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
        <x-daftarburonan
            image="{{ asset('assets/GambarBuron/5.png') }}"
            title="Pilip"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
        <x-daftarburonan 
            image="{{ asset('assets/GambarBuron/6.png') }}"
            title="Agoesde"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
        <x-daftarburonan
            image="{{ asset('assets/GambarBuron/7.png') }}"
            title="Aruel"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
                <x-daftarburonan 
            image="{{ asset('assets/GambarBuron/8.png') }}"
            title="Deasa"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
                <x-daftarburonan  
            image="{{ asset('assets/GambarBuron/9.png') }}"
            title="Ari-ari"
            content="Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat"  
        />
    </section>
    </main>
<x-footer> </x-footer>
</body>
</html>