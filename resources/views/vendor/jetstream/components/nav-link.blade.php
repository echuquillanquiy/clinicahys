@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 border-b-2 border-white text-md font-medium leading-2 text-center text-white focus:outline-none focus:border-white bg-white bg-opacity-25 transition'
            : 'inline-flex items-center px-2 pt-1 border-b-2 border-transparent text-md font-medium leading-2 text-white text-center hover:border-white hover:bg-white hover:bg-opacity-25 focus:outline-none focus:border-white transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
