<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- LEWA STRONA -->
            <div class="flex">
                <!-- LOGO -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('shop.index') }}">
                        <img
                            src="{{ asset('images/logo.png') }}"
                            alt="Logo sklepu"
                            class="h-9 w-auto"
                            style="height: 140px; width: auto;"
                        />
                    </a>
                </div>

                <!-- LINKI -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    {{-- SKLEP – wszyscy --}}
                    <x-nav-link :href="route('shop.index')" :active="request()->routeIs('shop.index')">
                        Sklep
                    </x-nav-link>

                    {{-- PANEL ADMINA – tylko admin --}}
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.*')">
                                Panel Administratora
                            </x-nav-link>

                        @elseif(auth()->user()->role === 'moderator')
                            <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.*')">
                                Panel Moderatora
                            </x-nav-link>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- PRAWA STRONA -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @auth
                    <a href="{{ route('cart.index') }}"
                    class="relative text-gray-700 hover:text-indigo-600">
                        🛒
                        @php
                            $cartCount = collect(session('cart', []))->sum('quantity');
                        @endphp

                        @if ($cartCount > 0)
                            <span class="absolute -top-2 -right-3 bg-red-600 text-white text-xs
                                        rounded-full px-2 py-0.5">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent
                                           text-sm leading-4 font-medium rounded-md
                                           text-gray-700 bg-white hover:text-gray-900
                                           focus:outline-none transition">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293
                                                 a1 1 0 111.414 1.414l-4 4a1 1 0
                                                 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                Profil
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('orders.index')">
                                    Zamówienia
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Wyloguj
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="space-x-4">
                        <a href="{{ route('login') }}" class="btn">Zaloguj się</a>
                        <a href="{{ route('register') }}" class="btn">Rejestracja</a>
                    </div>
                @endauth
            </div>

            <!-- HAMBURGER -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md
                               text-gray-400 hover:text-gray-500 hover:bg-gray-100
                               focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }"
                              class="inline-flex" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }"
                              class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MOBILE -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('shop.index')">
                Sklep
            </x-responsive-nav-link>

            @auth
                @if(Auth::user()->role === 'admin')
                    <x-responsive-nav-link :href="route('admin.dashboard')">
                        Panel administratora
                    </x-responsive-nav-link>
                @endif
            @endauth
        </div>
    </div>
</nav>
