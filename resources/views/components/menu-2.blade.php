@php
    $nav_links = [
        [
            'name' => 'Inicio',
            'route' => route('home'),
            'active' => request()->routeIs('home')
        ],
        [
            'name' => 'Trabaja con nosotros',
            'route' => route('works.index'),
            'active' => request()->routeIs('works.*')
        ],
        [
            'name' => 'Cotizaciones',
            'route' => route('cotizaciones'),
            'active' => request()->routeIs('cotizaciones')
        ],
        /*[
            'name' => 'Programaciones',
            'route' => "#",
            'active' => null
        ],*/
        [
            'name' => 'Historia Online',
            'route' => "http://clientes.clinicahys.com:8021",
            'active' => null,
        ]
    ];
@endphp

<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div>
        <div class="flex justify-between h-24">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex">
                    @foreach( $nav_links as $nav_link)
                        <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                            {{ $nav_link['name'] }}
                        </x-jet-nav-link>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</nav>
