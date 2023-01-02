<section class="bg-gray-100 dark:bg-gray-800">

    <x-header>
        Welkom, ik ben <span class="text-green-600">Rick Visser</span>
        <x-slot name="intro">
            Welkom op mijn portfolio-website. Hier vind je allerlei informatie over mij als persoon, maar ook over mijn
            carrière. Ben je nou enthousiast geworden, aarzel dan niet en stuur mij een berichtje.
        </x-slot>
    </x-header>

    <div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
        <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">

            <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="relative">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Wie is Rick nou echt?</h3>
                    <p class="mt-3 text-lg text-gray-500">
                        Ik ben een software-ontwikkelaar uit het hoge noorden, met andere woorden het mooie Groningen.
                        Ik ben een software-ontwikkelaar uit hart en nieren, ik heb echt passie voor mijn vak. Van begin
                        tot eind ik kan het en doe
                        het allemaal.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                                    </svg>

                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Mijn leeftijd</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Ondertussen ben ik de {{ $age }} jaar ben gepasseerd en ik onderweg ben naar
                                de {{ $age + 1 }}, maar ondanks dat ik ouder wordt, werk ik niet minder hard en ik heb
                                ik
                                zeker ook niet minder voor mijn vak.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/>
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Hoe het begon</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Hoe het allemaal begon, is voor mij een leuk verhaal. Destijds was ik begonnen met een
                                opleiding, maar die bleek het toch niet helemaal te zijn. Na bij verscheiden opleidingen
                                mee
                                te hebben gekeken vond ik uiteindelijk de parel genaamd "Software Development".
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="relative -mx-4 mt-10 lg:mt-0 pl-8" aria-hidden="true">
                    <img class="relative mx-auto rounded-md shadow" src="{{ asset('img/20180826_123127.JPG') }}" alt="">
                </div>
            </div>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                    <div class="lg:col-start-2">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">In mijn vrije tijd</h3>
                        <p class="mt-3 text-lg text-gray-500">
                            Heb ik veel maar toch ook weinig hobby's. Zo vind ik een spelletje erg leuk, maar ook een
                            potje
                            poolen. Een hobby die ik al jaren heb en die denk ik nooit weg gaat, is toch wel gamen. Even
                            een
                            spelletje na een lange vind ik leuk.
                        </p>

                        <dl class="mt-10 space-y-10">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4.867 19.125h.008v.008h-.008v-.008z"/>
                                        </svg>

                                    </div>
                                    <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Best wel handig</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Als ik het over mijzelf mag zeggen ben ik best handig. Ik kan aardig overweg met een
                                    hammer en een zaag. Vaak in mijn vakantie ben ik voor mijzelf of voor een ander aan
                                    het
                                    klussen.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5"/>
                                        </svg>


                                    </div>
                                    <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Ontspanning</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Na een lange dag werken, een goede game opstarten om even tot rust te komen,
                                    heerlijk.
                                    Bovendien ben ik voor een goede film of serie ook altijd te porren.
                            </div>
                        </dl>
                    </div>

                    <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0 pr-8">
                        <img class="relative mx-auto rounded-md" src="{{ asset('img/rick-standing-feet.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Waarmee je ook contact met mij kan
                opnemen</h2>
            <div class="mt-8 flow-root lg:mt-10">
                <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                    @foreach($links as $link)
                        <div
                            class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0 text-2xl text-green-600 hover:text-green-700 font-bold">
                            <a href="{{ $link->link }}" target="_blank">
                                {!! $link->icon !!} {{ $link->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('livewire.public.home.includes.experience')

    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Waar ik graag mee werk</h2>
            <div class="mt-8 flow-root lg:mt-10">
                <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://www.jetbrains.com/phpstorm/" target="_blank">
                            <img class="h-16" src="{{ asset('img/phpstorm-rework.png') }}" alt="PhpStorm">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://slack.com/" target="_blank">
                            <img class="h-16" src="{{ asset('img/slack.png') }}"
                                 alt="Slack">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://github.com/" target="_blank">
                            <img class="h-16" src="{{ asset('img/github.png') }}"
                                 alt="GitHub">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://www.git-tower.com/" target="_blank">
                            <img class="h-16" src="{{ asset('img/tower.png') }}"
                                 alt="Tower">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://www.figma.com/" target="_blank">
                            <img class="h-16" src="{{ asset('img/figma.png') }}"
                                 alt="figma">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.public.home.includes.schools')

    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Bedrijven waar ik stage heb
                gelopen</h2>
            <div class="mt-8 flow-root lg:mt-10">
                <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://www.europeanwhiskyauctions.com/" target="_blank">
                        <img class="h-16" src="{{ asset('img/ewa.png') }}" alt="EWA">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://praes.nl/" target="_blank">
                        <img class="h-16" src="{{ asset('img/praes.png') }}"
                             alt="Praes">
                        </a>
                    </div>
                    <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow lg:ml-4 lg:flex-grow-0">
                        <a href="https://customwebsite.nl/" target="_blank">
                        <img class="h-16" src="{{ asset('img/customwebsite.png') }}"
                             alt="CW">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.public.home.includes.projects')


</section>
