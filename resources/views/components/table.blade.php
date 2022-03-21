@props([
    'shadowless' => false,
    'squared' => false,
])


@php

    $baseClasses = 'align-middle min-w-full text-left';

    $squaredClasses = $squared
        ? ''
        : ' overflow-x-auto overflow-hidden sm:rounded-lg';

    $shadowClasses = $shadowless
        ? ''
        : ' shadow';

    $mergedClasses = $baseClasses . $squaredClasses . $shadowClasses;

@endphp


<div class="{{ $mergedClasses }}">
    <table class="min-w-full divide-y divide-cool-gray-200">

        @isset ($head)
            <thead>
                <tr>
                    {{ $head }}
                </tr>
            </thead>
            @endisset

        {{-- <tbody class="bg-white divide-y divide-cool-gray-200"> --}}
            {{ $body }}
        {{-- </tbody> --}}
        <tfoot>
            {{ $foot ?? null }}
        </tfoot>

    </table>
</div>
