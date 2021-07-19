<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="mb-4">
        {!! Form::label('name', 'Nombre de la sede') !!}
        {!! Form::text('name', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('name') ? ' border-red-600' : '')]) !!}

        @error('name')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('address', 'Dirección') !!}
        {!! Form::text('address', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('address') ? ' border-red-600' : '')]) !!}

        @error('address')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('email', 'Correo electronico') !!}
        {!! Form::text('email', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('email') ? ' border-red-600' : '')]) !!}

        @error('email')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('phone', 'Telefono') !!}
        {!! Form::text('phone', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('phone') ? ' border-red-600' : '')]) !!}

        @error('phone')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4 col-span-2">
        {!! Form::label('url', 'Enlace para compartir') !!}
        {!! Form::text('url', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('url') ? ' border-red-600' : '')]) !!}

        @error('url')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

</div>

<div class="mb-4">
    {!! Form::label('iframe', 'Iframe') !!}
    {!! Form::textarea('iframe', null, ['class' => 'w-full mt-1 block rounded-lg' . ($errors->has('iframe') ? ' border-red-600' : '')]) !!}

    @error('iframe')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($place->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($place->image) }}" alt="">
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
