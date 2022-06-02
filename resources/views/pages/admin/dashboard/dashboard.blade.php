<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-12">

        @livewire('admin.dashboard.dashboard-index')

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
{{--                <x-jet-welcome />--}}
            </div>
        </div>
    </div>
</x-app-layout>
