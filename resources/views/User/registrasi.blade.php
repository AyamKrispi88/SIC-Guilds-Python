@extends('User.pakemAkun')
@section('title', 'Registrasi')
@section('content')
<main>
    <section class=" flex flex-col lg:flex-row w-full h-full lg:w-full lg:h-full p-10 justify-center gap-7">
        <div>
        <img class=" lg:size-72 lg:pt-5" src="assets/regist-foto.png" alt="">
    </div>
    <div class=" flex flex-col lg:flex-col">
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Username</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Username">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Nomor Induk Kependudukan</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="16 digit angka">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Email</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="paan@gmail.com">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Nama Lengkap</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Nama lengkap....">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Tempat/Tanggal Lahir</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Tempat/dd - mm - yyyy">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Password</h4>
            <input class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Minimal 8 digit password">
        </div>
    </div>
    </section>
    <section class=" flex flex-col lg:flex-col w-full h-auto gap-3 items-center">
        <div>
            <x-button variant='generalUse' href="">Registrasi</x-button>
        </div>
        <p class=" text-blue-500">Sudah mempunyai akun? <a href="/user-login">Login..</a></p>
    </section>
</main>
@endsection