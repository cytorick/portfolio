<x-header>
    Hier vind je alles <span class="text-green-600">over mij</span>...
</x-header>

<div class="relative bg-gray-100 dark:bg-gray-800 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div
            class="relative z-10 pb-8 bg-gray-100 dark:bg-gray-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                 fill="rgb(31 41 55 / var(--tw-bg-opacity))" viewBox="0 0 100 100" preserveAspectRatio="none"
                 aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100"/>
            </svg>
            <div>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8"></div>
            </div>
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block text-gray-900 dark:text-gray-100">
                                @livewire('public.tools.title-shower', ['page' => 'About', 'number' => 1])
                            </span>
                    </h1>
                    @livewire('public.tools.text-shower', ['page' => 'About', 'number' => 1])
                    <div class="mt-4 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="{{ route('contact') }}"
                               class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                Contact me </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        @livewire('public.tools.image-shower', ['page' => 'About', 'number' => 1, 'class' => 'h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full'])
    </div>
</div>

<div class="bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                <div class="col-span-2 flex justify-center py-8 px-8 bg-gray-100 dark:bg-transparent">
                    <div class="flow-root">
                        <ul role="list" class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-green-600"
                                          aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                        <span
                                            class="h-8 w-8 rounded-full bg-gray-400 dark:bg-gray-900 text-white flex items-center justify-center ring-8 ring-green-600">
                                         <i class="fa-solid fa-code"></i>
                                        </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 pl-2">
                                            <div>
                                                <p class="text-sm text-gray-600 dark:text-gray-200">Started my
                                                    programming journey!</p>
                                            </div>
                                            <div
                                                class="text-right text-sm whitespace-nowrap text-gray-600 dark:text-gray-300">
                                                <time datetime="2020-09-20">Sep 2018</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @foreach($internships as $internship)
                                <li>
                                    <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-green-600"
                                                      aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full text-white bg-gray-400 dark:bg-gray-900 flex items-center justify-center ring-8 ring-green-600">
                                                        <i class="fa-solid fa-code-branch"></i>
                                                    </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 pl-2">
                                                <div>
                                                    <p class="text-sm text-gray-600 dark:text-gray-200">Got a
                                                        internship at <span
                                                            class="font-bold text-green-600">{{ $internship->company }}</span>!
                                                    </p>
                                                </div>
                                                <div
                                                    class="text-right text-sm whitespace-nowrap text-gray-600 dark:text-gray-300">
                                                    <time
                                                        datetime="2020-09-20">{{ $internship->start_date->format('M Y') }}</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                        <span
                                            class="h-8 w-8 rounded-full bg-gray-400 dark:bg-gray-900 text-white flex items-center justify-center ring-8 ring-green-600">
                                         <i class="fa-solid fa-clipboard-question"></i>
                                        </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4 pl-2">
                                            <div>
                                                <p class="text-sm text-gray-600 dark:text-gray-200">Your company,
                                                    maybe?</p>
                                            </div>
                                            <div
                                                class="text-right text-sm whitespace-nowrap text-gray-600 dark:text-gray-300">
                                                <time datetime="2020-09-20">Now</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="mt-10">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    @livewire('public.tools.title-shower', ['page' => 'About', 'number' => 2])
                </h2>
                <p class="mt-3 max-w-3xl text-lg text-gray-600 dark:text-gray-200">
                    @livewire('public.tools.text-shower', ['page' => 'About', 'number' => 2])
                </p>
            </div>
        </div>
    </div>
</div>


