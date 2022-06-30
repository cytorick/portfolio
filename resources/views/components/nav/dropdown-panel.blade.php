<div x-show="isOpen"
	style="display: none;"
	x-transition:enter="transition ease-out duration-100 transform"
	x-transition:enter-start="opacity-0 scale-95"
	x-transition:enter-end="opacity-100 scale-100"
	x-transition:leave="transition ease-in duration-75 transform"
	x-transition:leave-start="opacity-100 scale-100"
 	x-transition:leave-end="opacity-0 scale-95"
	class="absolute z-10 transform mt-20 px-2 w-screen max-w-xs sm:px-0">

    <div class="rounded-lg shadow-2xl ring-1 ring-green-600 ring-opacity-5 overflow-hidden">
        <ul class="relative grid gap-6 bg-white dark:bg-gray-800 px-5 py-6 sm:gap-8 sm:p-8">

        	{{ $slot }}

        </ul>
    </div>

</div>
