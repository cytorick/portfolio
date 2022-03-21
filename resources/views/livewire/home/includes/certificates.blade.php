<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($certificates as $certificate)
                    <div class="col-span-1 flex justify-center py-8 px-8 rounded-xl bg-transparent">
                        <img class="max-h-12" src="{{ asset('img/'. $certificate->image) }}"
                             alt="{{ $certificate->school }}">
                    </div>
                @endforeach
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">The <span class="text-error">certificates</span> I got</h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-500 dark:text-gray-200">Over the years I have collected a few <span class="text-error">certificates</span>. If you would like to see all my <span class="text-error">certificates</span> you can click the button.</p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="{{ route('experience') }}"
                           class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-error hover:bg-red-500">
                            All certificates </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
