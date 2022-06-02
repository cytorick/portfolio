<x-guest-layout>

    @section('title', $internship->company)

    <div class="bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:py-12 sm:px-6 lg:px-8">

            <div class="md:grid md:grid-cols-4 lg:gap-x-6 xl:gap-x-8 ">

                {{-- SIDEBAR NAVIGATION --}}
                @include('pages.public.experience.internship.partials.sidenav')

                {{-- CONTENT PANEL --}}
                <div class="md:col-span-3">

                    @hasSection('content')
                        @yield('content')
                    @endif

                </div>

            </div>

        </div>
    </div>

</x-guest-layout>
