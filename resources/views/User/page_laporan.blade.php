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

<x-navbar-admin></x-navbar-admin>

<section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/laporanadmin.png') }}')">
    <div class="absolute inset-0 bg-gradient-to-r from-[#E4C72B]/80 to-[#000080]/80"></div>
    <div class="relative flex flex-col items-center text-center pt-8 md:pt-20">
        <div class="text-left">
            <p class="md:text-[36px] text-base">Laporan</p>
            <h1 class="font-bold md:text-[90px] text-[23px] leading-tight">KEAMANAN</h1>
        </div>
    </div>
</section>

<div class="flex justify-between mr-3.5 w-full items-center px-5 mt-5">
    <div class="mb-6 w-[90%] mt-5 px-5 md:w-full">
        <input 
            type="text" 
            placeholder="Cari: " 
            class="w-[50%] border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
    </div>

    <x-button variant="generalUse" class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
        Buat Laporan Baru
    </x-button>
</div>


<div class="px-5 space-y-6 mb-5">

    <div class="flex flex-col md:flex-row gap-5 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] w-full">

        <div class="flex-1">
            <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
            <p class="text-[25px]">
                Status: Sudah Selesai <br>
                Waktu Pelaporan: 22 Desember 2022, 17:00 WIB
            </p>
        </div>

        <div class="flex flex-col justify-end items-end">
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>

    </div>


    <div class="flex flex-col md:flex-row gap-5 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] w-full">

        <div class="flex-1">
            <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
            <p class="text-[25px]">
                Status: Sudah Selesai <br>
                Waktu Pelaporan: 22 Desember 2022, 17:00 WIB
            </p>
        </div>

        <div class="flex flex-col justify-end items-end">
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>

    </div>


    <div class="flex flex-col md:flex-row gap-5 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] w-full">

        <div class="flex-1">
            <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
            <p class="text-[25px]">
                Status: Sudah Selesai <br>
                Waktu Pelaporan: 22 Desember 2022, 17:00 WIB
            </p>
        </div>

        <div class="flex flex-col justify-end items-end">
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>

    </div>

</div>

<x-footer></x-footer>

</body>
</html>