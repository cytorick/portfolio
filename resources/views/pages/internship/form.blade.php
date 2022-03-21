<x-app-layout>

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    {{ __('Create new internship') }}
                </h2>
                <div wire:loading class="text-gray-400 italic text-xs font-medium ml-4">
                    Saving...
                </div>
                <div>
                    <x-a.error href="{{ route('admin.internships') }}">
                        {{ __('Back to internships') }}
                    </x-a.error>
                </div>
            </div>
        </div>
    </x-slot>


    {{-- MAIN CONTENT --}}
    <div class="bg-gray-100 dark:bg-gray-700">
        <div class="max-w-3xl mx-auto py-8 px-4 sm:py-12 sm:px-6 lg:px-8">

            @isset( $internship )
                @livewire('internship.internship-form', [
                'internshipId' => $internship->id
                ])
            @else
                @livewire('internship.internship-form')
            @endif

        </div>
    </div>

</x-app-layout>

