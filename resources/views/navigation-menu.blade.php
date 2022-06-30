<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-900 dark:border-gray-700 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                        <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                    </a>
                    <div class=""></div>
                </div>
            </div>

            <div class="hidden sm:flex">

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.schools') }}" :active="request()->routeIs('admin.schools', 'admin.create.schools', 'admin.edit.schools')">
                        {{ __('Schools') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.jobs') }}" :active="request()->routeIs('admin.jobs', 'admin.create.jobs', 'admin.edit.jobs')">
                        {{ __('Jobs') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.internships') }}"
                                    :active="request()->routeIs('admin.internships', 'admin.create.internships', 'admin.edit.internships')">
                        {{ __('Internships') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.certificates') }}"
                                    :active="request()->routeIs('admin.certificates', 'admin.create.certificates', 'admin.edit.certificates')">
                        {{ __('Certificates') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('admin.projects') }}" :active="request()->routeIs('admin.projects', 'admin.create.projects', 'admin.edit.projects')">
                        {{ __('Projects') }}
                    </x-jet-nav-link>
                </div>

                <x-nav.dropdown-group class="ml-10 shadow-xl">
                    <x-nav.dropdown-button :active="request()->routeIs('admin.languages', 'admin.create.languages', 'admin.edit.languages', 'admin.skills', 'admin.create.skills', 'admin.edit.skills', 'admin.links', 'admin.create.link', 'admin.edit.link')">
                        {{ __('Other') }}
                    </x-nav.dropdown-button>
                    <x-nav.dropdown-panel>
                        <x-nav.dropdown-item href="{{ route('admin.languages') }}">
                            <x-slot name="title">{{ __('Languages') }}</x-slot>
                            <x-slot
                                name="description">{{ __('Here you can add, edit and view the languages') }}</x-slot>
                        </x-nav.dropdown-item>
                        <x-nav.dropdown-item href="{{ route('admin.skills') }}">
                            <x-slot name="title">{{ __('Skills') }}</x-slot>
                            <x-slot name="description">{{ __('Here you can add, edit and view the skills.') }}</x-slot>
                        </x-nav.dropdown-item>
                        <x-nav.dropdown-item href="{{ route('admin.links') }}">
                            <x-slot name="title">{{ __('Links') }}</x-slot>
                            <x-slot name="description">{{ __('Here you can add, edit and view the links.') }}</x-slot>
                        </x-nav.dropdown-item>
                        <x-nav.dropdown-item href="{{ route('admin.texts') }}">
                            <x-slot name="title">{{ __('Texts') }}</x-slot>
                            <x-slot name="description">{{ __('Here you can edit the static text on the website.') }}</x-slot>
                        </x-nav.dropdown-item>
                    </x-nav.dropdown-panel>
                </x-nav.dropdown-group>

            </div>


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('home') }}"
                   x-tooltip.raw="Public Website"
                   class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-orange-400 mr-2">
                    <i class="fa-solid fa-hat-wizard"></i>
                </a>
                @livewire('admin.tools.flush-cache')
                <a href="{{ route('profile.show') }}"
                   x-tooltip.raw="Profile"
                   class="{{ request()->routeIs('profile.show') ? 'inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md hover:bg-gray-800 bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 text-white hover:text-yellow-400 mr-2' : 'inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-yellow-400 mr-2' }}">
                    <i class="fa-solid fa-user"></i>
                </a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                       x-tooltip.raw="Log out"
                       class="inline-flex items-center px-4 py-2.5 border border-transparent text-base font-medium rounded-md bg-gray-800 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 hover:text-white text-red-600 mr-2">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </form>
                <!-- Settings Dropdown -->
                <div class="ml-3 relative justify-end">

                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                           :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                               @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
