@extends('Admin.PakemAdmin')
@section('title', 'Unggah Buronan')
@section('konten')
<main>
    <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/daftartersangka.png') }}')">
        <div class="absolute inset-0"></div>
         <div class=" relative flex flex-col items-center text-center pt-8 md:pt-20">
            <div class="text-center">
                <h1 class=" font-bold md:text-[70px] text-[23px] leading-tight underline">DAFTAR TERSANGKA</h1>
                <p class="md:text-[36px] text-base">Daftar Orang Dalam Pencarian</p>
            </div>
        </div>
    </section>

    <div class="px-5 py-5">
        <h1 class="text-[23px] md:text-[40px] font-bold mb-3">Unggah Buronan</h1>
        <div class="flex flex-col md:flex-row justify-between items-center gap-5 mb-8 px-5 py-5">
            <div>
                <div class="w-full flex flex-col items-center md:items-start">
                <label class="flex flex-col items-center justify-center w-full md:w-[350px] h-[350px] border-2 border-gray-300 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-all shadow-sm">
                <div class="flex flex-col items-center justify-center p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                <circle cx="12" cy="13" r="4"></circle>
                </svg>
                <p class="text-lg text-gray-600 font-semibold">Cantumkan Foto Tersangka</p>
            </div>
            <input type="file" class="hidden" accept="image/*" />
        </label>
    </div>
            </div>


        <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">
        
        <div class="w-full pt-5">
            <h4 class="text-md md:text-lg font-semibold mb-2">Kejahatan yang Dilakukan</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan kejahatan yang dilakukan" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Nama Lengkap</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan nama lengkap"
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>


        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Kelamin</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan jenis kelamin" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Lokasi Terakhir</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan lokasi terakhir dilihat" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Waktu Terakhir Dilihat</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan waktu terakhir dilihat" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Kewarganegaraan</h4>
            <div class="relative">
                <input type="text" placeholder="Tuliskan kewarganegaraan" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
    </div>
    </div>
        <div class="w-full px-5 flex flex-col md:flex-row md:justify-between gap-3">
            <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Keterangan</h4>
            <div class="relative">
                <textarea type="text" placeholder="Tuliskan keterangan" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]"></textarea>
            </div>
            </div>

            <div class="w-full">
                <h4 class="text-md md:text-lg font-semibold mb-2">Deskripsi</h4>
            <div class="relative">
                <textarea type="text" placeholder="Tuliskan deskripsi" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]"></textarea>
            </div>
        </div>
        </div>
    </div>

<div class="w-full flex justify-center pb-5">
    <button class="bg-blue-600 text-white px-4 py-2 rounded-md">
        Hapus Laporan
    </button>
</div>


</main>

@endsection