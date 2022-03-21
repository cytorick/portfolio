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


<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge([ 'class' =>  $mergedClasses ]) }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
	<path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
</svg>
