@props([
    'image', 
    'title', 
    'content', 
])

<div class="w-[144.18px] md:w-[243px] rounded overflow-hidden shadow-md border border-gray-100 bg-white flex flex-col h-full text-center">
    <img class="w-[144.18px] h-[204.12px] md:w-[243px] md:h-[345px] object-cover" src="{{ $image }}" alt="{{ $title }}">

    <div class="p-2 flex flex-col flex-grow">
        <h2 class="text-[16px] md:text-[24px] font-bold text-gray-900 mb-2 leading-tight">
            {{ $title }}
        </h2>
    
        <p class="text-gray-600 text-sm md:text-base mb-4 flex-grow">
            {{ Str::limit($content, 120) }} </p>

        <x-button variant="generalUse" class="bg-blue-500 hover:bg-blue-700 text-white font-bold md:py-2 md:px-4 px-3 py-1 rounded text-center">
            <span class="font-medium">Lihat Detail</span>
        </x-button>
    </div>
</div>