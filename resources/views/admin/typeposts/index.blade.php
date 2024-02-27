@extends('adminlte::page')

@section('title', 'Type post')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Listado de Tipos de post')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{route('admin.typeposts.create')}}">{{ __('Nuevo tipo')}}</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('ID')}}</th>
                        <th>{{ __('Nombre')}}</th>
                        <th>{{ __('Extracto')}}</th>
                        {{-- colspan="2" es un atributo para que este th ocupe dos columnas --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($typeposts as $typepost)
                        <tr>
                            <td>{{$typepost->id}}</td>
                            <td>{{$typepost->name}}</td>
                            <td>{{$typepost->extract}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.typeposts.edit', $typepost)}}">{{ __('Editar')}}</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.typeposts.destroy', $typepost)}}" method="POST">
                                   @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar')}}</button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop