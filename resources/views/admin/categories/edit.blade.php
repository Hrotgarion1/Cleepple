@extends('adminlte::page')

@section('title', 'Categories')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Editar Categoría')}}</h1>
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
        {!! Form::model($categoryblog, ['route' => ['admin.categories.update', $categoryblog], 'method' => 'put']) !!}

        <div class="form-group">
            
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría']) !!}

            @error('name')
                <span class="text-danger text-sm">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder', 'readonly' => 'Slug de la categoría']) !!}

            @error('slug')
                <span class="text-danger text-sm">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar la categoría', ['class' => 'btn btn-primary btn-sm']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

{{-- Para que el slug funcione se actualice correctamente, he traido copiado de la vista create toda la sección js --}}
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