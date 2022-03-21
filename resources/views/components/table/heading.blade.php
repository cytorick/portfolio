@props([
    'padding' => null,
])


@php

    $classes = ($padding ?? false)
        ? 'bg-gray-800 dark:bg-gray-800' . $padding
        : 'px-4 py-3 bg-gray-50';

@endphp


<th {{ $attributes->merge(['class' => $classes])->only('class') }}>
    <span class="text-xs leading-4 font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
        {{ $slot }}
    </span>
</th>
