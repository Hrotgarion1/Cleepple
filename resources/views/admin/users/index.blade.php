@extends('adminlte::page')

@section('title', 'Index de Usuarios')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Lista de usuarios')}}</h1>
@stop

@section('content')
    @livewire('admin.users-index')
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