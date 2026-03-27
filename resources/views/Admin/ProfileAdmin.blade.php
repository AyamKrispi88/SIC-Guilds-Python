<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('assets/logo2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Admin</title>
    @vite(['resources/css/app.css', 'resources/js/home.js'])
    @include('FontDLainnya.Font')
    @vite('resources/js/EditProfile.js')
    <style>
        body { font-family: 'Poppins', sans-serif; }
        
        .input-shadow-bottom {
            border-bottom: 2px solid #e5e7eb;
            box-shadow: 0 5px 3px -3px rgba(0, 0, 0, 0.2);
            border-top: none;
          
        }

        .input-shadow-bottom:focus {
            outline: none;
            border-bottom-color: #3b82f6; 
            box-shadow: 0 5px 4px -3px rgba(59, 130, 246, 0.3); 
        }

        ::placeholder {
            color: #111827 !important; 
            opacity: 1;
            font-weight: 300;
        }
    </style>
</head>
<body class="bg-gray-100 p-3 md:p-6">

    <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-md p-8 md:p-12">
        
        <div class="flex justify-end items-center gap-3 mb-10 w-full">
            <span class="font-normal text-gray-900 text-xl">Admin123</span>
            <img src="{{ asset('assets/profileadmin.png') }}" class="w-12 h-12 rounded-full border shadow-sm">
            <button class="text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
            </button>
        </div>

        <div class="flex flex-col md:flex-row items-center md:items-start gap-12 pb-20">
            <div class="w-full md:w-2/5 flex justify-center">
                <img src="{{ asset('assets/profileadmin.png') }}" 
                     class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-2xl border-8 border-white">
            </div>

            <div class="w-full md:w-3/5 space-y-6">
                <div>
                    <label class="text-black text-lg font-normal">Username</label>
                    <input type="text" value="Hihi" readonly class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Email</label>
                    <input type="text" value="Edi@gmail.com" readonly class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Nama Lengkap</label>
                    <input type="text" value="Thomas Alva Edisound" readonly class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom bg-white">
                </div>
                <div>
                    <label class="text-black text-lg font-normal">Password</label>
                    <input type="password" value="......" readonly class="w-full px-4 py-3 text-xl font-light text-gray-900 input-shadow-bottom bg-white">
                </div>
                <x-button variant="generalUse" trigger-edit class="trigger-edit w-full font-bold py-5 rounded-2xl shadow-lg mt-4 transition-transform active:scale-95">
                    Edit Profile
                </x-button>
            </div>
        </div>

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