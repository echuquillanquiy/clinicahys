<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edición de la publicación</h1>

            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">
                        Información del trabajo
                    </a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2"">
                    <a href="">
                        Requisitos del trabajo
                    </a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2"">
                    <a href="">
                        Postulantes
                    </a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">INFORMACIÓN DE LA PUBLICACIÓN</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($work, ['route' => ['entrevistador.works.update', $work], 'method' => 'put', 'files' => true]) !!}

                    @include('entrevistador.works.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/entrevistador/works/form.js') }}"></script>
    </x-slot>
</x-app-layout>
