<x-app-layout>

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    @isset( $skill )
                        Edit "<span style="color: {{ $skill->color }}">{!! $skill->icon !!}</span> {{ $skill->name }}"
                    @else
                        {{ __('Create new skills') }}
                    @endif
                </h2>
                <div wire:loading class="text-gray-400 italic text-xs font-medium ml-4">
                    Saving...
                </div>
                <div>
                    <x-a.error href="{{ route('admin.skills') }}">
                        {{ __('Back to skills') }}
                    </x-a.error>
                </div>
            </div>
        </div>
    </x-slot>


    {{-- MAIN CONTENT --}}
    <div class="bg-gray-100 dark:bg-gray-700">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:py-12 sm:px-6 lg:px-8">

            @isset( $skill )
                @livewire('admin.skills.skill-form', [
                'skillId' => $skill->id
                ])
            @else
                @livewire('admin.skills.skill-form')
            @endif

        </div>
    </div>

</x-app-layout>

