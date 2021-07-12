<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-center">CREAR NUEVO SERVICIO</h1>
                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'services.store', 'files' => true, 'autocomplete' => 'off']) !!}

                    @include('web.services.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Crear nueva publicación', ['class' => 'btn btn-primary cursor-pointer']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/services/form.js') }}"></script>
    </x-slot>
</x-app-layout>
