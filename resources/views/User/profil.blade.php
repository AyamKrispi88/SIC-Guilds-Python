<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
@vite(['resources/css/app.css', 'resources/js/home.js'])
@include('FontDLainnya.Font')
<link rel="icon" href="{{ asset('assets/logo1.png') }}">
@vite('resources/js/editprofileUser.js')
</head>

<body class="bg-gray-100">

<!-- HEADER -->
<header class="flex justify-end items-center p-5">
    <p class="text-sm mr-3">User hihi</p>
    <img src="assets/fotoprofil.png"
    class="w-10 h-10 rounded-full object-cover">
</header>



<div class="isikontenduanya flex flex-col gap-14 px-10 justify-center">
   <section class=" w-full h-auto flex flex-row justify-center gap-20">
    <div class="">
        <img src="assets/fotoprofil.png"
             class="w-80 h-80 rounded-full object-cover">
    </div>

    <div class="bagiankanan w-[550px]">

        <!-- username-->
        <div class="mb-6">
            <p class="text-sm mb-1">Username</p>
            <div class="bg-white shadow-md px-4 py-3">
                User Hihi
            </div>
        </div>

        <!-- NIK -->
        <div class="mb-6">
            <p class="text-sm mb-1">Nomor Induk Kependudukan</p>
            <div class="bg-white shadow-md px-4 py-3">
                90023485798221110
            </div>
        </div>

        <!-- Email -->
        <div class="mb-6">
            <p class="text-sm mb-1">Email</p>
            <div class="bg-white shadow-md px-4 py-3">
                rania@gmail.com
            </div>
        </div>

        <!-- nama -->
        <div class="mb-6">
            <p class="text-sm mb-1">Nama Lengkap</p>
            <div class="bg-white shadow-md px-4 py-3">
                ida ayu rania ninggrat
            </div>
        </div>

        <!-- tanggal lahir -->
        <div class="mb-6">
            <p class="text-sm mb-1">Tempat/Tanggal Lahir</p>
            <div class="bg-white shadow-md px-4 py-3">
                jakarta / 14 agustus 1945
            </div>
        </div>

        <!-- Password -->
        <div class="mb-8">
            <p class="text-sm mb-1">Password</p>
            <div class="bg-white shadow-md px-4 py-3">
                kominfo123
            </div>
        </div>

        <x-button class="trigger-edit" variant="generalUse">Edit Profil</x-button>
    </div>
</section>

        <div class="edit-profil hidden flex flex-col md:flex-row items-center md:items-start gap-12 pt-10 border-t border-gray-50">
            <div class="w-full md:w-2/5 flex justify-center">
                <img src="{{ asset('assets/profileadmin.png') }}" 
                     class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-2xl border-8 border-white opacity-80">
            </div>

            <div class="w-full md:w-3/5 space-y-6">
                <div>
                    <label class="text-black text-lg font-normal">Username</label>
                    <input type="text" placeholder="Hihi!!" class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom outline-none bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Email</label>
                    <input type="text" placeholder="Edi@gmail.com" class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom outline-none bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Nama Lengkap</label>
                    <input type="text" placeholder="Thomas Alva Edisound" class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom outline-none bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Password</label>
                    <input type="password" placeholder="admin123" class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom outline-none bg-white">
                </div>
                <button class="w-full bg-[#4A76FD] text-white text-xl font-bold py-5 rounded-2xl shadow-lg mt-4 transition-transform active:scale-95">
                    Simpan Perubahan
                </button>
            </div>
        </div>

    </div>

</body>
</html>