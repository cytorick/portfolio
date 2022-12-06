<x-app-layout>

    @isset( $certificate )
        @section('title', 'Edit certificate')
    @else
        @section('title', 'Create certificate')
    @endif

    {{-- HERO SECTION --}}
    <x-slot name="header">
        <div class="mx-auto">
            <div class="flex items-center justify-between">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
                    @isset( $certificate )
                        Edit "@foreach($certificate->media as $media)<img src="{{ asset('/img/' . $media->id .'/'. $media->file_name) }}" alt="" class="w-8 inline">@endforeach {{ $certificate->name }}"
                    @else
                        {{ __('Create new certificates') }}
                    @endif
                </h2>
                <div wire:loading class="text-gray-400 italic text-xs font-medium ml-4">
                    Saving...
                </div>
                <div>
                    <div x-data="{ tooltip: 'This is crazy!' }">
                        <a href="{{ route('admin.certificates') }}"
                           x-tooltip="Back to Certificates"
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

            @isset( $certificate )
                @livewire('admin.certificates.certificate-form', [
                'certificateId' => $certificate->id
                ])
            @else
                @livewire('admin.certificates.certificate-form')
            @endif

{{--        </div>--}}
    </div>

</x-app-layout>

