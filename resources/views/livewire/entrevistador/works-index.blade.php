<div class="container py-8">
    <x-table-responsive>
        <div class="px-6 py-4 flex">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-input flex-1 shadow-sm rounded-lg" placeholder="Ingrese el nombre de su publicación">

            <a class="btn btn-danger ml-2" href="{{ route('entrevistador.works.create') }}">Crear nueva publicación</a>
        </div>
        @if($works->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Postulantes
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Sede
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($works as $work)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    @isset($work->image)
                                        <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ Storage::url($work->image->url) }}" alt="">
                                    @else
                                        <img class="w-10 h-10 rounded-full object-cover object-center" src="https://images.pexels.com/photos/40992/man-iraq-men-portrait-40992.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                    @endisset
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $work->title }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $work->category->name }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $work->applicants_count }}</div>
                            <div class="text-sm text-gray-500">Postulantes</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            @switch($work->status)
                                @case(1)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-ful bg-red-100 text-red-800">
                                    BORRADOR
                                </span>
                                @break
                                @case(2)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    PUBLICADO
                                </span>
                                @break
                            @endswitch
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $work->place->name }}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('entrevistador.works.edit', $work) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>

        @else
            <div class="px-6 py-4">
                No hay ninguna coincidencia.
            </div>
        @endif

        <div class="px-6 py-4">
            {{ $works->links() }}
        </div>
    </x-table-responsive>

</div>
