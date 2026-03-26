@extends('User.PakemUser')
@section('title', 'Detail Laporan - Orang Hilang')
@section('konten')
    <main class="font-poppins">
        <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/laporanhilang.png') }}')">
        <div class="absolute inset-0 bg-[#000000]/50"></div>
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
            <h3 class="text-[16px] md:text-[25px] text-gray-600">Status terkini: belum ditangani</h3>
        </div>

        <div class="hidden md:flex gap-3 items-center">
            <x-button variant="generalUse" class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
            Edit Laporan
            </x-button>

            <x-button variant="transpar" class="whitespace-nowrap hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg">
                Hapus Laporan
            </x-button>  
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-start">
    <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">  
        <div>
            <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Laporan</h4>
            <x-jenislaporan readonly></x-jenislaporan>
        </div>

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Hilang</h4>
            <div class="relative">
                <input type="date" 
                value="2022-08-09"
                readonly
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none [&::-webkit-calendar-picker-indicator]:opacity-0 [&::-webkit-calendar-picker-indicator]:absolute [&::-webkit-calendar-picker-indicator]:inset-0 [&::-webkit-calendar-picker-indicator]:cursor-pointer">
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" viewBox="0 0 448 512" fill="currentColor">
                        <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c35.3 0 64 28.7 64 64l0 352c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128c0-35.3 28.7-64 64-64l48 0 0-32c0-17.7 14.3-32 32-32zM64 128l0 48 320 0 0-48L64 128zM0 224l0 256c0 17.7 14.3 32 32 32l384 0c17.7 0 32-14.3 32-32l0-256L0 224zM224 320a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Lokasi Terakhir</h4>
            <div class="relative">
                <input type="text" value="Patung macan" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
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
            <div class="flex flex-col items-center justify-center p-6 text-center">
            <img class=""src="assets/orhil.png" alt="">
    </div>
    </div>
</div>

<h3 class="px-5 text-[16px] md:text-[25px] font-bold mb-1">Detail Orang Hilang</h3>

<div class="px-5 flex flex-col md:flex-row gap 2 md:gap-5 justify-between items-start">
    <div class="grid grid-cols-1 gap-6 md:mb-8 w-full max-w-[610px]">
        <div class="flex flex-col md:flex-row gap-5 justify-between items-start">
            <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-[610px]">
                <div class="w-full">
                    <h4 class="text-md md:text-lg font-semibold mb-2">Nama Lengkap</h4>
                    <input type="text" value="Krishna Ardi si Merah dari goa hitam" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                </div>
                <div class="w-full">
                    <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Kelamin</h4>
                    <input type="text" value="Laki - laki" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                </div>
                <div class="w-full">
                    <h4 class="text-md md:text-lg font-semibold mb-2">Kewarganegaraan</h4>
                    <input type="text" value="WNI/Warga Negara Indonesia" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                </div>
                <div class="w-full">
                    <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Lahir</h4>
                    <input type="text" value="29 Februari 2990" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                </div>  
            </div> </div> </div> 
    <div class="w-full max-w-[610px]"> 
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tinggi Badan</h4>
            <input type="text" value="173 cm" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
        </div>
        <div class="w-full mt-6"> 
            <h4 class="text-md md:text-lg font-semibold mb-2">Berat Badan</h4>
            <input type="text" value="70 kg" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
        </div>
    </div>
</div> 

<div class="w-full px-5 pt-5 md:pt-0">
            <h4 class="text-md md:text-lg font-semibold mb-2">Deskripsi Orang Hilang</h4>
            <div class="relative">
                <textarea type="text" readonly placeholder="Tuliskan keterangan lengkap orang yang hilang" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]">
Ya begitulah
                </textarea>
            </div>
        </div>

    <div class="md:hidden justify-center flex flex-row w-full gap-3 items-center px-5 mb-5">

            <x-button variant="generalUse" class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
            Edit Laporan
            </x-button>

            <x-button variant="transpar" class="whitespace-nowrap hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg">
                Hapus Laporan
            </x-button>
        </div>

    </main>
@endsection