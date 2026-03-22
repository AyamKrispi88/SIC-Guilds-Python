@props(['extraClass' => 'bg-blue-600 hover:bg-blue-700'])            
            
<div {{ $attributes->merge(['class' => 'relative']) }}>
    <select class="appearance-none border border-white {{ $extraClass }} text-white font-bold py-2 px-4 rounded-lg w-full cursor-pointer focus:outline-none">
        <option selected disabled>Status Laporan</option>
        <option value="selesai">Sudah diselesaikan</option>
        <option value="proses">Masih dalam proses</option>
        <option value="batal">Dibatalkan</option>
        {{ $slot }}
    </select>
    
    <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
</div>