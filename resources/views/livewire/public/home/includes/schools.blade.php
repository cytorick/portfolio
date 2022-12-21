{{--<div class="bg-gray-100 dark:bg-gray-800">--}}
{{--    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">--}}
{{--        <div class="lg:gap-8 lg:items-center">--}}

{{--            <div>--}}
{{--                <h3 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">--}}
{{--                    @livewire('public.tools.title-shower', ['page' => 'Home', 'number' => 5])--}}
{{--                </h3>--}}

{{--                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">--}}
{{--                    @foreach($schools as $school)--}}
{{--                        <x-card.card title="{{ $school->name }}" sub-title="{{ $school->school }}" address="{{ $school->street }}, {{ $school->place }}"--}}
{{--                                     hover>--}}
{{--                            <x-slot name="link">--}}
{{--                                {{ route('schools.show', ['schoolId' => $school->id, 'page' => 'overview']) }}--}}
{{--                            </x-slot>--}}
{{--                            <x-slot name="image">--}}
{{--                                @foreach($school->media as $media)--}}
{{--                                    <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}" alt="" class="inline-block align-middle px-3">--}}
{{--                                @endforeach--}}
{{--                            </x-slot>--}}
{{--                            <x-slot name="dates">--}}
{{--                                {{ date('M Y', strtotime($school->start_date)) }} ---}}
{{--                                @if($school->is_active == 1)--}}
{{--                                    Present--}}
{{--                                @else--}}
{{--                                    {{ date('M Y', strtotime($school->end_date)) }}--}}
{{--                                @endif--}}
{{--                            </x-slot>--}}
{{--                            <x-card.status status="{{ $school->status }}"/>--}}
{{--                        </x-card.card>--}}
{{--                    @endforeach--}}
{{--                </dl>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="overflow-hidden bg-gray-50 py-16 lg:py-24">
    <div class="relative mx-auto max-w-xl px-6 lg:max-w-7xl lg:px-8">

        <div class="relative lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
            <div class="relative">
                <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Mijn schoolcarrière door de
                    jaren heen</h3>
                <p class="mt-3 text-lg text-gray-500">
                    Over de jaren heb ik verscheiden ervaringen mogen op doen in verschillende sectoren. Zo heb ik de
                    standaard bijbaantjes gehad bij verscheiden winkels. Hier heb ik veel kansen gehad en heb ik veel
                    geleerd over werken in teamverband en het stellen van doelen, en het behalen van deze doelen.
                </p>
                <p class="mt-3 text-lg text-gray-500">
                    Over de jaren heb ik verscheiden ervaringen mogen op doen in verschillende sectoren. Zo heb ik de
                    standaard bijbaantjes gehad bij verscheiden winkels. Hier heb ik veel kansen gehad en heb ik veel
                    geleerd over werken in teamverband en het stellen van doelen, en het behalen van deze doelen.
                </p>
                <p class="mt-3 text-lg text-gray-500">
                    Over de jaren heb ik verscheiden ervaringen mogen op doen in verschillende sectoren. Zo heb ik de
                    standaard bijbaantjes gehad bij verscheiden winkels. Hier heb ik veel kansen gehad en heb ik veel
                    geleerd over werken in teamverband en het stellen van doelen, en het behalen van deze doelen. <a
                        href="" class="text-green-600 hover:text-green-700">Lees meer...</a>
                </p>
            </div>

            <div class="relative -mx-4 mt-10 lg:mt-0" aria-hidden="true">
                <div class="p-5 mt-8 grid grid-cols-1 gap-0.5 md:grid-cols-1 lg:mt-0 lg:grid-cols-1">
                    @foreach($schools as $school)
                        <div
                            class="col-span-1 my-4 bg-gray-200 pt-5 px-4 pb-6 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden max-h-100 hover:bg-green-600 hover:text-gray-100">
                            <a href="{{ route('schools.show', ['schoolId' => $school->id, 'page' => 'overview']) }}">
                                <div class="grid grid-cols-5">
                                    <div class="col-span-2 justify-center my-auto mx-auto">
                                        @foreach($school->media as $media)
                                            <img
                                                src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                                alt="" class="inline-block align-middle px-3">
                                        @endforeach
                                    </div>
                                    <div class="col-span-3">
                                        <h1 class="text-lg font-semibold text-gray-900">{{ $school->name }}</h1>
                                        <p class="text-xs text-green-600">{{ $school->school }}</p>
                                        <br>
                                        <div class="grid grid-cols-10">
                                            <div class="col-span-1 text-center mb-auto">
                                                <span class="text-red-500"><i
                                                        class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                            <div class="col-span-9 ml-1 my-auto">
                                                <p class="text-sm text-gray-900"> {{ $school->street }}
                                                    , {{ $school->place }}</p>
                                            </div>
                                            <div class="col-span-1 text-center my-auto">
                            <span class="text-yellow-500" wire:loading.class.remove="text-yellow-600"><i
                                    class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                            <div class="col-span-9 ml-1 my-auto">
                                                <p class="text-sm text-gray-900">
                                                    {{ date('M Y', strtotime($school->start_date)) }} -
                                                    @if($school->is_active == 1)
                                                        Present
                                                    @else
                                                        {{ date('M Y', strtotime($school->end_date)) }}
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-span-1 text-center my-auto">
                                                <span class="text-green-600"><i
                                                        class="fa-solid fa-file-contract"></i></span>
                                            </div>
                                            <div class="col-span-9 ml-1 my-auto">
                                                <p class="text-sm text-gray-900"> {{ $school->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        Certificaten en talen die ik spreek
                    </h3>
                    <p class="mt-3 text-lg text-gray-500">
                        In de afgelopen jaren heb ik mijzelf veel skills aan kunnen leren. Mijn skills variëren tussen
                        IT-gerelateerde skills en people-skills. Binnen deze skills ben ik in de ene een master en in de
                        andere een beginner. Ik hoop mij steeds meer te ontwikkelen zodat ik en beter wordt en ik meer
                        skills kan bemachtigen. <a href="" class="text-green-600 hover:text-green-700">Lees meer...</a>
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

                <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0">
                    <div class="p-5 mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                        @foreach($certificates as $certificate)
                            <div class="col-span-1 flex justify-center py-8 px-8 rounded-xl bg-transparent">
                                @foreach($certificate->media as $media)
                                    <img src="https://images.cytorick.nl/{{ $media->id }}/{{ $media->file_name }}"
                                         alt=""
                                         class="max-h-16">
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
