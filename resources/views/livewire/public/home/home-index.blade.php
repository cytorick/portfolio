<section class="bg-gray-100 dark:bg-gray-800">

    @include('livewire.public.home.includes.hero')

    @include('livewire.public.home.includes.experience')

    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Waar ik graag mee werk</h2>
            <div class="mt-8 flow-root lg:mt-10">
                <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/phpstorm-rework.png') }}" alt="PhpStorm">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/slack.png') }}"
                             alt="Slack">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/github.png') }}"
                             alt="GitHub">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/tower.png') }}"
                             alt="Tower">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/figma.png') }}"
                             alt="figma">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--        @include('livewire.public.home.includes.languages')--}}

    {{--    @include('livewire.public.home.includes.skills')--}}

    @include('livewire.public.home.includes.schools')

    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Bedrijven waar ik stage heb gelopen</h2>
            <div class="mt-8 flow-root lg:mt-10">
                <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/ewa.png') }}" alt="EWA">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/praes.png') }}"
                             alt="Praes">
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <img class="h-16" src="{{ asset('img/customwebsite.png') }}"
                             alt="CB">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.public.home.includes.projects')


</section>
