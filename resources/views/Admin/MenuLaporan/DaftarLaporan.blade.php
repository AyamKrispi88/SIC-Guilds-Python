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
    <x-navbar-admin></x-navbar-admin>

    <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/laporanadmin.png') }}')">
        <div class="absolute inset-0 bg-gradient-to-r from-[#E4C72B]/80 to-[#000080]/80"></div>
         <div class=" relative flex flex-col items-center text-center pt-8 md:pt-20">
            <div class="text-left">
                <p class="md:text-[36px] text-base">Laporan</p>
                <h1 class=" font-bold md:text-[90px] text-[23px] leading-tight">KEAMANAN</h1>
            </div>
        </div>
    </section>

    <div class="mb-6 w-[90%] mt-5 px-5 md:w-full">
        <input 
            type="text" 
            placeholder="Cari: " 
            class="w-[50%] border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
    </div>

    <div class="mb-6 w-[90%] mt-5 md:w-full flex flex-col md:flex-row gap-5">
        <div class="flex items-center gap-4 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] mx-5 w-full justify-between flex-wrap">
        <div class="flex items-center gap-4">
        <div class="shrink-0">
            <img class="w-[107px] h-[107px] mx-5 rounded-full object-cover" src="{{ asset('assets/hutawi.webp') }}" alt="">
        </div>
        <div>
           <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
           <p class="text-[25px]">
            Pelapor: User Hihi <br>
            Status: Sudah Selesai <br>
            Waktu Pelaporan: 22 Desember 2022, 17:00 WIB <br>
            </p> 
        </div>
        </div>
        <div class="flex md:flex-col flex-row gap-3 w-full md:w-auto">
            <div class="relative">
                <select class="appearance-none border border-white w-64 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-between cursor-pointer">
                    <option selected disabled>Status Laporan</option>
                    <option value="selesai">Sudah diselesaikan</option>
                    <option value="proses">Masih dalam proses</option>
                    <option value="batal">Dibatalkan</option>
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center md:text-left">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>
    </div>
    </div>

    <div class="mb-6 w-[90%] mt-5 md:w-full flex flex-col md:flex-row gap-5">
        <div class="flex items-center gap-4 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] mx-5 w-full justify-between flex-wrap">
        <div class="flex items-center gap-4">
        <div class="shrink-0">
            <img class="w-[107px] h-[107px] mx-5 rounded-full object-cover" src="{{ asset('assets/hutawi.webp') }}" alt="">
        </div>
        <div>
           <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
           <p class="text-[25px]">
            Pelapor: User Hihi <br>
            Status: Sudah Selesai <br>
            Waktu Pelaporan: 22 Desember 2022, 17:00 WIB <br>
            </p> 
        </div>
        </div>
        <div class="flex md:flex-col flex-row gap-3 w-full md:w-auto">
            <div class="relative">
                <select class="appearance-none border border-white w-64 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-between cursor-pointer">
                    <option selected disabled>Status Laporan</option>
                    <option value="selesai">Sudah diselesaikan</option>
                    <option value="proses">Masih dalam proses</option>
                    <option value="batal">Dibatalkan</option>
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center md:text-left">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>
    </div>
    </div>

    <div class="mb-6 w-[90%] mt-5 md:w-full flex flex-col md:flex-row gap-5">
        <div class="flex items-center gap-4 p-4 border rounded-lg shadow-sm bg-[#D9D9D9] mx-5 w-full justify-between flex-wrap">
        <div class="flex items-center gap-4">
        <div class="shrink-0">
            <img class="w-[107px] h-[107px] mx-5 rounded-full object-cover" src="{{ asset('assets/hutawi.webp') }}" alt="">
        </div>
        <div>
           <h2 class="text-[32px] font-bold">Laporan: Tawuran Moment</h2>
           <p class="text-[25px]">
            Pelapor: User Hihi <br>
            Status: Sudah Selesai <br>
            Waktu Pelaporan: 22 Desember 2022, 17:00 WIB <br>
            </p> 
        </div>
        </div>
        <div class="flex md:flex-col flex-row gap-3 w-full md:w-auto">
            <div class="relative">
                <select class="appearance-none border border-white w-64 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-between cursor-pointer">
                    <option selected disabled>Status Laporan</option>
                    <option value="selesai">Sudah diselesaikan</option>
                    <option value="proses">Masih dalam proses</option>
                    <option value="batal">Dibatalkan</option>
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <x-button variant="generalUse" class="w-64 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center md:text-left">
                <span class="font-medium">Lihat Detail Laporan</span>
            </x-button>
        </div>
    </div>
    </div>

    <x-footer> </x-footer>
</body>
</html>