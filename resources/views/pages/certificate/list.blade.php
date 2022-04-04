<x-app-layout class="w-full">

    @section('title', 'Certificates')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Certificates') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            @livewire('certificate.certificate-list')

        </div>
    </div>

</x-app-layout>
