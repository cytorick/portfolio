<x-app-layout>

    @isset( $project )
        @section('title', 'Edit project')
    @else
        @section('title', 'Create project')
    @endif

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="mx-auto">
            <div class="flex items-center justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    @isset( $project )
                        Edit "{!! $project->icon !!} {{ $project->title }} - {{ $project->company }}"
                    @else
                        {{ __('Create new projects') }}
                    @endif
                </h2>
                <div wire:loading class="text-gray-400 italic text-xs font-medium ml-4">
                    Saving...
                </div>
                <div>
                    <div x-data="{ tooltip: 'This is crazy!' }">
                        <a href="{{ route('admin.projects') }}"
                           x-tooltip="Back to Projects"
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
            @isset( $project )
                @livewire('admin.projects.project-form', [
                'projectId' => $project->id
                ])
            @else
                @livewire('admin.projects.project-form')
            @endif
{{--        </div>--}}
    </div>

</x-app-layout>

