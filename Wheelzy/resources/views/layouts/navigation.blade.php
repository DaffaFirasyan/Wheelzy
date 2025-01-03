<nav x-data="{ open: false }" class="bg-black border-b border-black">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('dashboard') }}">
                        <img src="{{ asset('images/LogoWheelzy.png') }}" alt="Logo" class="h-12">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 text-white sm:-my-px sm:ms-10 sm:flex" style="font-family: 'Arial';">
                    <x-nav-link :href="Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('dashboard')" :active="request()->routeIs('dashboard') || (Auth::user()->usertype == 'admin' && request()->routeIs('admin.dashboard'))" class="text-white">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- admin links --}}
                    @if (Auth::user()->usertype == 'admin')
                    <x-nav-link href="form" :active="request()->routeIs('admin.form')" class="text-white">
                        {{ __('Form') }}
                    </x-nav-link>

                    <x-nav-link href="katalog" :active="request()->routeIs('admin.katalog')" class="text-white">
                        {{ __('Katalog') }}
                    </x-nav-link>

                    <x-nav-link href="artikel" :active="request()->routeIs('admin.artikel')" class="text-white">
                        {{ __('Artikel') }}
                    </x-nav-link>

                    <x-nav-link href="faq" :active="request()->routeIs('admin.faq')" class="text-white">
                        {{ __('FAQ') }}
                    </x-nav-link>

                    <x-nav-link href="user" :active="request()->routeIs('admin.user')" class="text-white">
                        {{ __('User') }}
                    </x-nav-link>
                    @endif

                    {{-- user links --}}
                    @if (Auth::user()->usertype == 'user')
                    <x-nav-link href="pesan" :active="request()->routeIs('user.pesan')" class="text-white">
                        {{ __('Pesan') }}
                    </x-nav-link>

                    <x-nav-link href="katalog" :active="request()->routeIs('user.katalog')" class="text-white">
                        {{ __('Katalog') }}
                    </x-nav-link>

                    <x-nav-link href="artikel" :active="request()->routeIs('user.artikel')" class="text-white">
                        {{ __('Artikel') }}
                    </x-nav-link>

                    <x-nav-link href="faq" :active="request()->routeIs('user.faq')" class="text-white">
                        {{ __('FAQ') }}
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-black hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="me-2 flex items-center sm:hidden">
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
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-black text-white">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            {{-- admin links --}}
            @if (Auth::user()->usertype == 'admin')
            <x-responsive-nav-link href="form" :active="request()->routeIs('admin.form')" class="text-white">
                {{ __('Form') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="katalog" :active="request()->routeIs('admin.katalog')" class="text-white">
                {{ __('Katalog') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="artikel" :active="request()->routeIs('admin.artikel')" class="text-white">
                {{ __('Artikel') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="faq" :active="request()->routeIs('admin.faq')" class="text-white">
                {{ __('FAQ') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="user" :active="request()->routeIs('admin.user')" class="text-white">
                {{ __('User') }}
            </x-responsive-nav-link>
            @endif

            {{-- user links --}}
            @if (Auth::user()->usertype == 'user')
            <x-responsive-nav-link href="pesan" :active="request()->routeIs('user.pesan')" class="text-white">
                {{ __('Pesan') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="katalog" :active="request()->routeIs('user.katalog')" class="text-white">
                {{ __('Katalog') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="artikel" :active="request()->routeIs('user.artikel')" class="text-white">
                {{ __('Artikel') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="faq" :active="request()->routeIs('user.faq')" class="text-white">
                {{ __('FAQ') }}
            </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-700">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" class="text-white"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
