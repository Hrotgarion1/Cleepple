@extends('adminlte::page')

@section('title', 'Mostrar roles')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Roles')}}</h1>
@stop

@section('content')
    <p>Bienvenido al show del panel del administrador</p>
@stop


@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop