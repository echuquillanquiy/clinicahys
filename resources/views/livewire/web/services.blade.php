<div class="container py-8">
    <x-table-responsive>
        <div class="px-6 py-4 flex">
            <input wire:model="search" type="text" class="w-full flex-1 shadow-sm rounded-lg" placeholder="Ingrese el nombre del servicio">

            <a class="btn btn-danger ml-2" href="{{ route('services.create') }}">Crear nuevo servicio</a>
        </div>
        @if($services->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Descripción
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($services as $service)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ Storage::url($service->image) }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $service->name }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{!! Str::limit($service->description, 50) !!}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('services.edit', $service) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                        </td>
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
            {{ $services->links() }}
        </div>
    </x-table-responsive>
</div>
