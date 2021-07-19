<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-center">INFORMACIÓN DEL SERVICIO</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($place, ['route' => ['places.update', $place], 'method' => 'put', 'files' => true]) !!}

                @include('web.places.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="{{ asset('js/places/places.js') }}"></script>
    </x-slot>

</x-app-layout>
