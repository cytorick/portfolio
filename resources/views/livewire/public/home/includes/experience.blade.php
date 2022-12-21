<div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
    <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">
        <svg class="absolute left-full hidden -translate-x-1/2 -translate-y-1/4 transform lg:block" width="404"
             height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20"
                         patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"/>
        </svg>

        <div class="relative lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
            <div class="relative">
                <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Verscheiden ervaringen over de
                    jaren</h3>
                <p class="mt-3 text-lg text-gray-500">
                    Over de jaren heb ik verscheiden ervaringen mogen op doen in verschillende sectoren. Zo heb ik de
                    standaard bijbaantjes gehad bij verscheiden winkels. Hier heb ik veel kansen gehad en heb ik veel
                    geleerd over werken in teamverband en het stellen van doelen, en het behalen van deze doelen. <a
                        href="" class="text-green-600 hover:text-green-700">Lees meer...</a>
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
                <div class="p-5 mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                    @foreach($jobs->take(5) as $job)
                        <a href="{{ route('jobs.show', ['jobId' => $job->id, 'page' => 'overview']) }}">
                            <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-green-600 hover:rounded-3xl">
                                @foreach($job->media as $media)
                                    <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                         alt=""
                                         class="max-h-16">
                                @endforeach
                            </div>
                        </a>
                    @endforeach
                    @foreach($internships as $internship)
                        <a href="{{ route('internships.show', ['internshipId' => $internship->id, 'page' => 'overview']) }}">
                            <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-green-600 hover:rounded-3xl">
                                @foreach($internship->media as $media)
                                    <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                         alt=""
                                         class="max-h-16">
                                @endforeach
                            </div>
                        </a>
                    @endforeach
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

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        De skills die ik heb verzameld over de jaren
                    </h3>
                    <p class="mt-3 text-lg text-gray-500">
                        In de afgelopen jaren heb ik mijzelf veel skills aan kunnen leren. Mijn skills variëren tussen
                        IT-gerelateerde skills en people-skills. Binnen deze skills ben ik in de ene een master en in de
                        andere een beginner. Ik hoop mij steeds meer te ontwikkelen zodat ik en beter wordt en ik meer
                        skills kan bemachtigen. <a href="" class="text-green-600 hover:text-green-700">Lees meer...</a>
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                    <i class="fa-brands fa-laravel fa-2x fa-2y"></i>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Laravel</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Een skill waar ik redelijk goed in ben is naar eigen zeggen toch wel Laravel. Ik ben
                                vanaf 2019 bezig met Laravel en probeer er steeds beter in te worden.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-xl bg-green-600 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                    </svg>

                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Leidinggevend</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Van nature ben ik een leidinggevend type. Ik kan snel herkennen hoe iemand het prettig
                                vind benaderd te worden. Hierdoor als iemand moeite heeft met meekomen kan ik hem/haar
                                de juiste ondersteuning bieden.
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0">
                    <svg class="absolute left-1/2 -translate-x-1/2 translate-y-16 transform lg:hidden" width="784"
                         height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20"
                                     patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"/>
                    </svg>
                    @livewire('public.tools.image-shower', ['page' => 'Home', 'number' => 4, 'class' => 'rounded-xl hidden sm:block transform -scale-x-100'])
                </div>
            </div>
        </div>
    </div>
</div>


{{--<div class="bg-gray-100 dark:bg-gray-800">--}}
{{--    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">--}}
{{--        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">--}}
{{--            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">--}}
{{--                @foreach($jobs as $job)--}}
{{--                    <a href="{{ route('jobs.show', ['jobId' => $job->id, 'page' => 'overview']) }}">--}}
{{--                        <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-green-600 hover:rounded-3xl">--}}
{{--                            @foreach($job->media as $media)--}}
{{--                                <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" alt=""--}}
{{--                                     class="max-h-16">--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--                @foreach($internships as $internship)--}}
{{--                    <a href="{{ route('internships.show', ['internshipId' => $internship->id, 'page' => 'overview']) }}">--}}
{{--                        <div class="col-span-1 flex justify-center py-8 px-8 hover:bg-green-600 hover:rounded-3xl">--}}
{{--                            @foreach($internship->media as $media)--}}
{{--                                <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" alt=""--}}
{{--                                     class="max-h-16">--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">--}}
{{--                    @livewire('public.tools.title-shower', ['page' => 'Home', 'number' => 2])--}}
{{--                </h2>--}}
{{--                @livewire('public.tools.text-shower', ['page' => 'Home', 'number' => 2])--}}
{{--                <div class="mt-8 sm:flex">--}}
{{--                    <div class="rounded-md shadow">--}}
{{--                        <a href="{{ route('experience') }}"--}}
{{--                           class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">--}}
{{--                            All experience </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
