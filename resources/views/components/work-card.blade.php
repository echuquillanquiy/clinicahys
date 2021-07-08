@props(['work'])

<article class="card">
    @isset($work->image)
        <img class="h-64 w-full object-cover" src="{{ Storage::url($work->image->url) }}" alt="{{ $work->title }}">
    @else
        <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/40992/man-iraq-men-portrait-40992.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
    @endisset

    <div class="card-body">
        <h1 class="card-title">{{ Str::limit($work->title, 40) }}</h1>
        <p class="text-gray-500 text-sm mb-2"><span class="font-bold">Tipo: </span> {{ $work->type->name }}</p>
        <p class="text-gray-500 text-sm mb-2"><span class="font-bold">Categoría: </span>{{ $work->category->name }}</p>
        <p class="text-gray-500 text-sm mb-2"><span class="font-bold">Sede: </span>{{ $work->place->name }}</p>

        <div class="flex mb-4">
            <p class="text-sm text-gray-500">Total de Postulantes</p>
            <p class="text-sm text-orange-400 ml-auto">
                <i class="fas fa-users"></i>
                ( {{$work->applicants_count}} )
            </p>
        </div>


        <a href="{{ route('works.show', $work) }}" class="block w-full text-center bg-red-500 text-white font-bold py-2 px-4 rounded" target="_blank">
            Más información
        </a>

    </div>
</article>
