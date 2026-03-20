<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- HEADER -->
<header class="flex justify-end items-center p-5">
    <p class="text-sm mr-3">User hihi</p>
    <img src="assets/fotoprofil.png"
         class="w-10 h-10 rounded-full object-cover">
</header>



<div class="isikontenduanya flex gap-14 px-10 justify-center">

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

        <x-button variant="generalUse">Edit Profil</x-button>

</div>

</body>
</html>