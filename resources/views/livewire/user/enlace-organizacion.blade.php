<div class="flex flex-wrap mt-2 mb-4">

    <div class="w-full md:w-1/3 mb-4 p-2">
    
        <p class="text-gray-800 text-xl"><i class="fas fa-map-marked mr-2"></i>{{ __('Links') }}</p>
        <p class="text-gray-500 text-sm">{{ __('En esta sección puedes establecer cuales son tus links, estos enlaces serán públicos, los utilizarán para ponerse en contacto contigo o para ver tus otros perfiles.') }}</p>

    </div>
    
    <div class="w-full md:w-2/3 bg-white shadow rounded-lg">

    @if ($enlaces->count())
    @if ($form == 'ocultar')

        <h3 class="font-bold text-xl my-2 pl-6">{{ __('Enlaces de la organización')}}</h3>

    <div class="mt-4 flex gap-12">
        <div class="w-1/2">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                {{ __('Youtube')}}
            </label>
            <input wire:model="youtube" type="text"
                   class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                   @error('youtube')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Vimeo')}}
            </label>
            <input wire:model="vimeo" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('vimeo')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

    </div>

    <div class="mt-4 flex gap-12">
        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                {{ __('LinkedIn')}}
            </label>
            <input wire:model="linkedin" type="text"
                   class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                   @error('linkedin')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Facebook')}}
            </label>
            <input wire:model="facebook" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('facebook')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Web')}}
            </label>
            <input wire:model="website" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('website')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

    </div>

        <div class="flex items-center mt-4">

            <button wire:click="update" class="inline-flex ml-6 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Actualizar')}}
            </button>
            <button wire:click="default" class="ml-2 text-white px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Cancelar')}}
            </button>
      
        </div>

    @else 

         <h3 class="font-bold text-xl mt-6 pl-6">{{ __('Enlaces establecidos')}}</h3>
            
    @endif

    <div class="my-6">

    @if (session()->has('message'))
       <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-green-100 border border-green-400 text-green-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Nuevos!')}}</strong>
          <span class="block sm:inline">{{session('message')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

      </div>
    @endif

    @if (session()->has('messageupdate'))
     <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-green-100 border border-green-400 text-green-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Actualizados!')}}</strong>
          <span class="block sm:inline">{{session('messageupdate')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

      </div>
    @endif

    @if (session()->has('messagedestroy'))
     <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-red-100 border border-red-400 text-red-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Alerta!')}}</strong>
          <span class="block sm:inline">{{session('messagedestroy')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

     </div>
    @endif

    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">

        @foreach ($enlaces as $enlace)
           
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Youtube')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if (!empty($enlace->youtube))
                    <p><a class="text-blue-600" href="{{ $enlace->youtube }}" target="_blank">{{ $enlace->youtube }}</a></p>
                    @else 
                    <span class="text-sm text-red-800">{{ __('No tienes establecido un enlace para Youtube')}}</span>
                    @endif
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Vimeo')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"> 
                    @if (!empty($enlace->vimeo))
                    <p><a class="text-blue-600" href="{{ $enlace->vimeo }}" target="_blank">{{ $enlace->vimeo }}</a></p>
                    @else 
                    <span class="text-sm text-red-800">{{ __('No tienes establecido un enlace para Vimeo')}}</span>
                    @endif
                </dd>
            </div>
            
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('LinkedIn')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if (!empty($enlace->linkedin))
                    <p><a class="text-blue-600" href="{{ $enlace->linkedin }}" target="_blank">{{ $enlace->linkedin }}</a></p>
                    @else 
                    <span class="text-sm text-red-800">{{ __('No tienes establecido un enlace para LinkedIn')}}</span>
                    @endif
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Facebook')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if (!empty($enlace->facebook))
                    <p><a class="text-blue-600" href="{{ $enlace->facebook }}" target="_blank">{{ $enlace->facebook }}</a></p>
                    @else 
                    <span class="text-sm text-red-800">{{ __('No tienes establecido un enlace para Facebook')}}</span>
                    @endif
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Web')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if (!empty($enlace->facebook))
                <p><a class="text-blue-600" href="{{ $enlace->website }}" target="_blank">{{ $enlace->website }}</a></p>
                    @else 
                    <span class="text-sm text-red-800">{{ __('No tienes establecido un enlace para tu Web')}}</span>
                    @endif
                    
                </dd>
            </div>

            @endforeach
            
            @if ($form == 'ver')
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Acciones')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <button wire:click="edit({{$enlace}})" class="bg-gray-800 hover:bg-gray-500 mb-2 rounded text-white text-sm font-bold px-4">{{ __('Editar')}}</button>
                <button wire:click="destroy({{$enlace}}) " class="bg-red-800 hover:bg-red-500 mb-2 rounded ml-2 text-white text-sm font-bold px-4">{{ __('Eliminar')}}</button>
              </dd>
            </div>
            @endif 
          </dl>
        </div>
      </div>

    
    @else 

    <h3 class="font-bold text-xl my-2 pl-6">{{('No tienes ningún enlace registrado')}}</h3>

    <div class="mt-4 flex gap-12">
        <div class="w-1/2">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                {{ __('Youtube')}}
            </label>
            <input wire:model="youtube" type="text"
                   class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                   @error('youtube')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Vimeo')}}
            </label>
            <input wire:model="vimeo" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('vimeo')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

    </div>

    <div class="mt-4 flex gap-12">
        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                {{ __('LinkedIn')}}
            </label>
            <input wire:model="linkedin" type="text"
                   class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                   @error('linkedin')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Facebook')}}
            </label>
            <input wire:model="facebook" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('facebook')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

        <div class="w-1/3">
            <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                {{ __('Web')}}
            </label>
            <input wire:model="website" type="text"
                   class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                   @error('website')
                    <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
        </div>

    </div>

        <div class="flex items-center my-4">
            <button wire:click="storeEnlace"
                    class="inline-flex items-center ml-6 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Guardar')}}
            </button>
           
        </div>

    @endif

    </div>

    

</div>

