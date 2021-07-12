<div class="mb-4">
    {!! Form::label('name', 'Nombre del servicio') !!}
    {!! Form::text('name', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('name') ? ' border-red-600' : '')]) !!}

    @error('name')
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

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($service->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($service->image) }}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/40992/man-iraq-men-portrait-40992.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        @endisset
    </figure>

    <div>
        {!! Form::file('file', ['class' => 'w-full border border-2 p-2 mt-2' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>
