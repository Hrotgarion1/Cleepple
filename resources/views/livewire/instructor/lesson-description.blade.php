<div>
    {{-- Con el codigo x-data hago que el article se habra y se cierre con un click --}}
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                {{-- Este h1 necesita el evento x-on:click y la clase cursor-pointer para activar el desplegable --}}
                <h1 x-on:click="open = !open" class="cursor-pointer text-blue-500">{{ __('Descripción de la lección')}}</h1>
            </header>
            {{-- Con el codigo x-show de este div se activa el x-data, trabajan conjuntamente --}}
            <div x-show="open">
                <hr class="my-2">

                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>

                        @error('description.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm" type="button">{{ __('Eliminar')}}</button>
                            <button class="btn btn-primary text-sm ml-2" type="submit">{{ __('Actualizar')}}</button>
                        </div>
                    </form>

                @else 
                 
                     <div wire:submit.prevent="update">
                        <textarea wire:model="name" class="form-input w-full" placeholder="{{ __('Descripción de la lección')}}"></textarea>

                         @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                         @enderror

                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-primary text-sm ml-2">{{ __('Añadir')}}</button>
                        </div>
                     </div>
                @endif
            </div>
        </div>
    </article>
</div>
