@extends('adminlte::page')

@section('title', 'Profesiones')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Crear Profesión')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            {!! Form::open(['route' => 'admin.profesiones.store']) !!}
            
            @include('admin.profesiones.partials.form')

            {!! Form::submit('Crear profesión', ['class' => 'btn btn-primary btn-sm']) !!}

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