@props([
    'small' => false,
    'color' => 'gray',
    'marginLeft' => false,
])


@php

    // Base classes.
    $baseClasses = 'self-center flex-shrink-0 inline';

    // Alignment classes.
    $alignmentClasses = $marginLeft ? ' ml-0.5' : '';

    // Color classes.
    $colorClasses = ' text-' . $color . '-400';

    // Size classes.
    $sizeClasses = $small
        ? ' h-4 w-4'
        : ' h-5 w-5';

    // Merged classes.
    $mergedClasses = $baseClasses . $alignmentClasses . $colorClasses . $sizeClasses

@endphp


{{-- HEROICON: photograph --}}
<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
