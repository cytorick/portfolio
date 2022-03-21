@props([
    'image' => false,
    'subTitle' => false,
    'title' => false,
    'summary' => false,
    'madeBy' => false,
])

<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover"
             src="{{ asset('img/'. $image) }}"
             alt="">
    </div>
    <div class="flex-1 bg-gray-200 dark:bg-gray-900 p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-error">
                {{ $subTitle }}
            </p>
            <a href="#" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $title }}</p>
                <p class="mt-3 text-base text-gray-500 dark:text-gray-300">{{ $summary }}</p>
            </a>
        </div>
        {{ $slot }}
    </div>
</div>