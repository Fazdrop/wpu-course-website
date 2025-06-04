@props(['href', 'is_active' => false,'arriaCurrent' => false])

@php

    if($is_active ){
        $classes = 'bg-gray-900 text-white';
        $arriaCurrent = 'page';
    } else {
        $classes = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    }

@endphp

<a href={{ $href }} {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes,"arria-current" => $arriaCurrent]) }}>
    {{ $slot }}
</a>
