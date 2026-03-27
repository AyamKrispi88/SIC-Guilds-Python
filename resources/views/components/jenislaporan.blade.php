@vite(['resources/js/DropdownStatusLaporan.js'])

<div class="dropdown-statuslaporan-wrapper relative">
    <div class="dropdown-statuslaporan-trigger block w-full bg-white p-3 md:p-4 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700 cursor-pointer">
        <span class="selected-statuslaporan-text text-black gap-5 flex items-center">
            Pilih Laporan
        </span>
        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    </div>
    <div class="dropdown-statuslaporan-menu hidden origin-top-right absolute right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-white ring-opacity-5 focus:outline-none z-10">
        <div role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <p class="statuslaporan-item block px-4 py-2 text-sm text-white hover:bg-blue-600 border border-white rounded bg-blue-800" role="menuitem">Laporan Kriminal</p>
            <p class="statuslaporan-item block px-4 py-2 text-sm text-white hover:bg-blue-600 border border-white rounded bg-blue-800" role="menuitem">Hambatan Lalu Lintas</p>
            <a href="#" class="statuslaporan-item block px-4 py-2 text-sm text-white hover:bg-blue-600 border border-white rounded bg-blue-800" role="menuitem">Laporan Orang Hilang</a>
        </div>
    </div>
</div>
    