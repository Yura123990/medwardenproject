<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-12 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="font-bold text-xl">{{ config('app.name', 'MedWarden') }}</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    {{-- <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}
                    <div class="relative inline-block mt-6">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-black-700 hover:text-teal-900 hover:border-gray-300 focus:outline-none focus:text-gray-900 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ __('Діагностика') }}</div>
                    
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-4-4h8l-4 4z"/></svg>
                                    </div>
                                </button>
                            </x-slot>
                    
                            <x-slot name="content">
                                <!-- Dropdown items -->
                                <div class="block px-4 py-2 text-xs text-gray-700">
                                    {{ __('Виберіть категорію') }}
                                </div>
                                <x-jet-dropdown-link href="{{ route('viral') }}">
                                    {{ __('Вірусні захворювання') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('gastroenterological') }}">
                                    {{ __('Гастроентерологічні захворювання') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('cardiovascular') }}">
                                    {{ __('Серцево-судинні захворювання') }}
                                </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <div class="relative inline-block mt-6">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-black-700 hover:text-gray-900 hover:border-gray-300 focus:outline-none focus:text-gray-900 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div class="hover:text-gray-900 hover:border-gray-300">{{ __('Якість життя') }}</div>
                    
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-4-4h8l-4 4z"/></svg>
                                    </div>
                                </button>
                            </x-slot>
                    
                            <x-slot name="content">
                                <!-- Dropdown items -->
                                <div class="block px-4 py-2 text-xs text-gray-700">
                                    {{ __('Виберіть категорію') }}
                                </div>
                                <x-jet-dropdown-link href="{{ route('indexmassbody') }}">
                                    {{ __('Індекс маси тіла') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('nicotin') }}">
                                    {{ __('Оцінка нікотинової залежності') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('diabetes') }}">
                                    {{ __('Оцінка ризику цукрового діабету') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('stress') }}">
                                    {{ __('Рівень власного стресу та стресостійкості') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('psychoemotional') }}">
                                    {{ __('Діагностика психоемоційної напруги') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('lifequality') }}">
                                    {{ __('Визначення якості життя') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('depression') }}">
                                    {{ __('Визначення важкості депресії') }}
                                </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <x-jet-nav-link class="text-black" href="{{ route('home') }}">
                        {{ __("Зв'язатися із лікарем") }}
                    </x-jet-nav-link>
                    @if (auth()->user()->role === 'admin')<x-jet-nav-link class="text-black" href="{{ route('change-user-role') }}">
                        {{ __("Панель адміна") }}
                    </x-jet-nav-link>@endif
                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'doctor')<x-jet-nav-link class="text-black" href="{{ route('d_viral') }}">
                        {{ __("Кабінет лікаря") }}
                    </x-jet-nav-link>@endif
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full items-center focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out py-1 px-2">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <div class="ml-3 font-semibold">{{ Auth::user()->name }}</div>
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>
                    

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Управління акаунтом') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Мій профіль') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Історія діагностики') }}
                        </div>
                        <x-jet-dropdown-link href="{{ route('viral-record') }}">
                            {{ __('Записи вірусних захворювань') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('cardio-record') }}">
                            {{ __('Записи серцево-судинних захворювань') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Оглянути чати') }}
                            </div>
                            
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Створити чат') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('searchTeam') }}">
                                    {{ __('Знайти чат') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Вийти') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
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
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('home')">
                {{ __('Мої звернення') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('viral') }}" :active="request()->routeIs('viral')">
                {{ __('Діагностика') }}
            </x-jet-responsive-nav-link>

            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'doctor')<x-jet-responsive-nav-link href="{{ route('d_viral') }}">
                {{ __("Кабінет лікаря") }}
            </x-jet-responsive-nav-link>@endif

            <div class="relative inline-block mt-6 hover:bg-gray-100">
                <x-jet-dropdown>
                    <x-slot name="trigger">
                        <button class=" font-b px-4 focus:outline-none transition duration-150 ease-in-out">
                            <div class="inline-block pt-2 pb-3 space-y-1 text-gray-600">{{ __('Якість життя') }}
                                <svg class="inline-block fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-4-4h8l-4 4z"/></svg>
                            </div>
                        </button>
                    </x-slot>
            
                    <x-slot name="content">
                        <!-- Dropdown items -->
                        <div class="block px-4 py-2 text-xs text-gray-700">
                            {{ __('Виберіть категорію') }}
                        </div>
                        <x-jet-dropdown-link href="{{ route('indexmassbody') }}">
                            {{ __('Індекс маси тіла') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('nicotin') }}">
                            {{ __('Оцінка нікотинової залежності') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('diabetes') }}">
                            {{ __('Оцінка ризику цукрового діабету') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('stress') }}">
                            {{ __('Рівень власного стресу та стресостійкості') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('psychoemotional') }}">
                            {{ __('Діагностика психоемоційної напруги') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('lifequality') }}">
                            {{ __('Визначення якості життя') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('depression') }}">
                            {{ __('Визначення важкості депресії') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Профіль') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Вийти') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Керувати зверненнями') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Створити звернення') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('searchTeam') }}">
                        {{ __('Пошук звернень') }}
                    </x-jet-responsive-nav-link>
                @endif
            </div>
        </div>
    </div>
</nav>
