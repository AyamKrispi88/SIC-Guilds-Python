<a href="{{ $href ?? '#' }}"
@class([
    'rounded-md border border-blue hover:blue-200 bg-blue-600 hover:bg-blue-400 text-white',
    'px-3 py-2' => $variant == 'profileU',
    'px-3 py-2 md:px-4.5 md:py-3.5 md:text-xl' => $variant == 'profileA',
    
])
>
{{ $slot }}
</a>