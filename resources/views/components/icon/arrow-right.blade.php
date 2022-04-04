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


<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge([ 'class' => $mergedClasses ]) }} fill="none" viewBox="0 0 24 24" stroke="currentColor">
	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
</svg>
