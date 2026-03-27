@extends('Admin.PakemAdmin')
@section('title', 'Edit Buronan')
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

    <div class="px-5 py-5">
        <h1 class="text-[23px] md:text-[40px] font-bold mb-3">Edit Buronan</h1>
        <div class="flex flex-col md:flex-row justify-between items-center gap-5 mb-8 px-5 py-5">
            <div>
                <div class="w-full flex flex-col items-center md:items-start">
                <img class=""src="assets/GambarBuron/1.png" alt="">
                </div>
            </div>


        <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">

        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Nama Lengkap</h4>
            <div class="relative">
                <input type="text" 
                value="Krishna Ardi si Merah dari goa hitam"
                readonly
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>


        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Kelamin</h4>
            <div class="relative">
                <input type="text" 
                value="Laki-Laki" 
                readonly
                class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Lokasi Terakhir</h4>
            <div class="relative">
                <input type="text" 
                readonly
                value="Goa Gong" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Waktu Terakhir Dilihat</h4>
            <div class="relative">
                <input type="text" 
                readonly
                value="29 Februari 1990" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
        <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Kewarganegaraan</h4>
            <div class="relative">
                <input type="text" 
                readonly
                value="Warga Negara Indonesia" class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none">
            </div>
        </div>
    </div>
    </div>
        <div class="w-full px-5 flex flex-col md:flex-row md:justify-between gap-3">
            <div class="w-full">
            <h4 class="text-md md:text-lg font-semibold mb-2">Keterangan</h4>
            <div class="relative">
                <textarea type="text"
                readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]">
                Tanggal Lahir: 32 Juni 2002 
                Tempat Lahir: Tabanan 
                Tinggi: 70Kg  
                Berat:  700cm  
                Postur badan: Tunggu kiris  
                Rambut: Hitam bersinar
                Mata: Coklat
            </textarea>
            </div>
            </div>

            <div class="w-full">
                <h4 class="text-md md:text-lg font-semibold mb-2">Deskripsi</h4>
            <div class="relative">
                <textarea type="text" readonly class="w-full p-3 md:p-4 pr-12 border border-gray-300 rounded-md shadow-sm focus:outline-none mb-10 h-[140px]">Buronan bersifat agresif, terlihat bersahabat, tapi mematikan. Adakah 100k? Merupakan admin sungut lele</textarea>
            </div>
        </div>
        </div>
    </div>

<div class="w-full flex justify-center pb-5">
    <x-button variant="generalUse" class="px-4 py-2 rounded-md">
        Update Laporan Buronan
    </x-button>
</div>


</main>

@endsection