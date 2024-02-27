@extends('adminlte::page')

@section('title', 'Categories Course')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Listado de Categorías del curso')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{route('admin.categorycourses.create')}}">{{ __('Nueva categoría')}}</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('ID')}}</th>
                        <th>{{ __('Nombre')}}</th>
                        <th>{{ __('Valor en Eps')}}</th>
                        {{-- colspan="2" es un atributo para que este th ocupe dos columnas --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categorycourses as $categorycourse)
                        <tr>
                            <td>{{$categorycourse->id}}</td>
                            <td>{{$categorycourse->name}}</td>
                            <td>{{$categorycourse->value}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categorycourses.edit', $categorycourse)}}">{{ __('Editar')}}</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.categorycourses.destroy', $categorycourse)}}" method="POST">
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