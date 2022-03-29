<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center">
            <span class="block text-gray-900 dark:text-gray-100">Welcome <span class="text-error">{{ Auth::user()->name }}</span></span>
        </h1>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
{{--                <x-jet-welcome />--}}
            </div>
        </div>
    </div>
</x-app-layout>
