<div>
    <hr class="mt-2 mb-2">
<article x-data="{open: false}">

        <h1 x-on:click="open = !open" class="cursor-pointer font-bolt text-lg text-gray-900"><i class="fas fa-university text-blue-500 mr-1"></i>{{ __('Cursos')}}</h1>

@foreach ($curriculo->study as $item)
   <article class="card mt-4" x-show="open">
       <div class="card-body">

        @if ($study->id == $item->id)

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Curso:')}}</label>
                <input wire:model="study.curso" class="form-input w-full">
            </div>
            @error('study.curso')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Centro de Estudios:')}}</label>
                <input wire:model="study.organization" class="form-input w-full">
            </div>
            @error('study.organization')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('Categoría:')}}</label>
            <select wire:model="study.category_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                <option value="">{{ __('-- Escoge una categoría --')}}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
         @error('study.category_id')
            <span class="text-xs text-red-500">{{$message}}</span>
         @enderror

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Fecha de Inicio del curso:')}}</label>
                <input wire:model="study.fechaIni" class="form-input w-full">
            </div>
            @error('study.fechaIni')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Fecha de finalización:')}}</label>
                <input wire:model="study.fechaFin" class="form-input w-full">
            </div>
            @error('study.fechaFin')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mt-4 flex justify-end">

            <button wire:click="update" class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">Actualizar</button>
               
            <button wire:click="cancel" class="w-32 text-sm ml-2 bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">Cancelar</button>
        </div>

        @else
              
        <header>
            <h1> <i class="fas fa-graduation-cap text-blue-500 mr-1"></i> {{ __('Estudio: ')}}{{$item->curso}}</h1>
        </header>

        <div>
            <hr class="my-2">
            <p class="text-sm">{{ __('Centro de Estudios: ')}}{{$item->organization}}</p>
            <p class="text-sm">{{ __('Categoría: ')}}{{$item->category->name}}</p>
            <p class="text-sm">{{ __('Fecha de Inicio: ')}}{{$item->fechaIni}}</p>
            <p class="text-sm">{{ __('Fecha de finalización: ')}}{{$item->fechaFin}}</p>
            <p class="text-sm">

                @switch($item->status)
                           @case(1)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps propuestos ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 ml-1">{{ $item->category->value }}</span>
                             </span>
                               @break
                           @case(2)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps en revisión ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 ml-1">{{ $item->category->value }}</span>
                             </span>
                               @break
                           @case(3)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Verificados ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 ml-1">{{ $item->category->value }}</span>
                             </span>
                               @break
                           @case(4)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Denegados:')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 ml-1">{{ $item->category->value }}</span>
                             </span>
                               @break
                           @default     
                         @endswitch
            </p>

            <div class="mt-2">

                <button wire:click="verificate({{ $item->id }})" class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">Verificar</button>

                <button wire:click="edit({{$item}})" class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">Editar</button>
               
                <button wire:click="destroy({{$item}})" class="w-32 text-sm bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">Eliminar</button>
                
            </div>
        </div>
        @endif
       </div>
   </article>
       
@endforeach

<div x-data="{open: false}" class="mt-2">
    <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
        <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
        {{ __('Agregar nuevos estudios')}}
    </a>

    <article class="card" x-show="open">
        <div class="card-body bg-white">
          <h1 class="text-xl font-bold mb-4">{{ __('Agregar nuevos estudios')}}</h1>

          <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Curso:')}}</label>
                <input wire:model="curso" class="form-input w-full">
            </div>
            @error('curso')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

          <div class="mb-4">
            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Centro de Estudios:')}}</label>
                    <input wire:model="organization" class="form-input w-full">
                </div>
                @error('organization')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
    
            <div class="mt-2">
                <div class="flex items-center">
                <label class="w-64">{{ __('Categoría:')}}</label>
                <select wire:model="category_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Escoge una categoría --')}}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
             @error('category_id')
                <span class="text-xs text-red-500">{{$message}}</span>
             @enderror
    
            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Fecha de Inicio del curso:')}}</label>
                    <input wire:model="fechaIni" class="form-input w-full">
                </div>
                @error('fechaIni')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
    
            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Fecha de finalización:')}}</label>
                    <input wire:model="fechaFin" class="form-input w-full">
                </div>
                @error('fechaFin')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
          </div>

          <div class="flex justify-end mt-2">
            <button wire:click="store" class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">{{ __('Aceptar')}}</button>
             
            <button x-on:click="open = false" class="w-32 text-sm ml-2 bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">{{ __('Cancelar')}}</button>
          </div>
        </div>
    </article>
</div>
</article>
<hr class="mt-2 mb-6">
</div>
