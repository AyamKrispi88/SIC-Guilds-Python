@extends('User.PakemUser')
@section('title', 'isi laporan')
@section('konten')

<section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/detailadmin.png') }}')">
    <div class="absolute inset-0 bg-[#1C1A23]/80"></div>
    <div class="relative flex flex-col items-center text-center pt-8 md:pt-20">
        <div class="text-left">
            <p class="md:text-[36px] text-base">Laporan</p>
            <h1 class="font-bold md:text-[90px] text-[23px] leading-tight">KEAMANAN</h1>
        </div>
    </div>
</section>

<div class="p-5">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong>Terjadi Kesalahan:</strong>
        <ul class="list-disc pl-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5 mb-8">
        
        <div>
            <h1 class="text-[23px] md:text-[40px] font-bold mb-1">Laporan</h1>
        </div>
    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="hidden md:flex gap-3 items-center">
            

            <x-button variant="generalUse" type="submit"
                class="hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg">
                Buat Laporan
            </x-button>

        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-start">
        <div class="grid grid-cols-1 gap-6 mb-8 w-full max-w-2xl">  

            <div>
                <h4 class="text-md md:text-lg font-semibold mb-2">Jenis Laporan</h4>
                <x-jenislaporan name="jenis_laporan"></x-jenislaporan>
            </div>

            <div class="w-full">
                <h4 class="text-md md:text-lg font-semibold mb-2">Tanggal Kejadian</h4>
                <input type="date" name="tanggal_kejadian" class="w-full p-3 border border-gray-300 rounded-md">
            </div>

            <div class="w-full">
                <h4 class="text-md md:text-lg font-semibold mb-2">Lokasi Kejadian</h4>
                <input name="lokasi_kejadian" type="text" placeholder="Tuliskan lokasi kejadian" class="w-full p-3 border border-gray-300 rounded-md">
            </div>

        </div>

        <div class="w-full flex justify-center">
            <label class="flex flex-col items-center justify-center w-[300px] h-[300px] border-2 border-gray-300 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
                <p class="text-gray-600">Upload Foto</p>
                <input name="foto_kejadian" type="file" class="hidden">
            </label>
        </div>
    </div>
</div>

<div class="w-full px-5">
    <h4 class="text-md md:text-lg font-semibold mb-2">Deskripsi Kejadian</h4>
    <textarea name="deskripsi_kejadian" class="w-full p-3 border border-gray-300 rounded-md h-[140px]"></textarea>
</div>

<div class="flex md:hidden justify-center mb-6">
    <x-button variant="generalUse" type="submit"
        class="w-full max-w-[250px] hover:bg-blue-700 font-semibold py-2 px-4 border border-gray-400 rounded-lg text-center">
        Buat Laporan
    </x-button>
</div>

</form>

@endsection