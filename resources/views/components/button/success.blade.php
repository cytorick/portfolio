@props([
	'type' => 'button',
	'large' => false,
	'small' => false,
	'shadow' => false,
	'fullWidth' => false,
	'disabled' => false,
])

@php
	
	// Basses classes, not depending on state.
	$baseClasses = 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2';

	// State classes.
	$stateClasses = $disabled
		? ' text-gray-400 bg-gray-200 cursor-default'
		: ' text-green-700 bg-green-100 hover:bg-green-200 focus:ring-green-500';

	// Size classes. Large prevails over small.
	$sizeClasses = $large
		? ' px-4 py-3 text-base leading-5'			// Large size
		: ($small
			? ' px-2 py-1 text-xs leading-4'		// Small size
			: ' px-3 py-2 text-sm leading-4');		// Default size

	// Classes needed in case of an add-on.
	$fullWidthClasses = $fullWidth
		? ' block text-center w-full'
		: ' inline-flex items-center';

	// Merge all segment classes.
	$mergedClasses = $baseClasses . $stateClasses . $sizeClasses . $fullWidthClasses;

@endphp

<button type="{{ $type }}" {{ $attributes->merge([ 'class' => $mergedClasses ]) }} @if($disabled) disabled @endif>
	{{ $slot }}
</button>
