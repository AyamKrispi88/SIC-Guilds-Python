@extends('Admin.PakemAdmin') @section('title', 'Home Admin')@section('konten') <main>
    <main class="bg-white min-h-screen pb-20">
        <div class="w-full h-48 md:h-64 bg-blue-900 relative overflow-hidden">
            <img src="{{ asset('assets/selamatdatang.png') }}" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60">
            <div class="relative flex flex-col items-start justify-center h-full px-10 md:px-20 text-white">
                <div class="border-b border-white/50 pb-2">
                    <h1 style="font-family: 'Stardos Stencil', system-ui;" class="text-3xl md:text-5xl font-bold tracking-tight leading-tight uppercase">
                        Selamat Datang Di <br> 
                        <span class="tracking-widest">Lapor Pak!!</span>
                    </h1>
                </div>
                <p style="font-family: 'Andika New Basic', sans-serif;" class="mt-3 text-xs md:text-sm font-light tracking-wide Andika New Basic opacity-90">
                    BANTUG: Berwibawa, Amanah, Tangguh, Unggul, Gesit
                </p>
            </div>
        </div>

        <div class="w-full mx-auto px-4 md:px-10 mt-12">
            <h2 class="text-2xl md:text-3xl font-bold text-black tracking-tight mb-6">
                Laporan Masyarakat Masuk
            </h2>

            <div class="flex flex-row items-end justify-between gap-6 w-full">
                <div class="flex-1">
                    <input type="text" placeholder="Cari:" 
                           class="w-full rounded-full md:rounded-lg px-6 py-2.5 border border-gray-100 shadow-[0px_4px_12px_rgba(0,0,0,0.08)] focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm font-medium">
                </div>

                <div class="flex flex-col items-start min-w-[140px] md:min-w-[180px]">
                    <label class="text-[11px] md:text-xs font-bold text-black mb-1 ml-1">Sort by:</label>
                    <div class="relative w-full">
                        <div class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 h-[42px] shadow-lg flex items-center">
                            <span class="text-xs text-gray-400 font-medium italic">Jenis Laporan</span>
                        </div>
                        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mx-auto px-4 md:px-10 mt-8 font-['Poppins']">
            <div class="flex flex-col gap-4">
                <div class="bg-[#D9D9D9] p-5 rounded-lg flex flex-row justify-between items-center shadow-sm">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold text-black">Laporan: Tawuran Moment</h3>
                        <p class="text-sm text-gray-700 mt-1">Status: Sudah selesai</p>
                        <p class="text-sm text-gray-700">Waktu Pelaporan:</p>
                    </div>
                    <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-xs font-semibold transition-all">
                        Lihat Detail Laporan
                    </button>
                </div>

                <div class="bg-[#D9D9D9] p-5 rounded-lg flex flex-row justify-between items-center shadow-sm">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold text-black">Laporan: Kemacetan Patung Macan</h3>
                        <p class="text-sm text-gray-700 mt-1">Status: Masih diproses</p>
                        <p class="text-sm text-gray-700">Waktu Pelaporan: Hari ini, Sabtu 30 Februari 2026, pukul 17.47</p>
                    </div>
                    <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-xs font-semibold transition-all">
                        Lihat Detail Laporan
                    </button>
                </div>

                <div class="bg-[#D9D9D9] p-5 rounded-lg flex flex-row justify-between items-center shadow-sm">
                    <div class="flex flex-col">
                        <h3 class="text-lg font-bold text-black">Laporan: Tawuran Moment</h3>
                        <p class="text-sm text-gray-700 mt-1">Status: Sudah selesai</p>
                        <p class="text-sm text-gray-700">Waktu Pelaporan:</p>
                    </div>
                    <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-xs font-semibold transition-all">
                        Lihat Detail Laporan
                    </button>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white w-full max-w-sm py-3 rounded-xl font-bold text-sm shadow-md transition-all">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>

        <div class="w-full mx-auto px-4 md:px-10 mt-16 font-['Poppins']">
            <h2 class="text-2xl md:text-3xl font-bold text-black tracking-tight mb-6">
                Laporan Buronan Ditemukan
            </h2>

            <div class="flex flex-row items-end justify-between gap-6 w-full mb-8">
                <div class="flex-1">
                    <input type="text" placeholder="Cari:" 
                           class="w-full rounded-lg px-6 py-2.5 border border-gray-100 shadow-[0px_4px_12px_rgba(0,0,0,0.1)] focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm font-medium">
                </div>

                <div class="flex flex-col items-start min-w-[150px] md:min-w-[200px]">
                    <label class="text-[11px] md:text-xs font-bold text-black mb-1 ml-1">Sort by:</label>
                    <div class="relative w-full">
                        <div class="w-full bg-white border border-gray-100 rounded-md px-4 py-2 h-[42px] shadow-[0px_4px_12px_rgba(0,0,0,0.1)] flex items-center justify-between">
                            <span class="text-xs text-gray-400 font-medium italic">Jenis Laporan</span>
                            <svg class="fill-current h-4 w-4 text-gray-400" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#D9D9D9] p-6 rounded-lg flex flex-row justify-between items-center shadow-sm">
                <div class="flex flex-col">
                    <h3 class="text-lg md:text-xl font-bold text-black">Buronan Ditemukan: Krishna Ardi</h3>
                    <p class="text-sm md:text-base text-gray-800 mt-2 font-medium">Waktu ditemukan: 21 Januari 2030</p>
                    <p class="text-sm md:text-base text-gray-800 font-medium">Tempat ditemukan: Patung Macan</p>
                </div>
                <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg text-xs md:text-sm font-bold shadow-md transition-all whitespace-nowrap ml-4">
                    Lihat Detail Laporan
                </button>
            </div>

            <div class="flex justify-center mt-10">
                <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white w-full max-w-sm py-3 rounded-xl font-bold text-sm shadow-lg transition-all transform hover:scale-[1.02]">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>

        <div class="w-full mx-auto px-4 md:px-10 mt-20 mb-20 font-['Poppins']">
            <div class="flex flex-col items-center mb-12">
                <h2 class="relative text-2xl md:text-3xl font-extrabold text-black tracking-widest text-center">
                    Berita Terkini
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-[150%] md:w-[300px] h-[1px] bg-black opacity-30"></div>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-daftar-artikel 
                    image="{{ asset('assets/patungmacan.png') }}"
                    title="Berita Keamanan di Sekitar Patung Macan"
                    author="Admin Polisi"
                    content="Terjadi tindak kriminal di jalan patung macan yang melibatkan beberapa oknum..."
                    url="#"
                />

                <x-daftar-artikel 
                    image="{{ asset('assets/kejahatan.png') }}"
                    title="Daerah Rawan Kejahatan Berada di sekitar Denpasar!"
                    author="Admin Polisi"
                    content="Pihak kepolisian telah menandai suatu kawasan di sekitar denpasar menjadi kawasan rawan kejahatan..."
                    url="#"
                />

                <x-daftar-artikel 
                    image="{{ asset('assets/beladiri.png') }}"
                    title="Peningkatan Patroli Malam di Area Publik"
                    author="Admin Polisi"
                    content="Guna menjaga kondusivitas, tim gabungan mulai rutin melakukan patroli di jam-jam rawan..."
                    url="#"
                />
            </div>

            <div class="flex justify-center mt-12">
                <button class="bg-[#2B6FFF] hover:bg-blue-700 text-white w-full max-w-sm py-3 rounded-xl font-bold text-sm shadow-lg transition-all">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>
    </main>
</main>
@endsection