@props([
    'intro' => false,
])

<div class="relative overflow-hidden bg-gray-50">
    <div class="hidden sm:absolute sm:inset-0 sm:block" aria-hidden="true">
        <svg
            class="absolute bottom-0 right-0 mb-48 translate-x-1/2 transform text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:translate-x-0 xl:transform-none"
            width="364" height="384" viewBox="0 0 364 384" fill="none">
            <defs>
                <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20"
                         patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)"/>
        </svg>
    </div>
    <div class="relative pt-6">
        <div x-data="{ open: false }">
            <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6"
                 aria-label="Global">
                <div class="flex flex-1 items-center">
                    <div class="flex w-full items-center justify-between md:w-auto">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                            <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button"
                                    x-description="Expand/collapse question button"
                                    class="focus-ring-inset inline-flex items-center justify-center rounded-md bg-green-600 p-2 text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-white"
                                    aria-controls="faq-0" @click="open = !open"
                                    aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/bars-3 -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-10 md:ml-10 md:flex">

                    </div>
                </div>
                <div class="hidden md:flex space-x-10 md:ml-10">
                    <a href="{{ route('home') }}"
                       class="font-medium p-3 {{ (request()->is('/')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500' }}"><i
                            class="fa-solid fa-house"></i></a>

                    <a href="{{ route('about') }}"
                       class="font-medium p-3 {{ (request()->is('over*')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500' }}">Over
                        mij</a>

                    <a href="{{ route('experience') }}"
                       class="font-medium p-3 {{ (request()->is('ervaring*')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500' }}">Ervaring</a>

                    <a href="{{ route('projects') }}"
                       class="font-medium p-3 {{ (request()->is('projecten')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500' }}">Projecten</a>

                    <a href="{{ route('contact') }}"
                       class="font-medium text-white bg-green-600 hover:bg-green-700 rounded-full p-3 px-6">Bericht
                        mij!</a>
                </div>
            </nav>
            <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden" x-show="open"
                 style="display: none;">
                <div class="overflow-hidden rounded-lg bg-gray-200 shadow-md ring-1 ring-black ring-opacity-5">
                    <div class="flex items-center justify-between px-5 pt-4">
                        <div>
                            <a href="{{ route('home') }}" class="flex items-center">
                                <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                                <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                    class="inline-flex items-center justify-center rounded-md bg-white p-2 hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                                    aria-controls="faq-0" @click="open = !open"
                                    aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6 text-green-600 hover:text-green-700"
                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-1 px-2 pt-2 pb-3 text-center">
                        <a href="{{ route('home') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium {{ (request()->is('/')) ? 'text-green-600 bg-white' : 'hover:text-green-600 text-gray-500' }}"><i
                                class="fa-solid fa-house"></i></a>

                        <a href="{{ route('about') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium {{ (request()->is('over*')) ? 'text-green-600 bg-white' : 'hover:text-green-600 text-gray-500' }}">Over
                            mij</a>

                        <a href="{{ route('experience') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium {{ (request()->is('ervaring*')) ? 'text-green-600 bg-white' : 'hover:text-green-600 text-gray-500' }}">Ervaring</a>

                        <a href="{{ route('projects') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium {{ (request()->is('projecten*')) ? 'text-green-600 bg-white' : 'hover:text-green-600 text-gray-500' }}">Projecten</a>
                    </div>
                    <a href="#"
                       class="block w-full bg-green-600 px-5 py-3 text-center font-medium {{ (request()->is('/')) ? 'bg-green-700 text-white' : 'hover:text-gray-100 hover:bg-green-700 text-white' }}">Bericht mij!</a>
                </div>
            </div>
        </div>

        <main class="mt-16 sm:mt-24">
            <div class="mx-auto max-w-7xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div
                        class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                        <div>
                            @livewire('tools.available')
                            <h1 class="mt-4 text-5xl font-bold tracking-tight text-gray-900">
                                {{ $slot }}
                            </h1>
                            @if($intro)
                                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    {{ $intro }}
                                </p>
                            @endif
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                @foreach(\App\Models\Link::where('archived', 0)->where('featured', 1)->get() as $link)
                                    <a href="{{ $link->link }}" target="_blank" class=" hover:text-green-600 mr-8">
                                        {!! $link->icon !!}
                                    </a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0 flex justify-center">
                        <img src="{{ asset('img/rick-netjes-nobg.png') }}" alt="" class="w-72">
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
