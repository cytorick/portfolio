<div class="relative bg-gray-100 dark:bg-gray-800 py-16 sm:py-24">
    <div class="lg:mx-auto max-w-7xl px-4 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
        <div class="relative sm:py-16 lg:py-0">
            <!-- Content area -->
            <div class="pt-12 sm:pt-16 lg:pt-20">

                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">
                    @livewire('public.tools.title-shower', ['page' => 'Home', 'number' => 4])
                </h2>

                <div class="mt-6 text-gray-500 space-y-6 dark:text-gray-200">
                    @livewire('public.tools.text-shower', ['page' => 'Home', 'number' => 4])
                    <div class="mt-8 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="{{ route('about') }}"
                               class="flex items-center justify-center my-5 px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                All skills </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 my-auto">

            <img src="{{ asset('img/rick-standing-3.png') }}" alt="" class="rounded-xl hidden sm:block">
            <img src="{{ asset('img/rick-standing.png') }}" alt="" class="rounded-xl block sm:hidden">

        </div>

    </div>
</div>
