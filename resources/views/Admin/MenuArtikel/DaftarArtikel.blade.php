@extends('Admin.PakemAdmin')
@section('title', 'Daftar Artikel')
@section('konten')
<main class="bg-white min-h-screen pb-20">

    <div class="w-full h-64 bg-blue-900 relative flex items-center justify-center">
        <img src="{{ asset('assets/artikelpage.png') }}" alt="Artikel Icon" 
        class="absolute inset-0 w-full h-full object-cover opacity-60">

        <div class="relative text-center border-y-2 border-white py-4 px-10">
            <h1 class="text-white text-5xl font-black tracking-[0.2em]">BERITA TERKINI</h1>
        </div>
    </div>
   <div class="container mx-auto px-6 mt-10">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
            <div class="relative w-full md:w-3/5">
                <input type="text" placeholder="Cari:" 
                    class="w-full border-[3px] border-purple-500 rounded-md px-4 py-2 text-lg focus:outline-none focus:ring-2 focus:ring-purple-300">
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-10 py-3 rounded-lg font-bold text-lg shadow-lg transition">
                Buat Artikel Baru
            </button>
        </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-5">
    
    <x-daftar-artikel 
        image="{{ asset('assets/patungmacan.png') }}"
        title="Berita Keamanan di Sekitar Patung Macan"
        author="Rania As"
        content="Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi."
        url="/artikel/keamanan-macan"
    />

    <x-daftar-artikel 
        image="{{ asset('assets/patungmacan.png') }}"
        title="Laporan Kemacetan di Simpang Lima"
        author="Admin Polisi"
        content="Arus lalu lintas terpantau padat merayap sore ini dikarenakan adanya perbaikan jalan di jalur utama."
        url="/artikel/macet-simpang-lima"
    />
    <x-daftar-artikel 
        image="{{ asset('assets/patungmacan.png') }}"
        title="Laporan Kemacetan di Simpang Lima"
        author="Admin Polisi"
        content="Arus lalu lintas terpantau padat merayap sore ini dikarenakan adanya perbaikan jalan di jalur utama."
        url="/artikel/macet-simpang-lima"
    />
</div>
</main>
@endsection
