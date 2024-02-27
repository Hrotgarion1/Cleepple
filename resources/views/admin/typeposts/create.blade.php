@extends('adminlte::page')

@section('title', 'Type post')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Crear nuevo tipo para el blog')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Dentro de los parentesis tengo que poner un array, y dentro del array especificar los atributos del formulario
             por ejemplo: route => nombre de la ruta    --}}
            {!! Form::open(['route' => 'admin.typeposts.store']) !!}

            <div class="form-group">
                {{-- Dentro de este form label debo pasar unos parametros, el primero es el nombre
                 que en este caso es name, segundo atributo que quiero que diga, en este caso es Nombre
                 tercer atributo puedo poner un array y dentro las clases, como btn etc.--}}
                {!! Form::label('name', 'Nombre') !!}
                {{-- Ahora le pongo un input de tipo text con form::text --}}
                {{-- Primer parametro el name, que en este caso tambien es name
                segundo parametro un valor, por si quiero que lo tenga por defecto, y en este caso no lo quiero
                tercero un atributo, y le voy a poner una clase form-control que es una clase de bootstrap que le 
                da estilos a los input y un placeholder para indicar lo que requiere el input --}}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'tipo de post']) !!}

                @error('name')
                    <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Aqui hago lo mismo pero para el slug--}}
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto del post']) !!}

                @error('extract')
                    <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>

            {{-- Este form será el botón que envía los datos a la bbdd --}}
            {!! Form::submit('Crear tipo', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@endsection