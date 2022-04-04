<x-guest-layout>

    @section('title', 'Contact')

    @livewire('contact.links')

    <div class="bg-gray-100 dark:bg-gray-800">
        <div class="max-w-3xl mx-auto px-4 pb-8 sm:px-6 lg:px-8">

            @livewire('contact.index')

        </div>
    </div>
</x-guest-layout>
