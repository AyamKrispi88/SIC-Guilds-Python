

<div class="max-w-sm rounded-xl overflow-hidden shadow-md border border-gray-100 bg-white flex flex-col h-full">
    <img class="w-full h-auto object-cover" src="{{ asset($img) }}" alt="{{ $title }}">

    <div class="p-5 flex flex-col flex-grow">
        <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 leading-tight">
            {{ $title }}
        </h2>
        
        <p class="text-sm text-gray-500 mb-3">
            {{ $author }}
        </p>

        <p class="text-gray-600 text-sm md:text-base mb-4 flex-grow">
            {{ Str::limit($content, 120) }} </p>

        <a href="{{ $url }}" class="text-blue-500 font-semibold hover:text-blue-700 inline-flex items-center transition-colors">
            Baca lebih lanjut <span class="ml-1">→</span>
        </a>
    </div>
</div>