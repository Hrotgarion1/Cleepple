<div class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">

        <header>
            <h1 x-on:click="open = !open" class="cursor-pointer">{{ __('Recursos de la lección')}}</h1>
        </header>

        <div x-show="open">
            <hr class="my-2">

            @if ($lesson->resource)
                 <div class="flex justify-between items-center">
                     {{-- Metodo para descargar el archivo seleccionado wire:click="download" --}}
                    <p><i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>{{$lesson->resource->url}}</p>
                    {{-- El metodo wire:click="destroy" eliminará el archivo de las carpetas temporales y resource que es donde está almacenado el archivo --}}
                    <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
                 </div>
                @else 

                <form wire:submit.prevent="save">
                    <div class="flex items-center">
                        <input wire:model="file" type="file" class="form-input flex-1">
                        <button type="submit" class="btn btn-primary text-sm ml-2">{{ __('Guardar')}}</button>
                    </div>
                {{-- El evento wire:loading hace que se vea el mensaje Cargando... mientras se carga el archivo seleccionado --}}
                {{-- El evento wire:target hace que se vea el mensaje Cargando... mientras se carga el input wire:model="file" --}}
                    <div class="text-blue-500 font-bold mt-1" wire:loading wire:target="file">
                        {{ __('Cargando...')}}
                    </div>
    
                    @error('file')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </form>

            @endif
        </div>

    </div>
</div>
