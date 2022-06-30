<div class="relative bg-gray-100 dark:bg-gray-800 py-10 sm:py-10">
    <div class="lg:mx-auto max-w-7xl px-4 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
        <div class="relative sm:py-16 lg:py-0">
            <!-- Content area -->
            <div class="pt-12 sm:pt-16 lg:pt-20">

                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">
                    <p class="mt-1 max-w-xl text-4xl font-extrabold mx-auto text-gray-900 dark:text-gray-100 sm:text-5xl lg:text-6xl">
                        @livewire('public.tools.title-shower', ['page' => 'Experience', 'number' => 1])
                    </p>
                </h2>

                <div class="mt-6 text-gray-500 space-y-6 dark:text-gray-200">
                    @livewire('public.tools.text-shower', ['page' => 'Experience', 'number' => 1])
                </div>
            </div>
        </div>

        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 my-auto">

            <img src="{{ asset('img/rick-tape-3.png') }}" alt="" class="rounded-xl hidden sm:block max-h-80">

        </div>

    </div>
</div>

