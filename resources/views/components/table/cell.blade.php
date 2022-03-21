@props([
    'padding',
    'archived' => false,
])


@php

    $classes = ($padding ?? false)
        ? 'whitespace-no-wrap text-sm leading-5 text-cool-gray-900 dark:text-gray-200' . $padding
        : 'whitespace-no-wrap text-sm leading-5 text-cool-gray-900 dark:text-gray-200 px-4 py-3' . $archived;

@endphp


<td {{ $attributes->merge([ 'class' => $classes ]) }}>
    {{ $slot }}
</td>
