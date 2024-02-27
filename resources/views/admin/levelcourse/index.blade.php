@extends('adminlte::page')

@section('title', 'Levels Course')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Listado de Niveles del curso')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{route('admin.levelcourses.create')}}">{{ __('Nuevo nivel')}}</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('ID')}}</th>
                        <th>{{ __('Nombre')}}</th>
                        {{-- colspan="2" es un atributo para que este th ocupe dos columnas --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($levelcourses as $levelcourse)
                        <tr>
                            <td>{{$levelcourse->id}}</td>
                            <td>{{$levelcourse->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.levelcourses.edit', $levelcourse)}}">{{ __('Editar')}}</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.levelcourses.destroy', $levelcourse)}}" method="POST">
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