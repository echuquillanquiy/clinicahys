<x-entrevistador-layout :work="$work">

    <h1 class="text-2xl font-bold">INFORMACIÓN DE LA PUBLICACIÓN</h1>
    <hr class="mt-2 mb-6">

    {!! Form::model($work, ['route' => ['entrevistador.works.update', $work], 'method' => 'put', 'files' => true]) !!}

    @include('entrevistador.works.partials.form')

    <div class="flex justify-end">
        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
    </div>
    {!! Form::close() !!}

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/entrevistador/works/form.js') }}"></script>
    </x-slot>
</x-entrevistador-layout>
