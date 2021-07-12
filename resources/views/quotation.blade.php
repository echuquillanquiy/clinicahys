<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/cotizaciones/pexels-sora-shimazaki-5673488.jpg')}})">
        <div class="container py-32 h-full">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white text-6xl">
                    H&S OCCUPATIONAL COTIZACIONES
                </h1>

                <p class="text-white text-3xl mt-4 mb-10">
                    Solicite su cotización
                </p>
            </div>
        </div>
    </section>

    <section class="mt-4 container card">
        <h1 class="text-trueGray-500 text-center text-4xl mb-6 font-bold">SOLICITE SU COTIZACIÓN RELLENANDO EL FORMULARIO</h1>
        <hr class="text-gray-500">

        <div class="card-header">
            @if(session('notification'))
                <div class="bg-emerald-500 text-white text-sm p-2" role="alert">
                    <strong>Éxito!</strong> {{ session('notification') }}
                </div>
            @endif
        </div>

        <div class="mt-8">
            {!! Form::open(['route' => 'cotizaciones.store']) !!}

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                   <div>
                       {!! Form::label('ruc', 'Ruc: ') !!}
                       {!! Form::text('ruc', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('ruc') ? ' is-invalid': ''), 'placeholder' => 'Escriba el Ruc']) !!}

                       @error('ruc')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                       @enderror
                   </div>

                    <div class="col-span-2">
                        {!! Form::label('name', 'Razón Social: ') !!}
                        {!! Form::text('name', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('name') ? ' is-invalid': ''), 'placeholder' => 'Escriba la Razón Social']) !!}

                        @error('name')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div>
                        {!! Form::label('email', 'Correo electronico: ') !!}
                        {!! Form::text('email', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('email') ? ' is-invalid': ''), 'placeholder' => 'Escriba su correo']) !!}

                        @error('email')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div>
                        {!! Form::label('phone', 'Telefono: ') !!}
                        {!! Form::text('phone', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('phone') ? ' is-invalid': ''), 'placeholder' => 'Telefono de contacto']) !!}

                        @error('phone')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div>
                        {!! Form::label('contact', 'Contacto: ') !!}
                        {!! Form::text('contact', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('contact') ? ' is-invalid': ''), 'placeholder' => 'Escriba el su nombre']) !!}

                        @error('contact')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div>
                        {!! Form::label('position', 'Cargo: ') !!}
                        {!! Form::text('position', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('position') ? ' is-invalid': ''), 'placeholder' => 'Cargo en la empresa']) !!}

                        @error('position')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div>
                        {!! Form::label('workers', 'N° de trabajadores: ') !!}
                        {!! Form::text('workers', null, ['class' => 'rounded-lg w-full mt-2' . ($errors->has('workers') ? ' is-invalid': ''), 'placeholder' => 'N° de personas a pasar ex. medico']) !!}

                        @error('workers')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="col-span-4">
                        {!! Form::label('positions', 'Puestos de labor: ') !!}
                        {!! Form::textarea('positions', null, ['rows' => 4, 'class' => 'rounded-lg w-full mt-2' . ($errors->has('positions') ? ' is-invalid': ''), 'placeholder' => 'Puestos de referencia']) !!}

                        @error('positions')
                            <strong class="text-xs text-red-600">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>


                <div class="flex justify-end my-2">
                    {!! Form::submit('Enviar cotización', ['class' => 'btn btn-primary cursor-pointer']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </section>
</x-app-layout>
