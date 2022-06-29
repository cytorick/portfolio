@props([ 'active' ])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-green-600 text-sm font-medium leading-5 text-gray-300 focus:outline-none focus:border-red-400 transition'
                : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp


<button type="button" @click="isOpen = !isOpen" {{ $attributes->merge([ 'class' => $classes ]) }} aria-expanded="false">

	<span>{{ $slot }}</span>

	<x-icon.chevron-down />

</button>
