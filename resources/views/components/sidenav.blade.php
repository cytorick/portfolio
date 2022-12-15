<div x-show="open" class="relative z-40 md:hidden"
     x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
     aria-modal="true" style="display: none;">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
         class="fixed inset-0 bg-gray-600 bg-opacity-75" style="display: none;"></div>


    <div class="fixed inset-0 flex z-40">

        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             x-description="Off-canvas menu, show/hide based on off-canvas menu state."
             class="relative flex-1 flex flex-col max-w-xs w-full bg-white dark:bg-gray-900" @click.away="open = false"
             style="display: none;">

            <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                 x-description="Close button, show/hide based on off-canvas menu state."
                 class="absolute top-0 right-0 -mr-12 pt-2" style="display: none;">
                <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        @click="open = false">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-4">
                    <div class="flex items-center flex-shrink-0 px-4 pb-5 mx-auto">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                            <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                        </a>
                    </div>
                </div>
                <nav class="mt-5 px-2 space-y-1">
                    {{ $slot }}
                </nav>
            </div>
{{--            <div class="flex-shrink-0 flex border-t border-gray-200 p-4">--}}
{{--                <a href="{{ route('profile.show') }}" class="flex-shrink-0 w-full group block">--}}
{{--                    <div class="flex items-center">--}}
{{--                        <div>--}}
{{--                            <img class="inline-block h-9 w-9 rounded-full"--}}
{{--                                 src="https://ui-avatars.com/api/{{ auth()->user()->name }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ml-3">--}}
{{--                            <p class="text-sm font-medium dark:text-gray-100 group-hover:text-gray-900">--}}
{{--                                {{ auth()->user()->name }}--}}
{{--                            </p>--}}
{{--                            <p class="text-xs font-medium dark:text-gray-200 group-hover:text-gray-700">--}}
{{--                                View profile--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>

        <div class="flex-shrink-0 w-14">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>


<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 shadow">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex-1 flex flex-col min-h-0 bg-white dark:bg-gray-900">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4 pb-5 mx-auto">
                <a href="{{ route('home') }}" class="flex items-center">
                    <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                    <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                </a>
            </div>
            <div class="flex items-center flex-shrink-0 px-4 py-5 dark:text-gray-200">
{{--                <livewire:tools.time/>--}}
            </div>
            <nav class="mt-5 flex-1 px-2 dark:bg-gray-900 space-y-1">
                {{ $slot }}
            </nav>
        </div>
{{--        <div class="flex-shrink-0 flex border-t border-gray-200 p-4">--}}
{{--            <div class="grid grid-cols-12 inline">--}}
{{--                <div class="col-span-10">--}}
{{--                    <a href="{{ route('profile.show') }}" class="flex-shrink-0 w-full group block">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <div>--}}
{{--                                <img class="inline-block h-9 w-9 rounded-full"--}}
{{--                                     src="https://ui-avatars.com/api/{{ auth()->user()->name }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">--}}
{{--                                <p class="text-sm font-medium dark:text-gray-100 group-hover:text-gray-900">--}}
{{--                                    {{ auth()->user()->name }}--}}
{{--                                </p>--}}
{{--                                <p class="text-xs font-medium dark:text-gray-200 group-hover:text-gray-700">--}}
{{--                                    View profile--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-span-2 align-middle">--}}
{{--                    <form method="POST" action="{{ route('logout') }}" x-data>--}}
{{--                        @csrf--}}
{{--                        <a href="{{ route('logout') }}"--}}
{{--                           @click.prevent="$root.submit();" class="align-middle mx-auto flex-shrink-0 group block">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <div class="ml-3">--}}
{{--                                    <p class="align-middle text-xs font-medium text-red-500 group-hover:text-red-700">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"--}}
{{--                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>--}}
{{--                                        </svg>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
