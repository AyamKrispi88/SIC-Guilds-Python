<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" bg-[#E0E0E0]">
    <x-nav-bar></x-nav-bar>
<main>
    <section class="gambar relative w-full lg:w-full h-[118px] lg:h-[321px] text-white bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/polkisbaris.png') }}')">
        <div class="absolute inset-0 bg-gradient-to-r from-[#471F00]/80 to-[#000080]/80"></div>
         <div class=" relative py-7 px-10 lg:px-20 lg:py-28">
        <h1 class=" font-bold text-2xl lg:text-[64px] leading-tight">SELAMAT DATANG <br> DI LAPOR PAK!!</h1>
        <p class=" text-[10px] lg:text-base">BANTUG: Berwibawa,  Amanah, Tangguh, Unggul, Gesit </p>
        </div>
    </section>
    <section class=" flex flex-col w-full h-auto pt-3 pb-5 px-5 lg:p-5 border shadow-sm">
    <section class="penjelasan relative flex flex-col lg:flex-row">
        <img class=" hidden lg:block" src="assets/hero.png" alt="">
        <div class=" flex flex-col pb-8 lg:py-8 px-5 text-black gap-2">
            <h1 class=" text-5xl">
                Apa Itu <span class=" font-bold">LAPOR PAK?</span>
            </h1>
            <p class=" text-base">LAPOR PAK merupakan sebuah platform website yang bekerja sama dengan Kepolisian Negara Republik Indonesia untuk membantu masyarakat dalam melaporkan berbagai kejadian di lingkungan sekitar.
                Melalui LaporPak, masyarakat dapat dengan mudah melaporkan kejadian kriminal, melaporkan orang hilang, serta memberikan informasi terkait keberadaan buronan berbahaya. Dengan adanya platform ini, diharapkan partisipasi masyarakat dalam menjaga keamanan dan ketertiban dapat semakin meningkat.</p>
        </div>
    </section>
    <div class=" flex self-end gap-3">
        <x-button href="" variant="generalUse"> Mulai Buat Laporan </x-button>
        <x-button href="" variant="transpar"> Lihat Daftar Laporanmu </x-button>
    </div>
    </section>
    <section class="berita bg-white p-8 lg:p-10 flex flex-col lg:flex-col">
        <div>
            <h1 class=" text-black text-4xl text-center font-bold">Berita Terkini</h1>
        </div>
    <article class="grid grid-cols-1 lg:grid-cols-3 px-[88px] py-[126px] gap-[64px] ">
        <p>anjay</p>
        <p>anjay</p>
        <p>anjay</p>
        <p>anjay</p>
    </article>
    <div class=" w-full gap-6 md:w-full flex justify-center">
    <x-button href="" variant="generalUse">Eksplor Lebih Banyak</x-button>
    </div>
    </section>
    <section class="polkis-terdekat w-full h-auto p-8 flex flex-col lg:flex-col items-center gap-8">
        <h1 class=" font-bold text-3xl lg:text-[40px]">Kantor Polisi Terdekat</h1>
        <img src="assets/maps.png" alt="">
    </section>
</main>

    </div>
    <x-footer> </x-footer>
</body>
</html>