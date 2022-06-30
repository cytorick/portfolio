<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:gap-8 lg:items-center">

            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">
                    @livewire('public.tools.title-shower', ['page' => 'About', 'number' => 4])
                </h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($languages as $language)
                        <div class="bg-gray-200 dark:bg-gray-900 pt-5 px-4 pb-6 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                            <dt>
                                <div class="absolute bg-green-600 rounded-md p-3">
                                    @foreach($language->media as $media)
                                        <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="vlag" class="h-6 w-8">
                                    @endforeach
                                </div>
                            </dt>
                            <dd class="ml-16">
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ $language->name }}</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-gray-200">{{ $language->level }}</p>
                            </dd>
                            <p class="text-xs mt-6">Level:</p>
                            <progress class="progress progress-success dark:bg-green-600" value="{{ $language->percentage }}" max="100" />

                        </div>
                    @endforeach

                </dl>
            </div>


        </div>
    </div>
</div>
