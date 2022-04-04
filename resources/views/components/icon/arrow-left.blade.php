@props([
	'small' => false,
])


@php

	// Base classes.
	$baseClasses = 'self-center flex-shrink-0 inline ml-0.5';

	// Size classes.
	$sizeClasses = $small ? ' h-4 w-4' : ' h-5 w-5';

	// Merged classes.
	$mergedClasses = $baseClasses . $sizeClasses

@endphp


<svg xmlns="http://www.w3.org/2000/svg" class="{{ $mergedClasses }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
</svg>
