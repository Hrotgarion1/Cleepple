@extends('adminlte::page')

@section('title', 'Type post')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Editar Tipo de post')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
     {{-- Esta ruta requiere la variable de la ruta $categoryblog, y para poder pasarselo debo encerrar el nombre en un array y ahí
     pasarle la variable, además debo añadirle el método put, así que después de la ruta le añado una coma y el método --}}
     {{-- Para que el campo input traiga ya los datos que quiero actualizar, en lugar de form::open pongo form::model 
        y antes del array le paso la variable $categoryblog que es dónde tengo almacenado el contenido que quiero actualizar  --}}
        {!! Form::model($typepost, ['route' => ['admin.typeposts.update', $typepost], 'method' => 'put']) !!}

        <div class="form-group">
            
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tipo']) !!}

            @error('name')
                <span class="text-danger text-sm">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            
            {!! Form::label('extract', 'Valor en Eps') !!}
            {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto del tipo de post']) !!}

            @error('extract')
                <span class="text-danger text-sm">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar la tipo', ['class' => 'btn btn-primary btn-sm']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

{{-- Para que el slug funcione se actualice correctamente, he traido copiado de la vista create toda la sección js --}}
@section('js')

@endsection