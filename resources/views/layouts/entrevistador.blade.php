<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/logos/logo.png') }}" type="image/gif" sizes="16x16">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')

            <!-- Page Content -->
                <div class="container py-8 grid grid-cols-5">
                    <aside>
                        <h1 class="font-bold text-lg mb-4">Edición de la publicación</h1>

                        <ul class="text-sm text-gray-600">
                            <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.works.edit', $work) border-indigo-400 @else border-transparent @endif pl-2">
                                <a href="{{ route('entrevistador.works.edit', $work) }}">
                                    Información del trabajo
                                </a>
                            </li>
                            <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.works.requirements', $work) border-indigo-400 @else border-transparent @endif pl-2">
                                <a href="{{ route('entrevistador.works.requirements', $work) }}">
                                    Requisitos del trabajo
                                </a>
                            </li>
                            <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.works.applicants', $work) border-indigo-400 @else border-transparent @endif pl-2">
                                <a href="{{ route('entrevistador.works.applicants', $work) }}">
                                    Postulantes
                                </a>
                            </li>

                            @if($work->status == 1)
                                <div class="mt-8">
                                    <form action="{{ route('entrevistador.works.status', $work) }}" method=POST>
                                        @csrf

                                        <button type="submit" class="btn btn-danger">PUBLICAR</button>
                                    </form>
                                </div>
                            @else
                                <div class="mt-8">
                                    <a class="btn btn-primary">PUBLICADO</a>
                                </div>
                            @endif
                        </ul>
                    </aside>

                    <div class="col-span-4 card">
                        <main class="card-body text-gray-600">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
            {{ $js }}
        @endisset
        <script>
            function dropdown(){
                return {
                    open: false,
                    show(){
                        if (this.open){
                            this.open = false;
                            document.getElementsByTagName('html')[0].style.overflow = 'auto';
                        } else {
                            this.open = true;
                            document.getElementsByTagName('html')[0].style.overflow = 'hidden';
                        }
                    },
                    close(){
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = 'auto';
                    }
                }
            }
        </script>
    </body>
</html>
