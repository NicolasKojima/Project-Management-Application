<nav x-data="{ open: false }" class=" border-b border-gray-100" style="background-color: #2f3d7e; color:white !important;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('storage/image/PMS-nb.png') }}" alt="Image" class="image-size" style="max-height: 70px;">
                    </a>                
                </div>
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @if (auth()->user()->hasRole('Guest'))
                        <x-nav-link href="{{ route('profiles') }}" :active="request()->routeIs('profiles')" style="color:white;">
                                {{ __('Profiles') }}
                        </x-nav-link>
                    @endif
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color:white;">
                        {{ __('Profile') }}
                    </x-nav-link>
                    @endif
                    <x-nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')" style="color:white;">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <!-- <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')">
                        {{ __('Employees') }}
                    </x-nav-link> -->
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('calendar-display') }}" :active="request()->routeIs('calendar-display')" style="color:white;">
                        {{ __('Calendar') }}
                    </x-nav-link>
                    @endif
                    <x-nav-link href="{{ route('timetable') }}" :active="request()->routeIs('timetable')" style="color:white;">
                        {{ __('Timetable') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact-form') }}" :active="request()->routeIs('contact-form')" style="color:white;">
                        {{ __('Contact-Us') }}
                    </x-nav-link>
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('profiles') }}" :active="request()->routeIs('profiles')" style="color:white;">
                        {{ __('Profiles') }}
                    </x-nav-link>
                    @endif
                    @if (auth()->user()->hasRole('Admin'))
                        <x-nav-link href="{{ route('permissions') }}" :active="request()->routeIs('permissions')" style="color:white;">
                            {{ __('Permissions') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <div class=" sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-white" stlye="color:white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm white">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div style="margin:1vw; border: grey 1px solid;">
                    @if (auth()->user()->hasRole('Guest'))
                        <x-nav-link href="{{ route('profiles') }}" :active="request()->routeIs('profiles')" >
                            {{ __('Profiles') }}
                        </x-nav-link>
                    @endif
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Profile') }}
                    </x-nav-link>
                    @endif
                    <x-nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <!-- <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')">
                        {{ __('Employees') }}
                    </x-nav-link> -->
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('calendar-display') }}" :active="request()->routeIs('calendar-display')">
                        {{ __('Calendar') }}
                    </x-nav-link>
                    @endif
                    <x-nav-link href="{{ route('timetable') }}" :active="request()->routeIs('timetable')">
                        {{ __('Timetable') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact-form') }}" :active="request()->routeIs('contact-form')">
                        {{ __('Contact-Us') }}
                    </x-nav-link>
                    @if (!auth()->user()->hasRole('Guest'))
                    <x-nav-link href="{{ route('profiles') }}" :active="request()->routeIs('profiles')">
                        {{ __('Profiles') }}
                    </x-nav-link>
                    @endif
                    @if (auth()->user()->hasRole('Admin'))
                        <x-nav-link href="{{ route('permissions') }}" :active="request()->routeIs('permissions')">
                            {{ __('Permissions') }}
                        </x-nav-link>
                    @endif
                    </div>
                </div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
