@extends('adminlte::page')

@section('title', 'Roles')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')



@section('content_header')
<h1>{{ __('Lista de Roles')}}</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-primary" role="alert">
    <strong>{{ __('Hecho!')}}</strong> {{session('info')}}
</div>
    
@endif


    <div class="card">
        <div class="card-header">
          <a href="{{route('admin.roles.create')}}">{{ __('Crear Rol')}}</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                      <tr>
                          {{-- <th>{{ __('Número de ID')}}</th> --}}
                          <th>{{ __('Nonmbre')}}</th>
                          <th>{{ __('Permisos')}}</th>
                          <th colspan="2"></th>
                      </tr>
                </thead>

                <tbody>
                    @foreach ($permissions as $permission)
                    @endforeach

                    @forelse ($roles as $role)
                        <tr>
                            {{-- <td>{{$role->id}}</td> --}}
                            <td>{{$role->name}}</td>
                            <td>{{$permission->name}}</td>

                            <td width="10px">
                                <a class="btn btn-secondary" href="{{route('admin.roles.edit', $role)}}">{{ __('Editar')}}</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @method('delete')
                                    @csrf

                                    <button class="btn btn-danger" type="submit">{{ __('Eliminar')}}</button>
                               </form>
                            </td>
                        </tr>
                    @empty
                        
                    <tr>
                        <td colspan="4">{{ __('No hay ningún rol registrado')}}</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop