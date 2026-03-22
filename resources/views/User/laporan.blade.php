@extends('User.PakemUser')
@section('Laporan')
@section('konten')
<main class=" w-full h-full lg:w-full lg:h-full">
    <section class=" w-full h-auto flex flex-col lg:flex-col px-10 items-center">
        <div class=" flex flex-col lg:flex-row w-full h-full lg:w-full lg:h-full gap-5 lg:gap-10 lg:justify-center pt-20">
        <div class=" flex flex-col lg:flex-col w-full h-full lg:w-[636px] lg:h-full gap-2">
        <div class=" flex flex-col lg:flex-col">
            <h2>Laporan:</h2>
            <p>Status terkini: Sudah ditangani</p>
        </div>
            <div class=" flex flex-col lg:flex-col ">
                <h3>Jenis Laporan</h3>
                <input class="  w-full lg:w-full border border-black px-1 py-1" type="text" placeholder="Jenis Laporan">
            </div>
            <div class=" flex flex-col lg:flex-col ">
                <h3>Tanggal Kejadian</h3>
                <input class="  w-full lg:w-full border border-black px-1 py-1" type="text" placeholder="Tanggal Kejadian">
            </div>
            <div class=" flex flex-col lg:flex-col ">
                <h3>Lokasi Kejadian</h3>
                <input class="  w-full lg:w-full border border-black px-1 py-1" type="text" placeholder="Tanggal Kejadian">
            </div>
        </div>
        <img class=" size-60 lg:size-70" src="assets/regist-foto.png" alt="">
        </div>
        <div class=" w-full lg:w-240">
                <h3>Jenis Laporan</h3>
                <input class="  w-full lg:w-full border border-black px-1 pt-1 pb-40" type="text" placeholder="Jenis Laporan">
            </div>
        <div class=" w-full flex p-10 justify-center">
            <x-button class=" inline-block" variant="generalUse">Buat Laporan Orang Hilang</x-button>
        </div>
    </section>
</main>
@endsection