@extends('adminlte::page')

@section('title', 'Posts')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<div class="card-header bg-white rounded-lg">
<h1>{{ __('Listado de Posts')}}</h1>
 <a class="btn btn-secondary btn-sm mt-2" href="{{route('admin.postsblog.create')}}">{{ __('Nuevo post')}}</a>
</div>
@stop

@section('content')
    @livewire('admin.postblog-index')
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log('Hi!');</script>
@stop