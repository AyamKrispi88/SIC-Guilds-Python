@extends('User.pakemAkun')
@section('title', 'Registrasi')
@section('content')
<main>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <section class=" flex flex-col lg:flex-row w-full h-full lg:w-full lg:h-full p-10 justify-center gap-7">
        <div>
        <label class="flex flex-col items-center justify-center w-[350px] h-[350px] border-2 border-gray-300 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100 transition-all shadow-sm">
            <div class="flex flex-col items-center justify-center p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
            <circle cx="12" cy="13" r="4"></circle>
            s</svg>
                <p class="text-lg text-gray-600 font-semibold">Tambahkan foto profil</p>
            </div>
            <input type="file" name="foto_profil" class="hidden" accept="image/*" />
        </label>
    </div>
    <div class=" flex flex-col lg:flex-col">
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Username</h4>
            <input type='text' name='username' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Username">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Nomor Induk Kependudukan</h4>
            <input type='text' name='NIK' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="16 digit angka">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Email</h4>
            <input type='email' name='email' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="email" placeholder="paan@gmail.com">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Nama Lengkap</h4>
            <input type='text' name='nama_lengkap' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Nama lengkap....">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Tempat/Tanggal Lahir</h4>
            <input type='text' name='tempat_tanggal_lahir' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="text" placeholder="Tempat/dd - mm - yyyy">
        </div>
        <div class=" flex flex-col lg:flex-col">
            <h4 class=" font-poppins text-base">Password</h4>
            <input type='password' name='password' class="border-b border-black/25 shadow-md px-1 py-3 w-auto lg:w-96" type="password" placeholder="Minimal 8 digit password">
        </div>
    </div>
    </section>
    <section class=" flex flex-col lg:flex-col w-full h-auto gap-3 items-center">
        <div class="w-48 lg:w-96">
            <x-button type="submit" variant='generalUse' class="flex justify-center w-full lg:w-full">
                Registrasi
            </x-button>
        </div>
    </form>
        <p class=" text-blue-500 hover:underline"><a href="/">Sudah mempunyai akun? Login..</a></p>
    </section>
</main>
@endsection