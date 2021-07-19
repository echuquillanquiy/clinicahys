<x-app-layout>
    <div class="container py-4">
        <div class="card">
            @isset($user->profile_applicant->user_id)
                <div class="card-header text-center p-4">
                    <h1 class="text-gray-500 text-4xl font-bold">DATOS PERSONALES</h1>
                </div>
                <hr class="text-gray-200 mt-2">
                <div class="card-body grid grid-cols-1 lg:grid-cols-5 text-center flex items-center justify-between">
                    <div class="col-span-3">
                        <h1 class="text-gray-500 font-bold p-2 text-3xl">{{ $user->name }}</h1>
                        <p class="text-gray-500 text-xl mt-4 mb-2"><strong>Dirección: </strong> {{ $user->profile_applicant->address }}</p>
                        <p class="text-gray-500 text-xl mb-2"><strong>Fecha de Nacimiento: </strong> {{ $user->profile_applicant->birthday }}</p>
                        <p class="text-gray-500 text-xl mb-2"><strong>N° Celular: </strong> {{ $user->profile_applicant->phone }}</p>
                        <p class="text-gray-500 text-xl mb-2"><strong>Correo: </strong> {{ $user->email }}</p>

                        <hr class="text-gray-200 p-2">
                        <div class="items-center col-span-1">
                            <p class="text-gray-500 text-xl mb-2"><strong>Persona de contacto: </strong> {{ $user->profile_applicant->name_contact }}</p>
                            <p class="text-gray-500 text-xl mb-2"><strong>N° celular de contacto: </strong> {{ $user->profile_applicant->phone_contact}}</p>
                            <a href="{{ Storage::url($user->profile_applicant->cv) }}" class="text-blue-500" target="_blank">
                                <i class="fas fa-file mr-2"></i>
                                Ver Curriculum
                            </a>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <img class="h-96 w-96 p-4 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="">
                    </div>

                    <div class="text-right col-span-2">
                        <a href="{{ route('editcv.curriculum', $user->profile_applicant) }}" class="btn btn-primary">Actualizar información</a>
                    </div>
                </div>
            @else

                <div class="card-header text-center p-4">
                    <h1 class="text-gray-500 text-4xl font-bold">INGRESE SUS DATOS</h1>
                </div>
                <hr class="text-gray-200 mt-2">

                <form action="{{ route('saves.curriculum') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="col-span-2">
                                <span>Dirección</span>
                                <input name="address" type="text" class="rounded-lg w-full">

                                @error('address')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div>
                                <span>Fecha de nacimiento</span>
                                <input name="birthday" type="date" class="rounded-lg w-full">

                                @error('birthday')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div>
                                <span>N° de Celular</span>
                                <input name="phone" type="text" class="rounded-lg w-full">

                                @error('phone')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div>
                                <span>Nombre de contacto</span>
                                <input name="name_contact" type="text" class="rounded-lg w-full">

                                @error('name_contact')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div>
                                <span>Telefono de contacto</span>
                                <input name="phone_contact" type="text" class="rounded-lg w-full">
                                @error('phone_contact')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="col-span-3 py-4">
                                <input type="file" name="file" class="bg-white rounded-sm shadow-md py-1 w-full" accept=".pdf">

                                @error('file')
                                    <small class="text-red-500">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="text-right col-span-3">
                                <button type="submit" class="btn btn-primary">Guardar información</button>
                            </div>
                        </div>
                    </form>
            @endisset
        </div>
    </div>
    <div class="container">
        <div class="card py-2 text-center text-red-600 font-black">
            Solo se consideran 10mb para subir su curriculum en pdf.
            <div>
                <p>* si desea comprimirlo ingrese al siguiente enlace en la opcion comprimir archivo.
                    <a href="https://www.ilovepdf.com/es/comprimir_pdf" class="text-green-400" target="_blank">
                        <br>
                        <i class="fa fa-hand-point-right fa-lg"></i> Click aqui
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
