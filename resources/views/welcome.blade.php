<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/laboratory-2815641_1280.jpg')}})">
        <div class="container py-32 h-full">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white text-6xl">
                    H&S OCCUPATIONAL SAC
                </h1>

                <p class="text-white text-3xl mt-4 mb-10">
                    Soluciones Integrales en Salud Ocupacional
                </p>

                @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-8">
        <h1 class="text-trueGray-500 text-center text-4xl mb-6 font-bold">SERVICIOS</h1>

        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6 gap-y-10">
            @foreach($services as $service)
                <article>
                    <figure>
                        <img class="rounded-xl h-64 w-full object-cover object-center" src="{{ Storage::url($service->image) }}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            {{ Str::limit($service->name, 20) }}
                        </h1>
                    </header>

                    <p class="text-md text-gray-500 mt-2">{!! Str::limit($service->description, 50) !!}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-8">
        <h1 class="text-trueGray-500 text-center text-4xl mb-6 2xl:font-bold">NUESTRAS SEDES</h1>

        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-8 text-center mb-8">
            @foreach($places as $place)
                <article class="card">
                    <figure class="border border-2 rounded-lg object-cover">
                        {!! $place->iframe !!}
                    </figure>

                    <div class="card-body">
                        <header class="card-title">
                            <h1 class="text-xl text-blue-700 font-bold">
                                {{ $place->name }}
                            </h1>
                            <hr class="text-gray-600">
                        </header>

                        <div class="mt-2">
                            <p class="text-xs text-gray-500 mb-2">{{ $place->address }}</p>
                            <a class="text-sm text-gray-500" href="mailto:{{ $place->email }}">{{ $place->email }}</a>
                            <a href="tel:+{{ $place->phone }}" class="text-sm text-gray-500"> - Cel: {{ $place->phone }}</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-12 bg-sky-500 py-12">
        <h1 class="text-center text-white text-3xl">¿Estás buscando trabajo?</h1>
        <p class="text-center text-white">Dirigete al listado de trabajos y filtralos por sede, tipo o categorías</p>

        <div class="flex justify-center mt-4">
            <a href="{{ route('works.index') }}" class="bg-red-500 text-white font-bold py-2 px-4 rounded" target="_blank">
                Listado de trabajos
            </a>
        </div>
    </section>

    <section class="my-12">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS TRABAJOS PUBLICADOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Unete a nuestro equipo de trabajo.</p>

        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($works as $work)
                <x-work-card :work="$work" />
            @endforeach
        </div>
    </section>
</x-app-layout>
