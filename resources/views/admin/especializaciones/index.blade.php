@extends('adminlte::page')

@section('title', 'Especializaciones')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Listado de Especializaciones')}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-sm" href="{{route('admin.especializaciones.create')}}">{{ __('Nueva especialización')}}</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('ID')}}</th>
                        <th>{{ __('Name')}}</th>
                        <th>{{ __('Id Profesión')}}</th>
                        <th>{{ __('Color')}}</th>
                        <th>{{ __('Extract')}}</th>
                        {{-- colspan="2" es un atributo para que este th ocupe dos columnas --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($especializaciones as $especializacion)
                        <tr>
                            <td>{{$especializacion->id}}</td>
                            <td>{{$especializacion->name}}</td>
                            <td>{{$especializacion->profesion_id}}</td>
                            <td>{{$especializacion->color}}</td>
                            <td>{{$especializacion->extract}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.especializaciones.edit', $especializacion)}}">{{ __('Editar')}}</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.especializaciones.destroy', $especializacion)}}" method="POST">
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