@props(['active'])

@php
$classes = $active 
            ? 'text-white bg-black rounded-full p-1'
            : 'text-black hover:bg-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>