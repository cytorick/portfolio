<header x-data="{ open: false }" class="border-gray-200 px-4 sm:px-4 py-2.5 rounded bg-gray-200 dark:bg-gray-900 py-4">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-700 lg:px-8">
        <div class="relative h-16 flex justify-between">
            <div class="relative z-10 px-2 flex lg:px-0">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <i class="fa-solid fa-r h-8 block text-green-500 text-2xl"></i>
                        <i class="fa-solid fa-v h-8 block text-green-500 text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="relative z-10 flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                        x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open menu</span>
                    <svg x-description="Icon when menu is closed.

Heroicon name: outline/menu" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6"
                         :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-description="Icon when menu is open.

Heroicon name: outline/x" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6"
                         :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">


                <!-- Profile dropdown -->
                <div x-data="Components.menu({ open: false })" x-init="init()"
                     @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                     class="flex-shrink-0 relative ml-4">
                    <div>
                        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                        @foreach($links as $link)
                            <a href="{{ $link->link }}"
                               class="mx-2 hover:text-green-600" target="_blank">{!! $link->icon !!}</a>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        <nav class="hidden lg:py-2 lg:flex lg:space-x-8 justify-center" aria-label="Global">

            <a href="{{ route('home') }}"
               class="{{ (request()->is('/')) ? 'bg-green-500 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' : 'dark:text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                Home
            </a>
            <a href="{{ route('about') }}"
               class="{{ (request()->is('about*')) ? 'bg-green-500 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' : 'dark:text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                About me
            </a>

            <a href="{{ route('experience') }}"
               class="{{ (request()->is('experience*')) ? 'bg-green-500 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' : 'dark:text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                Experience
            </a>

            <a href="{{ route('projects') }}"
               class="{{ (request()->is('projects*')) ? 'bg-green-500 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' : 'dark:text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                Projects
            </a>

            <a href="{{ route('contact') }}"
               class="{{ (request()->is('contact*')) ? 'bg-green-500 text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' : 'dark:text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                Contact
            </a>

        </nav>
        @auth()
            <nav class="hidden lg:py-2 lg:flex lg:space-x-8 justify-center">
                <span class="mt-2 inline-flex">
                    <div class="tooltip">
                        <a href="{{ route('dashboard') }}"
                           x-tooltip.raw="Admin Dashboard"
                           class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-orange-400 mr-2">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </a>
                    </div>
                    @livewire('admin.tools.flush-cache')
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <div class="tooltip">
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                               x-tooltip.raw="Log Out"
                               class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-red-600">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </div>
                    </form>
                </span>
            </nav>
        @endauth
    </div>

    <nav x-description="Mobile menu, show/hide based on menu state." class="lg:hidden __WebInspectorHideElement__"
         aria-label="Global" id="mobile-menu" x-show="open" style="display: none;">
        <div class="pt-2 pb-3 px-2 space-y-1">

            <a href="{{ route('home') }}"
               class="{{ (request()->is('/')) ? 'bg-green-500 text-white block rounded-md py-2 px-3 text-base font-medium' : 'bg-gray-300 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Home</a>

            <a href="{{ route('about') }}"
               class="{{ (request()->is('about*')) ? 'bg-green-500 text-white block rounded-md py-2 px-3 text-base font-medium' : 'bg-gray-300 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">About
                me</a>

            <a href="{{ route('experience') }}"
               class="{{ (request()->is('experience*')) ? 'bg-green-500 text-white block rounded-md py-2 px-3 text-base font-medium' : 'bg-gray-300 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Experience</a>

            <a href="{{ route('projects') }}"
               class="{{ (request()->is('projects*')) ? 'bg-green-500 text-white block rounded-md py-2 px-3 text-base font-medium' : 'bg-gray-300 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Projects</a>

            <a href="{{ route('contact') }}"
               class="{{ (request()->is('contact*')) ? 'bg-green-500 text-white block rounded-md py-2 px-3 text-base font-medium' : 'bg-gray-300 hover:bg-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium' }}"
               aria-current="page" x-state:on="Current" x-state:off="Default"
               x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Contact</a>


        </div>
    </nav>
    <div class="text-center lg:hidden">
        @foreach(\App\Models\Link::where('archived', 0)->get() as $link)
            <a href="{{ $link->link }}"
               class="mx-2 hover:text-green-600" target="_blank">{!! $link->icon !!}</a>
        @endforeach
    </div>
</header>

