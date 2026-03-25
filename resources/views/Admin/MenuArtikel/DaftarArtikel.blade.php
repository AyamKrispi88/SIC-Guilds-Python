@extends('Admin.PakemAdmin')
@section('title', 'Daftar Artikel')

@section('konten')
<main class="bg-white min-h-screen pb-20">
    <div class="w-full h-48 md:h-64 bg-blue-900 relative overflow-hidden">
        <img src="{{ asset('assets/artikelpage.png') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-60">
        <div class="relative flex items-center justify-center h-full">
            <h1 class="text-white text-2xl md:text-5xl font-black border-y-2 border-white py-2 px-4">
                BERITA TERKINI
            </h1>
        </div>
    </div>

    <div class="w-full px-4 md:max-w-6xl md:mx-auto mt-8"> 
        <div class="flex flex-row items-center justify-between gap-x-24 w-full">
            <div class="flex-1">
                <input type="text" placeholder="Cari:" 
                       class="w-full shadow-lg rounded-full px-12 py-2 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
            </div>
            <button class="shrink-0 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-bold shadow-md transition-all text-xs whitespace-nowrap">
                Buat Artikel Baru
            </button>
        </div>
    </div>

    <div class="w-full mx-auto px-4 md:px-10 mt-20 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 md:gap-8 max-w-md md:max-w-none mx-auto">
            
            <x-daftar-artikel 
                image="{{ asset('assets/patungmacan.png') }}"
                title="Berita Keamanan di Sekitar Patung Macan"
                author="Admin Polisi"
                content="Terjadi tindak kriminal di jalan patung macan..."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/kejahatan.png') }}"
                title="Daerah Rawan Kejahatan Berada di sekitar Denpasar!"
                author="Admin Polisi"
                content="Pihak kepolisian telah menandai suatu kawasan di sekitar denpasar menjadi kawasan rawan kejahatan karena banyaknya kasus disana."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/beladiri.png') }}"
                title="Berikut Merupakan Tips-Tips Untuk Melindungi Diri!"
                author="Admin Polisi"
                content="Ketika anda terpaksa berkunjung ke daerah rawan kejahatan, anda setidaknya harus menyiapkan benda-benda ini!"
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/patungmacan.png') }}"
                title="Berita Keamanan di Sekitar Patung Macan"
                author="Admin Polisi"
                content="Terjadi tindak kriminal di jalan patung macan..."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/kejahatan.png') }}"
                title="Daerah Rawan Kejahatan Berada di sekitar Denpasar!"
                author="Admin Polisi"
                content="Pihak kepolisian telah menandai suatu kawasan di sekitar denpasar menjadi kawasan rawan kejahatan karena banyaknya kasus disana."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/beladiri.png') }}"
                title="Berikut Merupakan Tips-Tips Untuk Melindungi Diri!"
                author="Admin Polisi"
                content="Ketika anda terpaksa berkunjung ke daerah rawan kejahatan, anda setidaknya harus menyiapkan benda-benda ini!"
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/patungmacan.png') }}"
                title="Berita Keamanan di Sekitar Patung Macan"
                author="Admin Polisi"
                content="Terjadi tindak kriminal di jalan patung macan..."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/kejahatan.png') }}"
                title="Daerah Rawan Kejahatan Berada di sekitar Denpasar!"
                author="Admin Polisi"
                content="Pihak kepolisian telah menandai suatu kawasan di sekitar denpasar menjadi kawasan rawan kejahatan karena banyaknya kasus disana."
                url="#"
            />

            <x-daftar-artikel 
                image="{{ asset('assets/beladiri.png') }}"
                title="Berikut Merupakan Tips-Tips Untuk Melindungi Diri!"
                author="Admin Polisi"
                content="Ketika anda terpaksa berkunjung ke daerah rawan kejahatan, anda setidaknya harus menyiapkan benda-benda ini!"
                url="#"
            />

        </div>
</main>       
@endsection