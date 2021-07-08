<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/work/job-4131482_1920.jpg')}})">
        <div class="container py-48 h-full">
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

    @livewire('works-index')
</x-app-layout>
