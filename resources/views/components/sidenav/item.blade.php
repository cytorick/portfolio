@props([
    'route' => false,
    'svg' => false,
    'title' => false,
    'active' => false,
])

@php
    $classes = ($active ?? false)
                ? 'text-gray-100 bg-green-600 text-gray-900 group flex items-center px-2 py-2 text-md font-bold rounded-md'
                : 'text-gray-200 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-md font-semibold rounded-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
    {{ $slot }}
</a>