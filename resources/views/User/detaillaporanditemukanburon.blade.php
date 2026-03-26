@extends('User.PakemUser')
@section('title', 'Laporan Ditemukan Buronan')
@section('konten')
<main class="font-poppins">
    <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/daftartersangka.png') }}')">
        <div class="absolute inset-0"></div>
         <div class=" relative flex flex-col items-center text-center pt-8 md:pt-20">
            <div class="text-center">
                <h1 class=" font-bold md:text-[70px] text-[23px] leading-tight underline">DAFTAR TERSANGKA</h1>
                <p class="md:text-[36px] text-base">Daftar Orang Dalam Pencarian</p>
            </div>
        </div>
    </section>
    
<div class="p-5">
    <div class="flex flex-col md:flex-row text-left justify-between">
        <div>
            <h1 class="text-[23px] md:text-[40px] font-bold">TERSANGKA: Krishna Ardi</h1>
            <h3 class="text-[15px] md:text-[25px] text-gray-600">Status terkini: Belum Terverifikasi</h3>
        </div>

        <div>
            <div>
            <h2 class="text-[23px] md:text-[30px] font-bold mt-3"> Kejahatan: Buronan masih ada utang 4 Ribu </h2>
            </div>

        <div class="hidden md:block md:flex md:gap-3">
            <x-button variant="generalUse" class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
            Edit Laporan
            </x-button>

            <x-button variant="transpar" class="w-full max-w-[250px] hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
            Hapus Laporan
            </x-button>
        </div>
        </div>
        </div>

    <div class="flex flex-col md:flex-row justify-between items-center gap-5 mb-8 px-5 py-5 mt-5">
            <div>
                <div class="w-full flex flex-col items-center md:items-start">
                <img class=""src="assets/GambarBuron/1.png" alt="">
                </div>
            </div>


        <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Menemukan</h4>
            <div class="relative">
                <input type="text" 
                value="30 April 2023"
                readonly
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>


        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Tempat Menemukan</h4>
            <div class="relative">
                <input type="text" 
                value="Jl. Made Bulet, No,14 Banjar Tegeh" 
                readonly
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
                <h4 class="text-md md:text-lg font-semibold mb-2">Keterangan</h4>
            <div class="relative">
                <textarea type="text" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-3 md:mb-10 h-[200px]">Tersangka ditemukan dalam keadaan mabuk</textarea>
            </div>
        </div>
    </div>
    </div>
    <div class="md:hidden flex gap-3 justify-center">
            <x-button variant="generalUse" class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
            Edit Laporan
            </x-button>

            <x-button variant="transpar" class="w-full max-w-[250px] hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center whitespace-nowrap">
            Hapus Laporan
            </x-button>
        </div>
    </div>       

</main> 

@endsection