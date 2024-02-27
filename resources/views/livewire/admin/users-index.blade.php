<div>
    <div class="card">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="{{ __('Escriba un nombre')}}">
        </div>

        @if ($users->count())
            
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                   <tr>
                       <th>{{ __('ID')}}</th>
                       <th>{{ __('Nombre')}}</th>
                       <th>{{ __('Email')}}</th>
                       <th>{{ __('Rol')}}</th>
                       <th>{{ __('Rol principal')}}</th>
                       <th></th>
                   </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        
                    @endforeach
                  @foreach ($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$role->name}}</td>
                          <td>{{$user->role_id}}</td>
                          <td width="10px">
                              <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">{{ __('Editar')}}</a>
                          </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>

        @else 
        <div class="card-body">
            <strong>{{ __('No hay registros...')}}</strong>
        </div>
        @endif
    </div>
</div>
