<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-center">CREAR NUEVA SEDE</h1>
                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'places.store', 'files' => true, 'autocomplete' => 'off']) !!}

                @include('web.places.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Crear nueva sede', ['class' => 'btn btn-primary cursor-pointer']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="{{ asset('js/places/places.js') }}"></script>
    </x-slot>
</x-app-layout>
