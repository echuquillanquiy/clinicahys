<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-header text-center p-4">
                <h1 class="text-gray-500 text-4xl font-bold">ACTUALICE SUS DATOS</h1>
            </div>
            <hr class="text-gray-200 mt-2">

            <form action="{{ route('updatecv.curriculum', $profile) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <span>Dirección</span>
                        <input name="address" type="text" class="rounded-lg w-full" value="{{ $profile->address }}">

                        @error('address')
                            <small class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div>
                        <span>Fecha de nacimiento</span>
                        <input name="birthday" type="date" class="rounded-lg w-full" value="{{ $profile->birthday }}">

                        @error('birthday')
                            <small class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div>
                        <span>N° de Celular</span>
                        <input name="phone" type="text" class="rounded-lg w-full" value="{{ $profile->phone }}">

                        @error('phone')
                            <small class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div>
                        <span>Nombre de contacto</span>
                        <input name="name_contact" type="text" class="rounded-lg w-full" value="{{ $profile->name_contact }}">

                        @error('name_contact')
                            <small class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div>
                        <span>Telefono de contacto</span>
                        <input name="phone_contact" type="text" class="rounded-lg w-full" value="{{ $profile->phone_contact }}">
                        @error('phone_contact')
                            <small class="text-red-500">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="text-right col-span-3">
                        <button type="submit" class="btn btn-primary">Actualizar información</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
