<x-header>
    Hier vind je alles <span class="text-green-600">over mij</span>...
</x-header>

<div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
    <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">
        <div class="relative lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
            <div class="relative">
                <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Verscheiden ervaringen over de
                    jaren</h3>
                <p class="mt-3 text-lg text-gray-500">
                    Ik ben een vanuit nature enthousiast persoon. Ik bekijk elke taak met volle enthousiastme. Ergens
                    zou ik mijzelf misschien een avonturier noemen. Ik hou ervan om (nieuwe) dingen te ontdekken
                    zowel privé als werkgerelateerde dingen. Met mijn kleine {{ $age }} jaar op deze aardbol probeer ik
                    het beste en mooiste uit het leven te halen.
                </p>

                <dl class="mt-10 space-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Leergierig</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Ik ben van nature erg leergierig aangelegd en benut ook zoveel mogelijk kansen om mijzelf
                            bij te scholen.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Innoverend</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Ik probeer altijd te innoveren. Of het nou zorgvuldiger, sneller of gewoon beter kan. Ik
                            zoek altijd naar de beste oplossing.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                <!-- Heroicon name: outline/bolt -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Stressbestendig</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Ik hou in de meeste situaties mijn hoofd koel en weet de rust voor zowel mij als het team te
                            bewaren.
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="relative -mx-4 mt-10 lg:mt-0" aria-hidden="true">
                <svg class="absolute left-1/2 -translate-x-1/2 translate-y-16 transform lg:hidden" width="784"
                     height="404" fill="none" viewBox="0 0 784 404">
                    <defs>
                        <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20"
                                 patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                        </pattern>
                    </defs>
                    <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)"/>
                </svg>

                <div class="relative -mx-4 mt-10 lg:mt-0 pl-8" aria-hidden="true">
                    <img class="relative mx-auto rounded-md shadow" src="{{ asset('img/rick-computer.jpeg') }}" alt="">
                </div>
            </div>
        </div>

        <svg class="absolute right-full hidden translate-x-1/2 translate-y-12 transform lg:block" width="404"
             height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                         patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"/>
        </svg>
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

<div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
    <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">

        <div class="relative lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
            <div class="relative">
                <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Mijn schoolcarrière door de
                    jaren heen</h3>
                <p class="mt-3 text-lg text-gray-500">
                    Ik ben geboren in het mooie Groningen. Vanaf kinds af aan ben ik altijd al bezig met computers. Van
                    familie helpen met mail instellen als kind tot gehele web-applicaties ontwikkelen.
                </p>
                <p class="mt-3 text-lg text-gray-500">
                    Daarnaast ben ik een echte tech-enthousiast, ik hou van alles tech gerelateerd. Een hobby van mij is
                    dan ook alle tech-releases in de gaten houden. Ik zou wel kunnen zeggen dat (bijna) geen
                    tech-product mij ontgaat.
                </p>
                <p class="mt-3 text-lg text-gray-500">
                    In mijn vrije tijd hou ik ook van een goede videogame op mijn zelf gebouwde game-pc. Een goede fps
                    of een goede rpg gaat er altijd wel in. Een fysiek spelletje daarentegen zoals een kaartspel of een
                    potje pool gaat er ook altijd in. Op vrijdag gezellig naar het poolcafé en even een potje pool of
                    een potje darts is een goed besteedde vrijdag als je het mij vraagt.
                </p>
            </div>

            <div class="relative -mx-4 mt-10 lg:mt-0" aria-hidden="true">
                <img src="{{ asset('img/20180826_123127.JPG') }}" alt=""
                     class="rounded-xl hidden sm:block transform -scale-x-100">
            </div>
        </div>

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        Certificaten en talen die ik spreek
                    </h3>
                    <p class="mt-3 text-lg text-gray-500">
                        Nederlands als moedertaal en Engels als (bijna) tweede taal. Van als kind geen woord Engels
                        kunnen spreken/lezen of schrijven naar (bijna) vloeiend Engels spreken, lezen en schrijven. Ik
                        kan gelukkig verschillende talen, waardoor mensen van over de gehele wereld kan helpen.
                    </p>

                    <dl class="mt-10 space-y-10">
                        @foreach($languages as $language)
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                        @foreach($language->media as $media)
                                            <img
                                                src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                                alt="vlag" class="h-6 w-8">
                                        @endforeach
                                    </div>
                                    <p class="ml-16 text-lg font-medium leading-6 text-gray-900">{{ $language->name }}</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    {{ $language->level }}
                                    <progress class="progress progress-success bg-green-700 mt-0"
                                              value="{{ $language->percentage }}" max="100"/>
                                </dd>
                            </div>
                        @endforeach
                    </dl>
                </div>

                <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0  mr-5">
                    <img src="{{ asset('img/20180820_170458.JPG') }}" alt=""
                         class="rounded-xl hidden sm:block transform -scale-x-100">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative bg-gray-50 py-16">
    <div class="mx-auto max-w-md px-6 text-center sm:max-w-3xl lg:max-w-7xl lg:px-8">
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">De skills die ik onder de knie
            heb</p>
        <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Ik verzamel skills als Pokemon kaarten. Ik wil van alles een beetje kunnen. :)</p>
        <div class="mt-10">
            <div class="relative">
                <dl class=" grid sm:grid-cols-12 grid-cols-3 gap-5">
                    @foreach($skills as $skill)
                        <div x-data="{ open: false }" class="col-span-3 pt-6">
                            <dt class="text-lg">
                                <button type="button"
                                        x-description="Expand/collapse question button"
                                        class="flex w-full justify-between bg-gray-200 text-gray-900 rounded-md p-4 z-0"
                                        aria-controls="faq-0" @click="open = !open"
                                        aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                    <span
                                        class="h-8 w-8 text-green-600 text-2xl">{!! $skill->icon !!}</span> {{ $skill->name }}
                                    <span class="ml-6 flex h-7 items-center">
                                                        <svg class="h-6 w-6 transform rotate-0"
                                                             x-state:on="Open" x-state:off="Closed"
                                                             :class="{ '-rotate-180': open, 'rotate-0': !(open) }"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24"
                                                             stroke-width="1.5" stroke="currentColor"
                                                             aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                        </svg>
                                                    </span>
                                </button>
                            </dt>
                            <dd class="bg-gray-200 p-4 rounded-b-md border border-t relative z-50" id="faq-0"
                                x-show="open"
                                style="display: none; margin-top: -10px;">
                                <p class="text-gray-500">
                                    {!! $skill->description !!}
                                </p>
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</div>
