<x-app-layout>

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    @isset( $school )
                        Edit "@foreach($school->media as $media)<img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="" class="w-8 inline">@endforeach {{ $school->name }} - {{ $school->school }}"
                    @else
                        {{ __('Create new schools') }}
                    @endif
                </h2>
                <div>
                    <x-a.error href="{{ route('admin.schools') }}">
                        {{ __('Back to schools') }}
                    </x-a.error>
                </div>
            </div>
        </div>
    </x-slot>


    {{-- MAIN CONTENT --}}
    <div class="bg-gray-100 dark:bg-gray-700">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:py-12 sm:px-6 lg:px-8">

            @isset( $school )
                @livewire('admin.schools.school-form', [
                'schoolId' => $school->id
                ])
            @else
                @livewire('admin.schools.school-form')
            @endif

        </div>
    </div>

</x-app-layout>

