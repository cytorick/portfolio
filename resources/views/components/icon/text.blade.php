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


{{-- HEROICON: text --}}
<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
</svg>
