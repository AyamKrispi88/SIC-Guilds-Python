<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/logo2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div class="px-5 py-5">
        <div class="flex flex-col md:flex-row gap-5 w-full justify-between items-start md:items-center">
            <div>
            <h1 class="text-[23px] md:text-[40px] font-bold mb-1">Laporan dari Rania</h1>
            <h3 class="text-[16px] md:text-[25px] mb-1">Status terkini: sudah ditangani</h3>
            </div>
            <div class="div_button hidden md:flex md:flex-row gap-2 md:w-auto md:items-center py-5">
                <x-button variant="transpar" class=" hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded md:w-fit"> Hapus Laporan
                </x-button>

                <x-button variant="generalUse" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center justify-between md:w-fit">
                <span class="font-medium text-center">Status Laporan:</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                </x-button>

            </div>
        </div>
    </div>

<div>
    <div>
        <div class="mb-6 px-5 w-[90%] md:w-full max-w-md">
            <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Laporan Kriminal</h4>
            <div class="relative">
            <input 
                type="jenis laporan" 
                placeholder="Tuliskan jenis laporan kriminal" 
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
            <div class="absolute inset-y-0 right-4 flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden group-hover:block z-10">
                <ul class="py-1 text-gray-700">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Sedang Diproses</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Sudah Selesai</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Dibatalkan</a></li>
            </ul>
            </div>
            </div>
        </div>
    </div>

    <div>
        <div class="mb-6 px-5 w-[90%] md:w-full max-w-md">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Kejadian</h4>
            <div class="relative">
            <input 
                type="date kejadian" 
                placeholder="Tuliskan tanggal kejadian" 
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
            
            <div class="absolute inset-y-0 right-4 flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" viewBox="0 0 448 512" fill="currentColor">
                <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c35.3 0 64 28.7 64 64l0 352c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128c0-35.3 28.7-64 64-64l48 0 0-32c0-17.7 14.3-32 32-32zM64 128l0 48 320 0 0-48L64 128zM0 224l0 256c0 17.7 14.3 32 32 32l384 0c17.7 0 32-14.3 32-32l0-256L0 224zM224 320a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
            </svg>
            </div>
        </div>
        </div>
    </div>

    <div>
        <div class="mb-6 px-5 w-[90%] md:w-full max-w-md">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Kejadian</h4>
            <div class="relative">
            <input 
                type="lokasi" 
                placeholder="Tuliskan lokasi kejadian" 
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400">
            
            <div class="absolute inset-y-0 right-4 flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg"  class="h-6 w-6" viewBox="0 0 384 512" fill="none" stroke="black" stroke-width="32">
                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" fill="white"/>
                </svg>
            </div>
        </div>
        </div>
    </div>
</div>

    <x-footer> </x-footer>
</body>
</html>