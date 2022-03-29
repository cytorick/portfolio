@props([
    'shadow' => false,
    'large' => false,
])

@php

    // Basses classes, not depending on state.
    $baseClasses = 'form-checkbox border-gray-300 block transition duration-150 ease-in-out sm:leading-5 mr-2 dark:bg-gray-700';

    // Size classes.
    $sizeClasses = $large
        ? ' text-base'
        : ' text-sm';

    // Merge all segment classes.
    $mergedClasses = $baseClasses;

@endphp

<div class="flex items-center rounded-md {{ $shadow ? 'shadow-sm' : null }}">
    <input type="checkbox" {{ $attributes->merge([ 'class' => $mergedClasses ]) }} />
    <span class="{{ $sizeClasses }}">{{ $slot }}</span>
</div>
