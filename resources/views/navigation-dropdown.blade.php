

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow">
    <!-- Primary Navigation Menu -->
    <div class="container">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-blog mr-1"></i>
                        {{ __('views.nav-link-1-navigation-dropdown') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('logro') }}" :active="request()->routeIs('logro')">
                        <i class="fas fa-trophy mr-1"></i>
                        {{ __('views.nav-link-2-navigation-dropdown') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-select-idioma />
                 @auth
                {{-- <x-cleep-counter /> --}}

                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('views.dropdown-1-navigation-dropdown') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            <i class="far fa-user"></i>
                            {{ __('views.dropdown-2-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('user.cleepcard.index') }}">
                            <i class="fas fa-address-card"></i>
                            {{ __('views.dropdown-4-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('centro') }}">
                            <i class="fas fa-university"></i>
                            {{ __('Cursos') }}
                        </x-jet-dropdown-link>

                        @can ('acceso_centroEstudios')
                        <x-jet-dropdown-link href="{{ route('instructor.courses.portada') }}">
                            <i class="fas fa-fw fa-home"></i>
                            {{ __('views.dropdown-13-navigation-dropdown') }}
                        </x-jet-dropdown-link>
                        @endcan

                        @can ('acceso_empresarios')
                        <x-jet-dropdown-link href="{{ route('empresa.companies.index') }}">
                            <i class="fas fa-fw fa-home"></i>
                            {{ __('views.dropdown-14-navigation-dropdown') }}
                        </x-jet-dropdown-link>
                        @endcan

                        @can ('acceso_entidades')
                        <x-jet-dropdown-link href="{{ route('entidad.entidades.index') }}">
                            <i class="fas fa-fw fa-home"></i>
                            {{ __('views.dropdown-15-navigation-dropdown') }}
                        </x-jet-dropdown-link>
                        @endcan

                        @can ('acceso_organizacion')
                            
                        <x-jet-dropdown-link href="{{ route('user.postsblog.index') }}">
                            <i class="fas fa-bullhorn"></i>
                            {{ __('Publicaciones') }}
                        </x-jet-dropdown-link>
                        @endcan
                        
                        @cannot('acceso_organizacion')
                            
                        <x-jet-dropdown-link href="{{ route('users.achievement-list') }}">
                            <i class="fas fa-bullhorn"></i>
                            {{ __('Publicaciones') }}
                        </x-jet-dropdown-link>

                        @endcannot

                        <x-jet-dropdown-link href="{{ route('centers') }}">
                            <i class="fas fa-school"></i>
                            {{ __('views.dropdown-12-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('companies') }}">
                            <i class="fas fa-building"></i>
                            {{ __('views.dropdown-16-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('entities') }}">
                            <i class="fas fa-people-arrows"></i>
                            {{ __('views.dropdown-17-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        @if (auth()->user()->is_admin)
                            
                        <x-jet-dropdown-link href="{{ route('admin.home') }}">
                            <i class="fas fa-toolbox"></i>
                            {{ __('views.dropdown-5-navigation-dropdown') }}
                        </x-jet-dropdown-link>

                        @endif

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('views.dropdown-6-navigation-dropdown') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('views.dropdown-7-navigation-dropdown') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('views.dropdown-8-navigation-dropdown') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('views.dropdown-9-navigation-dropdown') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('views.dropdown-10-navigation-dropdown') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('views.dropdown-11-navigation-dropdown') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
               
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <x-select-idioma /> 
        <div class="pt-2 pb-3 space-y-1">
            
            
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="fas fa-blog mr-1"></i>
                {{ __('views.nav-link-1-navigation-dropdown') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('logro') }}" :active="request()->routeIs('logro')">
                <i class="fas fa-trophy mr-1"></i>
                {{ __('views.nav-link-2-navigation-dropdown') }}
            </x-jet-responsive-nav-link>
        </div>
        
        <!-- Responsive Settings Options -->
        
        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
          
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->

                
                {{-- <x-cleep-counter /> --}}

                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    <i class="far fa-user"></i>
                    {{ __('views.dropdown-2-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('user.cleepcard.index') }}" :active="request()->routeIs('user.cleepcard.index')">
                    <i class="fas fa-address-card"></i>
                    {{ __('views.dropdown-4-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('centro') }}" :active="request()->routeIs('centro')">
                    <i class="fas fa-university"></i>
                    {{ __('Cursos') }}
                </x-jet-responsive-nav-link>

                @can('acceso_centro')
                <x-jet-responsive-nav-link href="{{ route('instructor.courses.portada') }}" :active="request()->routeIs('instructor.courses.portada')">
                    <i class="fas fa-fw fa-home"></i>
                    {{ __('views.dropdown-13-navigation-dropdown') }}
                </x-jet-responsive-nav-link>
                @endcan

                @can('acceso_empresa')
                <x-jet-responsive-nav-link href="{{ route('empresa.companies.index') }}" :active="request()->routeIs('empresa.companies.index')">
                    <i class="fas fa-fw fa-home"></i>
                    {{ __('views.dropdown-14-navigation-dropdown') }}
                </x-jet-responsive-nav-link>
                @endcan

                @can('acceso_entidad')
                <x-jet-responsive-nav-link href="{{ route('entidad.entidades.index') }}" :active="request()->routeIs('entidad.entidades.index')">
                    <i class="fas fa-fw fa-home"></i>
                    {{ __('views.dropdown-15-navigation-dropdown') }}
                </x-jet-responsive-nav-link>
                @endcan

                <x-jet-responsive-nav-link href="{{ route('user.postsblog.index') }}" :active="request()->routeIs('user.postsblog.index')">
                    <i class="fas fa-bullhorn"></i>
                    {{ __('Publicaciones') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('centers') }}" :active="request()->routeIs('centers')">
                    <i class="fas fa-school"></i>
                    {{ __('views.dropdown-12-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('companies') }}" :active="request()->routeIs('companies')">
                    <i class="fas fa-building"></i>
                    {{ __('views.dropdown-16-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('entities') }}" :active="request()->routeIs('entities')">
                    <i class="fas fa-people-arrows"></i>
                    {{ __('views.dropdown-17-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                @if (auth()->user()->is_admin)

                <x-jet-responsive-nav-link href="{{ route('admin.home') }}"
                    :active="request()->routeIs('admin.home')">
                    <i class="fas fa-toolbox"></i>
                    {{ __('views.dropdown-5-navigation-dropdown') }}
                </x-jet-responsive-nav-link>

                @endif

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                        :active="request()->routeIs('api-tokens.index')">
                        {{ __('views.dropdown-6-navigation-dropdown') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('views.dropdown-11-navigation-dropdown') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('views.dropdown-7-navigation-dropdown') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('views.dropdown-8-navigation-dropdown') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                        :active="request()->routeIs('teams.create')">
                        {{ __('views.dropdown-9-navigation-dropdown') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('views.dropdown-10-navigation-dropdown') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    @endauth
    </div>

    
</nav>
