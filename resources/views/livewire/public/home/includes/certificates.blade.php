<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                @foreach($certificates as $certificate)
                    <div class="col-span-1 flex justify-center py-8 px-8 rounded-xl bg-transparent">
                        @foreach($certificate->media as $media)
                            <img src="https://images.cytorick.nl{{ $media->id }}/{{ $media->file_name }}" alt="" class="max-h-12">
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">
                    @livewire('public.tools.title-shower', ['page' => 'Home', 'number' => 6])
                </h2>
                    @livewire('public.tools.text-shower', ['page' => 'home', 'number' => 6])
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
