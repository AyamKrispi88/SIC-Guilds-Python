@extends('Admin.PakemAdmin')
@section('title', 'Daftar Artikel')
@section('konten')
<main>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-5">
    
    <x-daftar-artikel 
        image="{{ asset('assets/patungmacan.png') }}"
        title="Berita Keamanan di Sekitar Patung Macan"
        author="Rania As"
        content="Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi."
        url="/artikel/keamanan-macan"
    />

    <x-daftar-artikel 
        image="https://via.placeholder.com/400x300"
        title="Laporan Kemacetan di Simpang Lima"
        author="Admin Polisi"
        content="Arus lalu lintas terpantau padat merayap sore ini dikarenakan adanya perbaikan jalan di jalur utama."
        url="/artikel/macet-simpang-lima"
    />

</div>
</main>
@endsection
