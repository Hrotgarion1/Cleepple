@extends('adminlte::page')

@section('title', 'Tags')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Listado de Etiquetas')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{route('admin.tagsblog.create')}}">{{ __('Nueva etiqueta')}}</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('ID')}}</th>
                        <th>{{ __('Name')}}</th>
                        <th>{{ __('Color')}}</th>
                        {{-- colspan="2" es un atributo para que este th ocupe dos columnas --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tagblogs as $tagblog)
                        <tr>
                            <td>{{$tagblog->id}}</td>
                            <td>{{$tagblog->name}}</td>
                            <td>{{$tagblog->color}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.tagsblog.edit', $tagblog)}}">{{ __('Editar')}}</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.tagsblog.destroy', $tagblog)}}" method="POST">
                                   @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar')}}</button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
             </div>
            </table>
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

{{-- @section('js')
<script>console.log('Hi!');</script>
@stop --}}