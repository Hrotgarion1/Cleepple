<div>
    <div class="w-full">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-full" placeholder="{{ __('Escriba un nombre')}}">
        </div>

        @if ($users->count())
            
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                   <tr>
                       <th>{{ __('Sector')}}</th>
                       <th>{{ __('Nombre')}}</th>
                       <th>{{ __('Dirección')}}</th>
                       <th>{{ __('Empleados')}}</th>
                       <th>{{ __('Eps')}}</th>
                       <th>{{ __('Rating')}}</th>
                       <th>{{ __('Tags')}}</th>
                       <th></th>
                   </tr>
                </thead>

                <tbody>
                  @foreach ($users as $user)
                      <tr>
                          <td><img class="h-10 w-10 rounded-full object-cover object-center" src="{{$user->profile_photo_url}}" alt=""></td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                          <td class="ml-2">{{$user->name}}</td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer w-full flex">
            {{$users->links()}}
        </div>

        @else 
        <div class="card-body">
            <strong>{{ __('No hay registros...')}}</strong>
        </div>
        @endif
    </div>
</div>
