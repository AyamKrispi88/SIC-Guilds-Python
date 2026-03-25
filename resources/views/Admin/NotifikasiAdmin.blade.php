@extends('Admin.PakemAdmin')
@section('title', 'Notifikasi Admin')

@section('konten')
<main class="bg-white min-h-screen pb-20">
    <div class="w-full h-48 md:h-64 bg-blue-900 relative overflow-hidden">
    <img src="{{ asset('assets/notifikasi.png') }}" 
         class="absolute inset-0 w-full h-full object-cover opacity-80">
    
    <div class="relative flex flex-col items-start justify-center h-full px-5 md:px-10">
        <h1 style="font-family: 'Rowdies', cursive;" 
                class="text-white text-5xl md:text-6xl font-bold tracking-tight drop-shadow-lg">
                Notifikasi
            </h1>
    </div>
</div>
    <div class="w-full mx-auto px-6 py-16 text-center">
        <h2 class="text-2xl md:text-4xl font-extrabold text-black leading-tight mb-8">
            Pemberitahuan Sistem: User Hihi Menambahkan <br class="hidden md:block"> Laporan
        </h2>

        <div class="flex items-center justify-center gap-3 mb-10">
            <img src="{{ asset('assets/profileuser.png') }}" alt="User Profile" 
                 class="w-10 h-10 rounded-full object-cover border border-gray-200">
            <span class="font-bold text-black text-lg">User hihi</span>
        </div>

        <div class="text-left space-y-6 text-gray-800 text-lg leading-relaxed max-w-2xl mx-auto">
            <p>Sistem otomatis</p>
            
            <p>
                User hihi terdeteksi telah menambahkan laporan kriminal pada website ini. 
                Dimohonkan untuk laporan tersebut segera ditindaklanjuti.
            </p>

            <p class="pt-4">
                --Sincerely, user hihi
            </p>
        </div>
    </div>
</main>       
@endsection