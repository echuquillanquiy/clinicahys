<x-app-layout>

    <section class="bg-gray-700 py-12 mb-6">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                @isset($work->image)
                    <img src="{{ Storage::url( $work->image->url) }}" class="h-72 w-full object-cover object-center rounded-lg">
                @else
                    <img id="picture" class="w-full h-60 object-cover object-center" src="https://images.pexels.com/photos/40992/man-iraq-men-portrait-40992.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                @endisset
            </figure>

            <div class="text-white">
                <h1 class="text-4xl">{{ $work->title }}</h1>
                <h2 class="text-xl mb-3">{{ $work->subtitle }}</h2>

                <p class="mb-3"> <i class="fas fa-tags mr-3"></i> Categoría: {{ $work->category->name }}</p>
                <p class="mb-3"> <i class="fas fa-map-marked-alt mr-3"></i> Sede: {{ $work->place->name }}</p>
                <p class="mb-3"> <i class="fas fa-business-time mr-3"></i> Tipo: {{ $work->type->name }}</p>
                <p class="mb-3"> <i class="fas fa-users mr-3"></i> Postulantes: {{ $work->applicants_count }}</p>

                <p class="mb-3"> <i class="fas fa-calendar-alt text-green-400 mr-3"></i> Inicio: {{ $work->start }}</p>
                <p class="mb-3"> <i class="fas fa-calendar-alt text-red-400 mr-3"></i> Fin: {{ $work->end }}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">

        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-4">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Descripción</h1>
                    <p>{!! $work->description !!}</p>
                </div>
            </section>

            <section class="card mb-2">
                <div class="card-body">
                    <h1 class="font-bold text-2xl">Requisitos</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach($work->requirements as $requirement)

                            <li class="text-gray-700 text-base">
                                <i class="fas fa-check mr-2"></i> {{ $requirement->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="card">
                <div class="card-body">
                    <figure>
                        {!! $work->place->iframe !!}
                    </figure>
                </div>
            </section>
        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{ asset('img/logos/logo.png') }}" alt="CLINICA H&S">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-base">CLINICA H&S OCCUPATIONAL SAC</h1>
                        </div>
                    </div>

                    @can('applied', $work)

                        <a href="{{ route('works.index') }}" class="btn btn-primary btn-block mt-4">Ya postulaste a este trabajo</a>

                    @else
                        <form action="{{ route('works.applied', $work) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block mt-4">Postular a este trabajo</button>
                        </form>
                    @endcan
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ Storage::url($similar->image->url) }}" alt="">

                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{ route('works.show', $similar) }}">{{ Str::limit($similar->title, 20) }}</a>
                            </h1>

                            <div class="flex items-center">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg mb-2" src="{{ asset('img/logos/logo.png') }}" alt="CLINICA H&S">
                                <p class="text-gray-700 text-xs ml-2">H&S OCCUPATIONAL SAC</p>
                            </div>
                            <p class="text-gray-700 text-xs ml-2 mb-2"> <i class="fas fa-map-marked-alt mr-3"></i> Sede: {{ $similar->place->name }}</p>
                            <p class="text-gray-700 text-xs ml-2"> <i class="fas fa-calendar-alt text-green-400 mr-3"></i> Inico: {{ $similar->start }}</p>
                            <p class="text-gray-700 text-xs ml-2"> <i class="fas fa-calendar-alt text-red-400 mr-3"></i> Fin: {{ $similar->end }}</p>
                        </div>
                    </article>
                @endforeach
            </aside>
        </div>

    </div>

</x-app-layout>
