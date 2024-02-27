<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingresar nombre de post">
    </div>
    @if ($postblogs->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID')}}</th>
                    <th>{{ __('Nombre')}}</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postblogs as $postblog)
                <tr>
                    <td>{{$postblog->id}}</td>
                    <td>{{$postblog->name}}</td>
                    <td with=10px>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.postsblog.edit', $postblog)}}">{{ __('Editar')}}</a>
                    </td>
                    <td with=10px>
                        <form action="{{route('admin.postsblog.destroy', $postblog)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit">{{ __('Eliminar')}}</button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$postblogs->links()}}
    </div>
    @else 
    <div class="card-body">
        <strong>{{ __('No hay ningún registro')}}</strong>
    </div>
       
    @endif
   
</div>
