@extends('User.PakemUser')
@section('title', 'isi laporan')
@section('konten')

        <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset("assets/gambarartikel.png") }}')">
        <div class="absolute inset-0"></div>
         <div class=" relative flex flex-col items-center text-center pt-8 md:pt-20">
            <div class="text-center">
                <h1 class=" font-bold md:text-[70px] text-[23px] leading-tight underline">BERITA TERKINI</h1>
            </div>
        </div>
    </section>

    <input type="text" placeholder="Cari Artikel" class="border rounded-lg ml-16 my-8 px-4 text-2xl bg-amber-50a w-[50%] mr-8">

   <section class=" grid grid-cols-1 lg:grid-cols-3 w-full gap-8 h-auto lg:w-full lg:h-auto p-10 justify-items-center">
    
    @foreach ($artikel as $berita)
        <x-daftarartikel
        :img="$berita['img']"
        :title="$berita['title']"
        :content="$berita['content']"
        :author="$berita['author']"
        :url="$berita['url']"
        />
    @endforeach
    {{-- <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />

    <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Kasus Begal Terjadi Kembali"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />

    <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Pencurian Kendaraan Semakin Meningkat"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />

    <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Kondisi Arus lalu Lintas Kota Denpasar Kian Membaik"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />

    <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Peningkatan Kepadatan Penduduk di Pelabuhan Gilimanuk Sangat Memprihatinkan"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />

    <x-daftarartikel
        image="{{ asset('assets/patungmacan.png') }}" 
        title="Perampokan Jalan raya Terjadi Kembali"
        author="Gungyuda" 
        content="slebew"
        url="www.infobadung.com"
    />
     --}}


   </section>

@endsection