@props([
    'createdAt' => false,
])

<div class="mt-6 flex items-center">
    <div class="flex-shrink-0">
        <span class="sr-only">Rick Visser</span>
        <img class="h-10 w-10 rounded-full"
             src="{{ asset('img/rick-standing.png') }}"
             alt="">
    </div>
    <div class="ml-3">
        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">
            Rick Visser
        </p>
        <div class="flex space-x-1 text-sm text-gray-500">
            <time datetime="2020-03-16"> {{ $createdAt }}</time>
            {{ $slot}}
        </div>
    </div>
</div>
