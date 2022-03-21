@props([
    'id' => \Illuminate\Support\Str::random(4),
    'large' => false,
])


@php
    
    // Size classes.
    $sizeClassesLine = $large ? 'w-14 h-8' : 'w-11 h-6';
    $sizeClassesDot = $large ? 'left-1 top-1 w-6 h-6' : 'left-0.5 top-0.5 w-5 h-5';

@endphp


<div class="flex items-center w-full">
    <label for="{{ $id }}" class="flex items-center cursor-pointer">
        
       {{-- SWITCH TOGGLE --}}
        <div class="relative">

            {{-- INPUT FOR DATA --}}
            <input type="checkbox" id="{{ $id }}" {{ $attributes->wire('model') }} class="sr-only">
        
            {{-- LINE --}}
            <div class="line block bg-gray-200 {{ $sizeClassesLine }} rounded-full"></div>

            {{-- DOT --}}
            <div class="dot absolute {{ $sizeClassesDot }} bg-white rounded-full transition"></div>

        </div>

        {{-- LABEL --}}
        <div class="ml-3 text-gray-600">
            {{ $slot }}
        </div>

    </label>
</div>


@push('stylesheets-head-after')
    <style>
        input:checked~.dot{transform:translateX(100%);}input:checked~.line{background-color:#31a34a}
    </style>
@endpush
