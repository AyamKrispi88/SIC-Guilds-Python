@extends('User.PakemUser')
@section('title', 'Notifikasi Sistem')
@section('konten')
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
@endsection