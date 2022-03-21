<aside class="col-span-1">
    <nav class="mt-0" aria-label="Sidebar">

        <x-nav.sidebar-item class="text-black bg-gray-200 hover:bg-gray-300 dark:bg-gray-900 dark:hover:bg-gray-700 dark:text-gray-200 hover:text-red-400 {{ (request()->is('experience/certificate/'. $certificate->id .'/overview')) ? 'dark:bg-red-400 bg-red-400' : '' }}" href="{{ route('certificate.show', [ 'certificateId' => $certificate->id, 'page' => 'overview' ]) }}">
            {{ __('Overview') }}
        </x-nav.sidebar-item>

        <x-nav.sidebar-item class="text-black bg-gray-200 hover:bg-gray-300 dark:bg-gray-900 dark:hover:bg-gray-700 dark:text-gray-200 hover:text-red-400 {{ (request()->is('experience/certificate/'. $certificate->id .'/what-I-learned')) ? 'dark:bg-red-400 bg-red-400' : '' }}" href="{{ route('certificate.show', [ 'certificateId' => $certificate->id, 'page' => 'what-I-learned' ]) }}">
            {{ __('What I learned') }}
        </x-nav.sidebar-item>

        <x-nav.sidebar-item class="mt-5 text-black bg-gray-200 hover:bg-gray-300 dark:bg-gray-900 dark:hover:bg-gray-700 dark:text-gray-200 hover:text-red-400" href="{{ route('experience') }}">
            <i class="fa-solid fa-arrow-left"></i> {{ __('Back to experience') }}
        </x-nav.sidebar-item>

    </nav>
</aside>
