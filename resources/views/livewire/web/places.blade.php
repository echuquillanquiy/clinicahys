<div class="container py-8">
    @if(session('info'))
        <div class="text-md py-2 bg-emerald-500 text-white rounded-lg text-center mb-4" role="alert">
            <strong> Éxito!</strong> {{ session('info') }}
        </div>
    @endif
    <x-table-responsive>
        <div class="px-6 p-4 flex">
            <input wire:model="search" type="text" class="w-full flex-1 shadow-sm rounded-lg" placeholder="Ingrese el nombre del servicio">
            @can('Crear sedes')
                <a class="btn btn-danger ml-2" href="{{ route('places.create') }}">Crear nueva sede</a>
            @endcan
        </div>
        @if($places->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Dirección
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Correo electronico
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        telefono
                    </th>
                    @can('Editar sedes')
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    @endcan
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($places as $place)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ Storage::url($place->image) }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $place->name }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{!! Str::limit($place->address, 35) !!}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $place->email }}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $place->phone }}</div>
                        </td>

                        @can('Editar sedes')
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('places.edit', $place) }}" class="btn btn-primary hover:text-black">Editar</a>
                            </td>
                        @endcan

                        @can('Eliminar sedes')
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form action="{{ route('places.destroy', $place) }}" method="POST">
                                    @method('delete')
                                    @csrf

                                    <button onclick="return confirm('¿ESTAS SEGURO DE ELIMINAR LA SEDE: {{ $place->name }}?');" type="submit" class="btn btn-danger hover:text-black">Eliminar</button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No hay servicios activos... :'(
            </div>
        @endif

        <div class="px-6 py-4">
            {{ $places->links() }}
        </div>
    </x-table-responsive>
</div>
