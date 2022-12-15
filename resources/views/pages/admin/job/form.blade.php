<x-app-layout>

    @isset( $job )
        @section('title', 'Edit job')
    @else
        @section('title', 'Create job')
    @endif

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="mx-auto">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    @isset( $job )
                        Edit "@foreach($job->media as $media)
                            <img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt=""
                                 class="w-8 inline">
                        @endforeach {{ $job->function }} - {{ $job->company }}"
                    @else
                        {{ __('Create new jobs') }}
                    @endif
                </h2>
                <div wire:loading class="text-gray-400 italic text-xs font-medium ml-4">
                    Saving...
                </div>
                <div class="inline-flex">
                    <div x-data="{ tooltip: 'This is crazy!' }">
                        <a href="{{ route('admin.jobs') }}"
                           x-tooltip="Back to Jobs"
                           class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-green-600 hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-green-600 text-white mr-2
                       ">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


    {{-- MAIN CONTENT --}}
    <div class="bg-gray-100 dark:bg-gray-700">
        {{--        <div class="max-w-7xl mx-auto py-8 px-4 sm:py-12 sm:px-6 lg:px-8">--}}
        @isset( $job )
            @livewire('admin.jobs.job-form', [
            'jobId' => $job->id
            ])
        @else
            @livewire('admin.jobs.job-form')
        @endif
        {{--        </div>--}}
    </div>

</x-app-layout>

