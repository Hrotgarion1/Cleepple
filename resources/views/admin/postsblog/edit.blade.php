@extends('adminlte::page')

@section('title', 'Posts')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Editar el Post')}}</h1>
@stop

@section('content')
    <p>Bienvenido a la vista show categoría del panel del administrador</p>
@stop


@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>console.log('Hi!');</script>
@stop