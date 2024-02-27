@extends('adminlte::page')

@section('title', 'Categories')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Crear nueva categoría')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Dentro de los parentesis tengo que poner un array, y dentro del array especificar los atributos del formulario
             por ejemplo: route => nombre de la ruta    --}}
            {!! Form::open(['route' => 'admin.categories.store']) !!}

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
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría']) !!}

                @error('name')
                    <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {{-- Aqui hago lo mismo pero para el slug--}}
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder', 'readonly' => 'Slug de la categoría']) !!}

                @error('slug')
                    <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>

            {{-- Este form será el botón que envía los datos a la bbdd --}}
            {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
        //id del input que escucha, en este caso es el input name, y después el del input dónde quiero que 
        //lo pegue, es decir, en el input slug
    $("#name").stringToSlug({
      setEvents: 'keyup keydown blur',
      //id de donde lo va a pegar
      getPut: '#slug',
    space: '-'
  });
});
</script>
@endsection