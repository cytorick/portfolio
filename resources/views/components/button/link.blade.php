@props([
    'type' => 'button',
    'large' => false,
    'small' => false,
    'disabled' => false,
    'color' => 'indigo',
])

@php
    
    // Basses classes, not depending on state.
    $baseClasses = 'font-medium focus:outline-none focus:underline transition duration-150 ease-in-out';

    // State classes.
    $stateClasses = $disabled
        ? ' text-gray-400 cursor-not-allowed'
        : ' text-' . $color . '-500 hover:text-' . $color . '-700';

    // Size classes. Large prevails over small.
    $sizeClasses = $large
        ? ' px-4 py-3 text-base leading-5'          // Large size
        : ($small
            ? ' px-2 py-1 text-xs leading-4'        // Small size
            : ' px-3 py-2 text-sm leading-4');      // Default size

    // Merge all segment classes.
    $mergedClasses = $baseClasses . $stateClasses . $sizeClasses;

@endphp

<button type="{{ $type }}" {{ $attributes->merge([ 'class' => $mergedClasses ]) }} @if($disabled) disabled @endif>
    {{ $slot }}
</button>
