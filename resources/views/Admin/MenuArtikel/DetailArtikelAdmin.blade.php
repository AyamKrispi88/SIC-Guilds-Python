@extends('Admin.PakemAdmin')
@section('title', 'Detail Artikel Admin')

@section('konten')
<main class="bg-white min-h-screen pb-20 font-poppins">
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

 <div class="max-w-7xl mx-auto px-8 sm:px-12 md:px-14 mt-14 mb-24">
    
    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-black text-center md:text-left">
            Postingan Artikel
        </h1>
        
        <div class="hidden md:flex gap-4">
            <button class="bg-[#4477FF] text-white px-7 py-2.5 rounded-lg font-medium shadow-md hover:bg-blue-700">
                Perbarui Artikel
            </button>
            <button class="border-2 border-[#4477FF] text-[#4477FF] px-7 py-2.5 rounded-lg font-medium hover:bg-blue-50">
                Hapus Artikel
            </button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-8 lg:gap-12 text-left">
        <div class="w-full md:w-1/3 flex justify-center md:block">
            <img src="{{ asset('assets/angsa.png') }}" alt="Preview" 
                 class="w-full max-w-sm md:max-w-none h-auto md:aspect-square object-cover rounded-md shadow-lg border border-gray-100">
        </div>

        <div class="w-full md:w-2/3 space-y-6">
            <div>
                <label class="block text-lg font-bold text-black mb-2">Nama Artikel</label>
                <input type="text" value="Peace was never an option for criminal" 
                    class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
            </div>
            <div>
                <label class="block text-lg font-bold text-black mb-2">Sumber Website Artikel</label>
                <input type="text" value="Wiwiwi.com" 
                    class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
            </div>
            <div>
                <label class="block text-lg font-bold text-black mb-2">Link Artikel Website</label>
                <input type="text" value="https://wiwiwi.com" 
                    class="w-full p-3.5 md:p-4 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:border-blue-500 text-gray-800 text-sm md:text-base">
            </div>
        </div>
    </div>

    <div class="mt-10 text-left">
        <label class="block text-lg font-bold text-black mb-2">Deskripsi Singkat Artikel</label>
        <textarea rows="6" 
            class="w-full p-5 bg-white border-b-4 border-gray-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.07)] rounded-md focus:outline-none focus:ring-1 focus:ring-blue-400 text-gray-600 italic leading-relaxed text-sm md:text-base">artikel merupakan salah satu bentuk karya tulis yng diposting di internet.</textarea>
    </div>

    <div class="flex flex-col sm:flex-row justify-center items-center gap-3 mt-10 md:hidden">
        <button href="/admin-postingaratikel" class="w-full max-w-[300px] bg-[#4477FF] text-white px-7 py-3 rounded-lg font-medium shadow-md">
            Perbarui Artikel
        </button>
        <button class="w-full max-w-[300px] border-2 border-[#4477FF] text-[#4477FF] px-7 py-3 rounded-lg font-medium">
            Hapus Artikel
        </button>
    </div>

</div>






</main>       
@endsection