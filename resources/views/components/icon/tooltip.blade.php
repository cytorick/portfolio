@props([
    'tooltip' => '',
])


<div x-data="{ open: false }" class="flex text-xs">

    <div style="display: none;" x-show="open" class="rounded shadow-lg p-1 text-white bg-gray-900 z-index-50 absolute -mt-8">
        {{ $tooltip }}
    </div>

    <span {{ $attributes }} @mouseover="{ open = true }" @mouseover.away="{ open = false }" {{ $attributes->merge([ 'class' => 'pl-1 hover:opacity-50' ]) }} >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="gray">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </span>
</div>