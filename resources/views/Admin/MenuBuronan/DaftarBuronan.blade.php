@extends('Admin.PakemAdmin')
@section('title', 'Daftar Buronan')
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

    <div class="flex flex-row gap-5 mt-5 w-[90%] px-5 items-center md:justify-between">
    <div class="mb-6 w-[90%] mt-5 px-5">
        <input 
            type="text" 
            placeholder="Cari: " 
            class="w-[50%] border border-gray-300 rounded-md shadow focus:outline-none placeholder-gray-400 px-2 py-2">
    </div>

    <x-button variant="transparent" class="text-blue-500 bg-white font-bold md:py-2 md:px-4 px-3 py-1 rounded text-center">
        <span class="font-medium">Hapus</span>
    </x-button>
    </div>

    <div class="w-full max-w-screen-xl container mx-auto px-4 md:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-5 mx-5 justify-items-center">
    
    @foreach ($buronan as $item)
           <x-daftarburonan
           :gmbr="$item['gmbr']"
           :judul="$item['judul']"
           :ket="$item['ket']"
           />
    @endforeach    

    {{-- backup code
    <x-daftarburonan> 
        image="{{ asset('assets/GambarBuron/1.png') }}"
        title="Dicari Buronan Sekitar Patung Macan"
        content="Terakhir dilihat: 9 Maret 1990"
    </x-daftarburonan>

    <x-daftarburonan> 
        image="{{ asset('assets/GambarBuron/2.png') }}"
        title="Dicari Buronan Segera"
        content="Terakhir dilihat: 9 Maret 1990"
    </x-daftarburonan>

    <x-daftarburonan >
        image="{{ asset('assets/GambarBuron/1.png') }}"
        title="Dicari Buronan Sekitar Patung Macan"
        content="Terakhir dilihat: 9 Maret 1990"
    </x-daftarburonan>

    <x-daftarburonan> 
        image="{{ asset('assets/GambarBuron/2.png') }}"
        title="Dicari Buronan Segera"
        content="Terakhir dilihat: 9 Maret 1990"
    </x-daftarburonan>

    </div>
    --}}
    </div>
</main>

@endsection