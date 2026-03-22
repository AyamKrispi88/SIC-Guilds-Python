<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/home.js'])
    @include('FontDLainnya.Font')
</head>
<body>
   <x-navbar></x-navbar>

   <div>
   <img src="{{ asset('assets/Notifikasi.png') }}" class="w-full">
   </div>

   <div class="text-center mt-10">
   <p class="font-bold text-3xl">Pemberitahuan Sistem: Laporan Anda Telah Diterima!</p>
   </div>

   <div class="flex justify-center mt-10">

    <div class="bg-white w-[1120px] p-8 rounded-lg shadow-md text-left mb-4">

        <p class="mb-4">Halo user hihi!</p>

        <p class="mb-4">
            Terima kasih sudah melaporkan kejadian yang kamu alami. Kami sedang dalam proses
            penyelidikan sekarang. Kami akan menghubungi kembali jika kasus sudah berhasil di-progress.
            Terima kasih telah melapor!
        </p>

        <p class="mt-6">
            – Sincerely, admin123
        </p>

    </div>

</div>



    <x-footer></x-footer>
</body>
</html>