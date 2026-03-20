@props(['variant', 'href' => '#'])

<a href="{{ $href ?? '#' }}"
{{  $attributes->class ([
    'rounded-md border border-blue hover:blue-200 bg-blue-600 hover:bg-blue-400',
    ' px-1.5 lg:px-3 py-1.5 lg:py-2 text-white' => $variant == 'generalUse',
    'px-3 py-2 md:px-4.5 md:py-3.5 md:text-xl' => $variant == 'profileA',
    'px-1.5 lg:px-3 py-1.5 lg:py-2 bg-white text-blue-600 border border-blue-600 hover:text-white' => $variant == 'transpar'
]) }}
>
{{ $slot }}
</a>