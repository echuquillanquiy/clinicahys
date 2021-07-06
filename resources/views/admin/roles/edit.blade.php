@extends('adminlte::page')

@section('title', 'H&S OCCUPATIONAL')

@section('content_header')
    <h1>Editar Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Editar Role', ['class' => 'btn btn-success mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
