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


{{-- HEROICON: clock --}}
<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
