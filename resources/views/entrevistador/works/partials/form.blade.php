<div class="mb-4">
    {!! Form::label('title', 'Título de la publicación') !!}
    {!! Form::text('title', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('title') ? ' border-red-600' : '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug de la publicación') !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'w-full mt-1 block rounded-lg' . ($errors->has('slug') ? ' border-red-600' : '')]) !!}

    @error('slug')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo de la publicación') !!}
    {!! Form::text('subtitle', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

    @error('subtitle')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripcion de la publicación') !!}
    {!! Form::textarea('description', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('description') ? ' border-red-600' : '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'block w-full mt-1 rounded-lg']) !!}
    </div>

    <div>
        {!! Form::label('place_id', 'Sede') !!}
        {!! Form::select('place_id', $places, null, ['class' => 'block w-full mt-1 rounded-lg']) !!}
    </div>

    <div>
        {!! Form::label('type_id', 'Tipos de trabajo') !!}
        {!! Form::select('type_id', $types, null, ['class' => 'block w-full mt-1 rounded-lg']) !!}
    </div>
</div>

<div class="grid grid-cols-2 gap-8 mt-4">
    <div>
        {!! Form::label('start', 'Fecha de inicio') !!}
        {!! Form::date('start', now(),['class' => 'block w-full mt-1 rounded-lg' . ($errors->has('start') ? ' border-red-600' : '')]) !!}

        @error('start')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div>
        {!! Form::label('end', 'Fecha fin') !!}
        {!! Form::date('end', \Carbon\Carbon::now()->addDays(30), ['class' => 'block w-full mt-1 rounded-lg' . ($errors->has('end') ? ' border-red-600' : '')]) !!}

        @error('end')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($work->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($work->image->url) }}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/40992/man-iraq-men-portrait-40992.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        @endisset
    </figure>

    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aperiam beatae consequatur consequuntur eveniet fugiat fugit in ipsum itaque, magni nihil, nostrum provident quae quidem ratione recusandae rerum veniam veritatis.</p>
        {!! Form::file('file', ['class' => 'w-full border border-2 p-2 mt-2' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>
