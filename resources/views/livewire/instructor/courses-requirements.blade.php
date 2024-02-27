<section>
    <h1 class="text-2xl font-bold">{{ __('REQUERIMIENTOS DEL CURSO')}}</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->requirements as $item)

      <article class="card mb-4">
        <div class="card-body bg-gray-100">

            @if ($requirement->id == $item->id)

      {{-- Evento para el formulario para actualizar la informacion de la base de datos wire:submit.prevent="", prevent es para que se actualice al hacer click --}}
                <form wire:submit.prevent="update">
                    <input wire:model="requirement.name" class="form-input w-full">
             {{-- Imprimo el error en caso de que el input lo contenga --}}
                    @error('requirement.name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </form>
            @else

              <header class="flex justify-between">
                <h1>{{$item->name}}</h1>
                <div>
                   <i wire:click="edit({{$item}})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                   <i wire:click="destroy({{$item}})" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                </div>
                
              </header>
                
            @endif
           
        </div>
      </article>
        
    @endforeach

    <article class="card">
        <div class="card-body bg-gray-100">
            {{-- este form utiliza el metodo store --}}
            <form wire:submit.prevent="store">
                {{--input vinculado a la propiedad name --}}
                <input wire:model="name" class="form-input w-full" placeholder="{{ __('Añadir el nombre del requerimiento')}}">

                @error('name')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror

                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">{{ __('Agregar requerimiento')}}</button>
                </div>
            </form>
        </div>
    </article>
</section>
