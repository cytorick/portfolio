@props([
    'small' => false,
    'color' => 'gray',
])


@php

    // Base classes.
    $baseClasses = 'self-center flex-shrink-0 inline ml-0.5';

    // Color classes.
    $colorClasses = ' text-' . $color . '-400';

    // Size classes.
    $sizeClasses = $small
        ? ' h-4 w-4'
        : ' h-5 w-5';

    // Merged classes.
    $mergedClasses = $baseClasses . $colorClasses . $sizeClasses

@endphp


{{-- HEROICON: document-text --}}
<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
</svg>
