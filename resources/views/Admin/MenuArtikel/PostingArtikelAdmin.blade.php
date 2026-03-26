@extends('Admin.PakemAdmin')
@section('title', 'Detail Artikel Admin')

@section('konten')
<main class="bg-white min-h-screen pb-20">
    <div class="w-full h-48 md:h-64 bg-blue-900 relative overflow-hidden">
        <img src="{{ asset('assets/artikelpage.png') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-60">
        
        <div class="relative flex flex-col items-center justify-center h-full">
            <h1 class="text-transparent border-y-2 border-white py-2 px-6 
                       text-3xl md:text-6xl font-black tracking-widest
                       [text-stroke:1.5px_white] md:[text-stroke:2px_white] 
                       [-webkit-text-stroke:1.5px_white] md:[-webkit-text-stroke:2px_white]
                       antialiased">
                BERITA TERKINI
            </h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 sm:px-12 md:px-14 mt-14 mb-24 font-poppins">
        
        <div class="mb-10">
            <h1 class="text-2xl md:text-3xl font-bold text-black text-center md:text-left">
                Posting Artikel
            </h1>
        </div>

        <div class="flex flex-col md:flex-row gap-8 lg:gap-12 text-left">
            <div class="w-full md:w-1/3 flex justify-center md:block">
                <img src="{{ asset('assets/regist-foto.png') }}" alt="Preview" 
                     class="w-full max-w-sm md:max-w-none h-auto md:aspect-square object-cover rounded-md shadow-lg border border-gray-100">
            </div>

            <div class="w-full md:w-2/3 space-y-6">
                <div>
                    <label class="block text-lg font-bold text-black mb-2">Nama Artikel</label>
                    <input type="text" value="Tuliskan nama artikel" 
                        class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
                </div>
                <div>
                    <label class="block text-lg font-bold text-black mb-2">Sumber Website Artikel</label>
                    <input type="text" value="Tuliskan sumber artikel" 
                        class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
                </div>
                <div>
                    <label class="block text-lg font-bold text-black mb-2">Link Artikel Website</label>
                    <input type="text" value="Tuliskan link artikel disini" 
                        class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
                </div>
            </div>
        </div>

        <div class="mt-10 text-left">
            <label class="block text-lg font-bold text-black mb-2">Deskripsi Singkat Artikel</label>
            <textarea rows="6" 
                class="w-full p-5 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:ring-1 focus:ring-blue-400 text-gray-600 italic leading-relaxed text-sm md:text-base">Tuliskan deskripsi singkat artikel</textarea>
        </div>

        <div class="flex justify-center mt-12">
            <button class="w-full md:w-auto min-w-[250px] bg-[#4477FF] text-white px-10 py-3.5 rounded-lg font-light shadow-lg hover:bg-blue-700 hover:scale-105 transition-all duration-200 tracking-wider">
                Posting Artikel
            </button>
        </div>

    </div>
</main>       
@endsection