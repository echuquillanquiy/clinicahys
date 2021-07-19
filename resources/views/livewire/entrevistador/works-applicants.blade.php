<div>
    <h1 class="text-2xl font-bold mb-4">POSTULANTES AL TRABAJO</h1>
    <x-table-responsive>
        <div class="px-6 py-4">
            <input wire:model="search" type="text" class="w-full flex-1 shadow-sm rounded-lg" placeholder="Ingrese el nombre de postulante">
        </div>
        @if($applicants->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Correo electronico
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Dirección
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha de nacimiento
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Celular
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Contacto
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($applicants as $applicant)
                    <tr>

                        <td class="px-6 py-4 whitespace-normal">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ $applicant->profile_photo_url }}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $applicant->name }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $applicant->email }}</div>
                        </td>

                        @isset($applicant->profile_applicant)
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-gray-900">{{ $applicant->profile_applicant->address }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $applicant->profile_applicant->birthday }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $applicant->profile_applicant->phone }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-gray-900">{{ $applicant->profile_applicant->name_contact }} - {{ $applicant->profile_applicant->phone_contact }}</div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ Storage::url($applicant->profile_applicant->cv) }}" class="text-indigo-600 hover:text-indigo-900 cursor-pointer" target="_blank">
                                    <i class="fas fa-file fa-2x"></i>
                                </a>
                            </td>
                        @endisset
                    </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>

        @else
            <div class="px-6 py-4">
                Aún no hay postulantes... :'(
            </div>
        @endif

        <div class="px-6 py-4">
            {{ $applicants->links() }}
        </div>
    </x-table-responsive>
</div>
