<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($certificates as $certificate)
                    <div class="col-span-1 flex justify-center py-8 px-8 rounded-xl bg-transparent">
                        @foreach($certificate->media as $media)
                            <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="" class="max-h-12">
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">The <span class="text-green-600">certificates</span> I got</h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-600 dark:text-gray-200">Over the years I have collected a few <span class="text-green-600">certificates</span>. If you would like to see all my <span class="text-green-600">certificates</span> you can click the button.</p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="{{ route('experience') }}"
                           class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                            All certificates </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
