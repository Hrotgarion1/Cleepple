<div class="flex flex-wrap my-2">

    <div class="w-full md:w-1/3 mb-4 p-2">
    
        <p class="text-gray-800 text-xl"><i class="fas fa-map-marked mr-2"></i>{{ __('Organización') }}</p>
        <p class="text-gray-500 text-sm">{{ __('En esta sección puedes establecer los datos de tu organización y ver las últimos guardados.') }}</p>

    </div>
    
    
  @if ($direccions->count())
    @if ($form == 'ocultar')

      <div class="w-full md:w-2/3 bg-white shadow rounded-lg">
      
        <h3 class="font-bold text-xl my-2 pl-6">{{ __('Datos de la Organización')}}</h3>

        <div class="flex">
          <label class="block text-sm font-medium text-gray-700 ml-6">
            {{ __('Escoge un logo para tu organización')}}
          </label>
          <div class="mt-2 flex justify-center mx-6 px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="file-upload" class="relative bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>{{ __('Subir imagen')}}</span>
                  <input wire:model="url" type="file">
                </label>
              </div>
              <p class="text-xs text-gray-500">
                PNG, JPG, GIF {{ __('hasta')}} 5MB
              </p>
            </div>
          </div>
        </div>
        <div class="pl-6">
          @error('url')
            <span class="text-xs text-red-500">{{$message}}</span>
          @enderror
        </div>

        <div wire:loading wire:target="url">{{ __('Uploading...')}}</div>
      
        
        <div class="mt-4 flex gap-12">
            <div class="w-1/2">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                    {{ __('Nombre')}}
                </label>
                <input wire:model="name" type="text"
                       class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                       @error('name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>

            <div class="">
                <label class="block font-medium text-sm text-gray-700" for="province">
                    {{ __('Tamaño Organización')}}
                </label>
    
                <select wire:model="empleado" name="empleado"
                        class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
                        <option value="">{{ __('-- Empleados en la Organización --')}}</option>
                    @foreach ($empleados as $empleado)
                        <option value="{{ $empleado->id }}">{{ $empleado->name }}</option>
                    @endforeach
                </select>
    
                @error('empleado')
                        <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="flex gap-12">
          <div class="mt-4 w-1/3">
              <label class="block font-medium text-sm text-gray-700 pl-6" for="country">
                  {{ __('Profesión')}}
              </label>
              <select wire:model="profesion" name="profesion"
                      class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                  <option value="">{{ __('-- Escoge una profesión --')}}</option>
                  @foreach ($profesions as $profesion)
                      <option value="{{ $profesion->id }}">{{ $profesion->name }}</option>
                  @endforeach
              </select>
  
                  @error('profesion')
                      <span class="text-xs text-red-500">{{$message}}</span>
                  @enderror
          </div>
  
          <div class="mt-4 w-1/3">
              <label class="block font-medium text-sm text-gray-700 pl-6" for="province">
                  {{ __('Especialización')}}
              </label>
  
              <select wire:model="especializacion" name="especializacion"
                      class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
                  @if ($especializacions->count() == 0)
                      <option value="">{{ __('-- Escoge una profesión primero --')}}</option>
                  @endif
                  @foreach ($especializacions as $especializacion)
                      <option value="{{ $especializacion->id }}">{{ $especializacion->name }}</option>
                  @endforeach
              </select>
  
              @error('especializacion')
                      <span class="text-xs text-red-500">{{$message}}</span>
              @enderror
          </div>
        </div>

        <div class="flex gap-12">
            <div class="mt-4 w-1/3">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="country">
                    {{ __('País')}}
                </label>
                <select wire:model="country" name="country"
                        class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Escoge un país --')}}</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
    
                    @error('country')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
            </div>
    
            <div class="mt-4 w-1/3">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="province">
                    {{ __('Provincia')}}
                </label>
    
                <select wire:model="province" name="province"
                        class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
                    @if ($provinces->count() == 0)
                        <option value="">{{ __('-- Escoge un país primero --')}}</option>
                    @endif
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
    
                @error('province')
                        <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class=" mt-4 flex gap-12">
    
            <div class="">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                    {{ __('Teléfono')}}
                </label>
                <input wire:model="phone" type="text"
                       class="px-2 text-sm mt-2 sm:text-base ml-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                       @error('phone')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>

            <div class="">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                    {{ __('Email')}}
                </label>
                <input wire:model="email" type="email"
                       class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                       @error('email')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>

            <div class="">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                    {{ __('CIF')}}
                </label>
                <input wire:model="cif" type="text"
                       class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                       @error('cif')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>
        </div>

        <div class="flex gap-12">

            <div class="w-1/4">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                    {{ __('Ciudad')}}
                </label>
                <input wire:model="town" type="text"
                       class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                       @error('town')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>

            <div class="w-1/4">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                    {{ __('Calle')}}
                </label>
                <input wire:model="street" type="text"
                       class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                       @error('street')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>

            <div class="w-1/4">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
                    {{ __('Número')}}
                </label>
                <input wire:model="number" type="text"
                       class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                       @error('number')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>
    
            <div class="w-1/4">
                <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
                    {{ __('Código postal')}}
                </label>
                <input wire:model="postcode" type="text"
                       class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                       @error('postcode')
                        <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror
            </div>
        </div>

        <div class="">
              <label class=" mt-4 block font-medium text-sm text-gray-700 pl-6" for="bio">
                {{ __('Bio')}}
              </label>
              <div class="w-full mt-1">
                <textarea wire:model="bio" rows="5" class=" w-5/6 ml-6 p-2 shadow-sm focus:outline-none focus:border-blue-400 mt-1 sm:text-sm border border-gray-400 rounded-lg" placeholder="Ejemplo: Nuestra organización fué fundada en ..."></textarea>
              </div>
              <p class="mt-2 mx-6 text-sm text-gray-500">
               {{ __(' Breve descripción de tu organización.')}}
              </p>
              @error('bio')
                    <span class="text-xs text-red-500">{{$message}}</span>
              @enderror
        </div>

        <div class="flex items-center my-4">

           
            <button wire:click="update" class="inline-flex ml-6 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Actualizar')}}
            </button>
            <button wire:click="default" class="ml-2 text-white px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Cancelar')}}
            </button>
            
        </div>

      </div>
    @endif

    
    
        @foreach ($direccions as $direccion)       
        @endforeach
  
    @if ($form == 'ver')
      <div class="w-full md:w-2/3 bg-white shadow mt-4 rounded-lg">
         @if (session()->has('message'))
         <div class="mt-4 lg:col-span-3" x-data="{open: true}" x-show="open">

         <div class="bg-green-100 border border-green-400 text-green-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Nuevo!')}}</strong>
          <span class="block sm:inline">{{session('message')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
          </div>

         </div>
        @endif

        @if (session()->has('messageupdate'))
         <div class="mt-4 lg:col-span-3" x-data="{open: true}" x-show="open">

          <div class="bg-green-100 border border-green-400 text-green-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Actualizado!')}}</strong>
          <span class="block sm:inline">{{session('messageupdate')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
          </div>

         </div>
        @endif
        
          <h3 class="ml-6 my-4 text-lg leading-6 font-medium text-gray-900">
            {{ __('Organización: ')}}<span class="font bolt text-2xl text-gray-900">{{ $direccion->name }}</span>
          </h3>
       
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Logo de la Organización')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @isset($direccion->url)
                 <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($direccion->url)}}" alt="">
                 @else 
                 <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
              @endisset
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Nombre')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->name }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Tamaño de la Organización')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->empleado->name }}
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Profesión principal')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->especializacion->profesion->name }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Especialización más utilizada')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->especializacion->name }}
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('CIF')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->cif }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('País')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->province->country->name }}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Provincia')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->province->name }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Ciudad')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->town }}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Calle')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->street }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Número')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->number }}
              </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Código Postal')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->postcode }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Teléfono')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->phone }}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    {{ __('Email')}}
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $direccion->email }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Bio')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $direccion->bio }}
              </dd>
            </div>
            
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                {{ __('Acciones')}}
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                
                <button wire:click="edit({{$direccion}})" class="bg-gray-800 hover:bg-gray-500 mb-2 rounded text-white text-sm font-bold px-4">{{ __('Editar')}}</button>
                <button wire:click="destroy({{$direccion}}) " class="bg-red-800 hover:bg-red-500 mb-2 rounded ml-2 text-white text-sm font-bold px-4">{{ __('Eliminar')}}</button>
                
              </dd>
            </div>
            
          </dl>
        </div>
       </div>
    @endif 

  @else 

    {{-- Aquí empieza el formulario para rellenar cuando está vacio --}}
    <div class="w-full md:w-2/3 bg-white shadow rounded-lg">

      @if (session()->has('messagedestroy'))
     <div class="mt-4 lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-red-100 border border-red-400 text-red-700 mx-6 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Alerta!')}}</strong>
          <span class="block sm:inline">{{session('messagedestroy')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

     </div>
    @endif

    <h3 class="font-bold text-xl my-2 pl-6">{{('No tiene datos registrados de la Organización')}}</h3>

   
    @if ($url)
        <span class="ml-6 text-sm text-gray-900">{{ __('Previsualización del Logo:')}}</span>
        <img class="rounded-full h-36 w-36 ml-6 my-6" src="{{ $url->temporaryUrl() }}">
    @endif

    <div class="flex">
      <label class="block text-sm font-medium text-gray-700 ml-6">
        {{ __('Logo de la organización')}}
      </label>
      <div class="mt-2 flex justify-center mx-6 px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
        <div class="space-y-1 text-center">
          <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <div class="flex text-sm text-gray-600">
            <label for="file-upload" class="relative bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
              <span>{{ __('Subir imagen')}}</span>
              <input wire:model="url" type="file">
            </label>
          </div>
          <p class="text-xs text-gray-500">
            PNG, JPG, GIF {{ __('hasta')}} 5MB
          </p>
        </div>
      </div>
    </div>

    <div class="ml-6 text-sm text-red-800" wire:loading wire:target="url">{{ __('Uploading...')}}</div>

    <div class="mt-4 flex gap-12">
      <div class="w-1/2">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
              {{ __('Nombre')}}
          </label>
          <input wire:model="name" type="text"
                 class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                 @error('name')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="">
          <label class="block font-medium text-sm text-gray-700" for="province">
              {{ __('Tamaño Organización')}}
          </label>

          <select wire:model="empleado" name="empleado"
                  class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
                  <option value="">{{ __('-- Empleados en la Organización --')}}</option>
              @foreach ($empleados as $empleado)
                  <option value="{{ $empleado->id }}">{{ $empleado->name }}</option>
              @endforeach
          </select>

          @error('empleado')
                  <span class="text-xs text-red-500">{{$message}}</span>
          @enderror
      </div>
    </div>

   <div class="flex gap-12">
    <div class="mt-4 w-1/3">
        <label class="block font-medium text-sm text-gray-700 pl-6" for="country">
            {{ __('Profesión')}}
        </label>
        <select wire:model="profesion" name="profesion"
                class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
            <option value="">{{ __('-- Escoge una profesión --')}}</option>
            @foreach ($profesions as $profesion)
                <option value="{{ $profesion->id }}">{{ $profesion->name }}</option>
            @endforeach
        </select>

            @error('profesion')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
    </div>

    <div class="mt-4 w-1/3">
        <label class="block font-medium text-sm text-gray-700 pl-6" for="province">
            {{ __('Especialización')}}
        </label>

        <select wire:model="especializacion" name="especializacion"
                class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
            @if ($especializacions->count() == 0)
                <option value="">{{ __('-- Escoge una profesión primero --')}}</option>
            @endif
            @foreach ($especializacions as $especializacion)
                <option value="{{ $especializacion->id }}">{{ $especializacion->name }}</option>
            @endforeach
        </select>

        @error('especializacion')
                <span class="text-xs text-red-500">{{$message}}</span>
        @enderror
    </div>
   </div>

    <div class="flex gap-12">
      <div class="mt-4 w-1/3">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="country">
              {{ __('País')}}
          </label>
          <select wire:model="country" name="country"
                  class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
              <option value="">{{ __('-- Escoge un país --')}}</option>
              @foreach ($countries as $country)
                  <option value="{{ $country->id }}">{{ $country->name }}</option>
              @endforeach
          </select>

              @error('country')
                  <span class="text-xs text-red-500">{{$message}}</span>
              @enderror
      </div>

      <div class="mt-4 w-1/3">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="province">
              {{ __('Provincia')}}
          </label>

          <select wire:model="province" name="province"
                  class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required>
              @if ($provinces->count() == 0)
                  <option value="">{{ __('-- Escoge un país primero --')}}</option>
              @endif
              @foreach ($provinces as $province)
                  <option value="{{ $province->id }}">{{ $province->name }}</option>
              @endforeach
          </select>

          @error('province')
                  <span class="text-xs text-red-500">{{$message}}</span>
          @enderror
      </div>
    </div>

    <div class=" mt-4 flex gap-12">

      <div class="">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
              {{ __('Teléfono')}}
          </label>
          <input wire:model="phone" type="text"
                 class="px-2 text-sm mt-2 sm:text-base ml-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                 @error('phone')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
              {{ __('Email')}}
          </label>
          <input wire:model="email" type="email"
                 class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                 @error('email')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
              {{ __('CIF')}}
          </label>
          <input wire:model="cif" type="text"
                 class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                 @error('cif')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>
    </div>

  

   <div class="flex gap-12">

      <div class="w-1/4">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
              {{ __('Ciudad')}}
          </label>
          <input wire:model="town" type="text"
                 class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                 @error('town')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="w-1/4">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
              {{ __('Calle')}}
          </label>
          <input wire:model="street" type="text"
                 class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                 @error('street')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="w-1/4">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="street">
              {{ __('Número')}}
          </label>
          <input wire:model="number" type="text"
                 class="mt-2 px-2 text-sm sm:text-base ml-6 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required />
                 @error('number')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>

      <div class="w-1/4">
          <label class="block font-medium text-sm text-gray-700 pl-6" for="postcode">
              {{ __('Código postal')}}
          </label>
          <input wire:model="postcode" type="text"
                 class="px-2 text-sm mt-2 sm:text-base mr-6 rounded-lg border border-gray-400 w-auto py-2 focus:outline-none focus:border-blue-400" required />
                 @error('postcode')
                  <span class="text-xs text-red-500">{{$message}}</span>
                 @enderror
      </div>
   </div>

   <div class="">
        <label class=" mt-4 block font-medium text-sm text-gray-700 pl-6" for="bio">
          {{ __('Bio')}}
        </label>
        <div class="w-full mt-1">
          <textarea wire:model="bio" rows="5" class=" w-5/6 ml-6 p-2 shadow-sm focus:outline-none focus:border-blue-400 mt-1 sm:text-sm border border-gray-400 rounded-lg" placeholder="Ejemplo: Nuestra organización fué fundada en ..."></textarea>
        </div>
        <p class="mt-2 mx-6 text-sm text-gray-500">
         {{ __(' Breve descripción de tu organización.')}}
        </p>
        @error('bio')
              <span class="text-xs text-red-500">{{$message}}</span>
             @enderror
   </div>

   <div class="flex items-center my-4">

     
      <button wire:click="storeOrganization"
              class="inline-flex items-center ml-6 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
          {{ __('Guardar')}}
      </button>
      
   </div>
  </div>

  @endif

</div>