<div class="relative bg-gray-100 dark:bg-gray-800 py-16 sm:py-24">
    <div class="lg:mx-auto max-w-7xl px-4 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
        <div class="relative sm:py-16 lg:py-0">
            <!-- Content area -->
            <div class="pt-12 sm:pt-16 lg:pt-20">

                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">
                    @livewire('public.tools.title-shower', ['page' => 'About', 'number' => 3])
                </h2>

                <div class="mt-6 text-gray-500 space-y-6 dark:text-gray-200">
                    @livewire('public.tools.text-shower', ['page' => 'About', 'number' => 3])
                    <div class="mt-8 sm:flex">
                        <div class="rounded-md">
                            <a href="{{ route('projects') }}"
                               class="flex items-center justify-center my-5 px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                All projects </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 my-auto">
            @livewire('public.tools.image-shower', ['page' => 'About', 'number' => 3, 'class' => 'rounded-xl sm:block'])
        </div>

    </div>
    <div class="py-10 xl:py-10 bg-gray-100 dark:bg-gray-800 overflow-hidden mt-10 px-4">
        <div class="max-w-max lg:max-w-7xl mx-auto">
            <div class="relative z-10 mb-8 md:mb-2">
                <div class="text-base max-w-prose lg:max-w-none">
                    <h2 class="leading-6 text-green-600 font-semibold tracking-wide uppercase dark:text-green-600">
                        My Skills</h2>
                </div>
            </div>
            <div class="relative">
                <div class="relative dark:bg-gray-800">
                    <dl class=" grid sm:grid-cols-12 grid-cols-3 gap-5">
                        @foreach($skills as $skill)
                            <div x-data="{ open: false }" class="col-span-3 pt-6">
                                <dt class="text-lg">
                                    <button type="button"
                                            x-description="Expand/collapse question button"
                                            class="flex w-full justify-between bg-gray-200 dark:bg-gray-900 rounded-md p-4"
                                            aria-controls="faq-0" @click="open = !open"
                                            aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                                <span
                                                    style="color: {{ $skill->color }}">{!! $skill->icon !!}</span> {{ $skill->name }}
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
                                <dd class="mt-2 pr-12 bg-gray-200 dark:bg-gray-900 p-4 rounded-md" id="faq-0"
                                    x-show="open"
                                    style="display: none;">
                                    <p class="text-base">
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
</div>


{{--    <div class="bg-gray-100 dark:bg-gray-800">--}}
{{--        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">--}}
{{--            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">--}}
{{--                <div>--}}
{{--                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl dark:text-gray-100">The <span--}}
{{--                            class="text-green-600">skills</span> I have learned over the years</h2>--}}
{{--                    <p class="mt-3 max-w-3xl text-lg text-gray-600 dark:text-gray-200">Over the years I have collected a--}}
{{--                        few <span class="text-green-600">skills</span>. I have learned these <span--}}
{{--                            class="text-green-600">skills</span> at school, at a <span class="text-green-600">job</span> or at--}}
{{--                        an <span class="text-green-600">internship</span>. These <span class="text-green-600">skills</span>--}}
{{--                        range from a basic state to a more advanced state.</p>--}}
{{--                    <p class="mt-3 max-w-3xl text-lg text-gray-600 dark:text-gray-200">I would say that in programming--}}
{{--                        <span class="text-red-600"><i class="fa-brands fa-laravel"></i> Laravel</span> is the <span--}}
{{--                            class="text-green-600">skill</span> I am most proud of. I luckily got the chance the past years--}}
{{--                        to get better at <span class="text-red-600"><i class="fa-brands fa-laravel"></i> Laravel</span>--}}
{{--                        and learn a lot of things I didn't expect to learn.</p>--}}
{{--                    <p class="mt-3 max-w-3xl text-lg text-gray-600 dark:text-gray-200">See here what I have made with--}}
{{--                        these skills.</p>--}}
{{--                    <div class="mt-8 sm:flex">--}}
{{--                        <div class="rounded-md shadow">--}}
{{--                            <a href="{{ route('projects') }}"--}}
{{--                               class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">--}}
{{--                                All projects </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">--}}
{{--                    @foreach($skills as $skill)--}}
{{--                        <div--}}
{{--                            class="col-span-1 flex justify-center py-8 px-8 bg-gray-200 dark:bg-transparent rounded-xl">--}}
{{--                            <p class="text-2xl dark:text-gray-200">--}}
{{--                                <span style="color: {{ $skill->color }}">{!! $skill->icon !!}</span> {{ $skill->name }}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}

@include('livewire.public.about.includes.languages')
