<header class="bg-emerald-400 sticky top-0 z-50" x-data="dropdown()">
    <div class="container flex items-center h-24 justify-between md:justify-start">
        <a
            x-on:click="show()"
            :class="{'bg-opacity-100 text-emerald-400' : open }"
            class="flex flex-col items-center justify-center order-last md:order-first px-14 md:px-10 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full mr-6">
            <svg class="h-12 w-12 md:h-8 md:w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-lg hidden md:block">
                Menú
            </span>
        </a>

        <div class="hidden lg:block">
            <x-menu-2 />
        </div>

        <div class="mx-2 hidden md:block">
            <x-social />
        </div>

        <div class="ml-3 relative hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            Perfil
                        </x-jet-dropdown-link>

                        @can('Ver trabajos')
                            <x-jet-dropdown-link href="{{ route('entrevistador.works.index') }}">
                                Entrevistador
                            </x-jet-dropdown-link>
                        @endcan

                        @can('Ver dashboard')
                            <x-jet-dropdown-link href="{{ route('admin.home') }}">
                                Admin
                            </x-jet-dropdown-link>
                        @endcan

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-4xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
    </div>

    <nav :class="{ 'block' : open, 'hidden' : !open }" id="navigation-menu" class="bg-trueGray-700 bg-opacity-25 w-full absolute hidden">
        {{--Menú Computador--}}
        <div class="container h-full hidden md:block">
            <div class="grid grid-cols-4 h-full relative" x-on:click.away="close()">
                <ul class="bg-white">
                    <x-menu />

                    <li class="navigation-link text-trueGray-500 hover:bg-sky-400 hover:text-white">
                        <a href="" class="py-2 px-4 text-md flex items-center">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-map-marked-alt"></i>
                            </span>
                            Sedes
                        </a>

                        <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                            <div class="grid grid-cols-4 p-4">
                                <div>
                                    <p class="text-lg font-bold text-center text-trueGray-500 m-3">Nuestras Sedes</p>

                                    <ul>
                                        @foreach($places as $place)
                                            <li>
                                                <a href="" class="text-trueGray-500 font-semibold py-1 px-4 block hover:text-green-500">
                                                    {{ $place->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-span-3">
                                    <img class="h-full w-full object-cover object-center mb-6" src="{{$place->image}}" alt="">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="navigation-link text-trueGray-500 hover:bg-sky-400 hover:text-white">
                        <a href="" class="py-2 px-4 text-md flex items-center">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-sitemap"></i>
                            </span>
                            Servicios
                        </a>

                        <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                            <div class="grid grid-cols-4 p-4">
                                <div>
                                    <p class="text-lg font-bold text-center text-trueGray-500 m-3">Nuestros servicios</p>

                                    <ul>
                                        @foreach($services as $service)
                                            <li>
                                                <a href="" class="text-trueGray-500 font-semibold py-1 px-4 block hover:text-green-500">
                                                    {{ $service->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-span-3">
                                    <img class="h-full w-full object-cover object-center" src="{{Storage::url($service->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="col-span-3 bg-gray-100">
                    <div class="grid grid-cols-4 p-4">
                        <div>
                            <p class="text-lg font-bold text-center text-trueGray-500 m-3">Nuestras Sedes</p>

                            <ul>
                                @foreach($places as $place)
                                    <li>
                                        <a href="" class="text-trueGray-500 font-semibold py-1 px-4 block hover:text-green-500">
                                            {{ $place->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-span-3">
                            <img class="h-full w-full object-cover object-center" src="{{$place->first()->image}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Menú Movil--}}

        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>

            <ul>
                <x-menu />

                <li class="text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <a href="" class="py-2 px-4 text-md flex items-center">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-map-marked-alt"></i>
                            </span>
                        Sedes
                    </a>

                    <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                        <div class="grid grid-cols-4 p-4">
                            <div>
                                <p class="text-lg font-bold text-center text-trueGray-500 m-3">Nuestras Sedes</p>

                                <ul>
                                    @foreach($places as $place)
                                        <li>
                                            <a href="" class="text-trueGray-500 font-semibold py-1 px-4 block hover:text-green-500">
                                                {{ $place->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <a href="" class="py-2 px-4 text-md flex items-center">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-sitemap"></i>
                            </span>
                        Servicios
                    </a>

                    <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                        <div class="grid grid-cols-4 p-4">
                            <div>
                                <p class="text-lg font-bold text-center text-trueGray-500 m-3">Nuestros servicios</p>

                                <ul>
                                    @foreach($services as $service)
                                        <li>
                                            <a href="" class="text-trueGray-500 font-semibold py-1 px-4 block hover:text-green-500">
                                                {{ $service->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <p class="text-trueGray-500 px-6 my-2">
                USUARIOS
            </p>

            @auth
                <a href="{{ route('profile.show') }}" class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="far fa-address-card"></i>
                    </span>
                    Perfil
                </a>

                @can('Ver trabajos')
                    <a href="{{ route('entrevistador.works.index') }}" class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                        <span class="flex justify-center w-9">
                            <i class="fas fa-user-tag text-red-500"></i>
                        </span>
                        Entrevistador
                    </a>
                @endcan

                @can('Ver dashboard')
                    <a href="{{ route('admin.home') }}" class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                        <span class="flex justify-center w-9">
                            <i class="fas fa-user-tag text-red-500"></i>
                        </span>
                        Admin
                    </a>
                @endcan

                <a href=""
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit() "
                   class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf

                </form>
            @else
                <a href="{{ route('login') }}" class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="py-2 px-4 text-md flex items-center text-trueGray-500 hover:bg-sky-400 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>
                    Registrarse
                </a>
            @endauth
        </div>
    </nav>
</header>


