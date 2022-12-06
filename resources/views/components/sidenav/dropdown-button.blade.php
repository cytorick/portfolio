@php
    $data = ($active ?? false)
                ? '{ open: true }'
                : '{ open: false }';
@endphp

<div class="relative w-full" {{ $attributes->merge(['x-data' => $data]) }} @click.away="open = false"
     @close.stop="open = false">
    <div @click="open = ! open">
        <span class="dark:text-gray-200 hover:dark:bg-gray-800 hover:text-green-600 group flex items-center px-2 py-2 text-md font-semibold rounded-md cursor-pointer">
        {{ $trigger }}
        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"/>
        </svg>
        </span>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         style="display: none;"
         @click="open = false">
        <div>
            {{ $content }}
        </div>
    </div>
</div>
