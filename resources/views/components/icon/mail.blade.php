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
    $mergedClasses = $baseClasses . $colorClasses . $sizeClasses;

@endphp


{{-- HEROICON: mail --}}
<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>
