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

    <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/detailadmin.png') }}')">
        <div class="absolute inset-0 bg-[#1C1A23]/80"></div>
         <div class=" relative flex flex-col items-center text-center pt-8 md:pt-20">
            <div class="text-left">
                <p class="md:text-[36px] text-base">Laporan</p>
                <h1 class=" font-bold md:text-[90px] text-[23px] leading-tight">KEAMANAN</h1>
            </div>
        </div>
    </section>

<div class="p-5">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5 mb-8">
        <div>
            <h1 class="text-[23px] md:text-[40px] font-bold mb-1">Laporan dari Rania</h1>
            <h3 class="text-[16px] md:text-[25px] text-gray-600">Status terkini: sudah ditangani</h3>
        </div>

        <div class="hidden md:flex gap-3 items-center">
            <x-button variant="transpar" class="hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg">
                Hapus Laporan
            </x-button>

            <x-button variant="generalUse" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center justify-between min-w-[180px]">
                <span class="font-medium">Status Laporan:</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </x-button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-start">
    <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">  
        <div>
            <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Laporan</h4>
            <div class="relative">
                <select class="block w-full bg-white p-3 md:p-4 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 cursor-pointer">
                    <option selected disabled>Pilih Jenis Laporan</option>
                    <option value="kriminal">Kasus Kriminal</option>
                    <option value="macet">Kemacetan Lalu Lintas</option>
                    <option value="hilang">Orang Hilang</option>
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Kejadian</h4>
            <div class="relative">
                <input type="date" 
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none [&::-webkit-calendar-picker-indicator]:opacity-0 [&::-webkit-calendar-picker-indicator]:absolute [&::-webkit-calendar-picker-indicator]:inset-0 [&::-webkit-calendar-picker-indicator]:cursor-pointer">
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" viewBox="0 0 448 512" fill="currentColor">
                        <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c35.3 0 64 28.7 64 64l0 352c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128c0-35.3 28.7-64 64-64l48 0 0-32c0-17.7 14.3-32 32-32zM64 128l0 48 320 0 0-48L64 128zM0 224l0 256c0 17.7 14.3 32 32 32l384 0c17.7 0 32-14.3 32-32l0-256L0 224zM224 320a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Lokasi Kejadian</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan lokasi kejadian" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 384 512" fill="white" stroke="black" stroke-width="32">
                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col items-center md:items-startmax-w-[400px]">
        <h4 class="text-md md:text-lg font-semibold mb-2">Foto Kejadian</h4>
        <label class="flex flex-col items-center justify-center w-full md:w-[350px] h-[350px] border-2 border-gray-300 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-all shadow-sm">
            <div class="flex flex-col items-center justify-center p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
            <circle cx="12" cy="13" r="4"></circle>
            s</svg>
                <p class="text-lg text-gray-600 font-semibold">Cantumkan Bukti Kejadian</p>
            </div>
            <input type="file" class="hidden" accept="image/*" />
        </label>
    </div>
    </div>
</div>

<div class="w-full px-5">
            <h4 class="text-md md:text-lg font-semibold mb-2">Deskripsi Kejadian</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan deskripsi kejadian" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]">
            </div>
        </div>

    <div class="md:hidden justify-center flex flex-row w-full gap-3 items-center px-5 mb-5">

            <x-button variant="generalUse" class="w-full max-w-[250px] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg flex items-center justify-between">
                <span class="font-medium">Status Laporan:</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </x-button>

            <x-button variant="transpar" class="w-full max-w-[250px] hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
                Hapus Laporan
            </x-button>
        </div>

    <x-footer> </x-footer>
</body>
</html>