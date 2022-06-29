<aside class="col-span-1 mb-10">
    <nav class="mt-0" aria-label="Sidebar">

        <x-nav.sidebar-item class="text-black bg-gray-200 hover:bg-gray-300 dark:bg-gray-900 dark:hover:bg-gray-700 dark:text-gray-200 hover:text-green-600 {{ (request()->is('experience/schools/'. $school->id .'/overview')) ? 'dark:bg-green-600 bg-green-600' : '' }}" href="{{ route('schools.show', [ 'schoolId' => $school->id, 'page' => 'overview' ]) }}" :active="request()->is('*/overview')">
            {{ __('Overview') }}
        </x-nav.sidebar-item>

        <x-nav.sidebar-item class="mt-5 text-black bg-gray-200 hover:bg-gray-300 dark:bg-gray-900 dark:hover:bg-gray-700 dark:text-gray-200 hover:text-green-600 dark:hover:text-green-600" href="{{ route('experience') }}">
            <i class="fa-solid fa-arrow-left"></i> {{ __('Back to experience') }}
        </x-nav.sidebar-item>

    </nav>

    <img src="{{ asset('/img/rick-pointing-reading.png') }}" alt="{{ asset('/img/rick-pointing-reading.png') }}" class="hidden sm:block" />

</aside>
