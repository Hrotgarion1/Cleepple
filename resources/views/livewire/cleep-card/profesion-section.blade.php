<div>
  
  <h1 class="text-2xl font-bold">{{ __('PROFESIONES')}}</h1>
              {{-- Mensajes --}}

            @if (session()->has('message'))
              <div class="my-6 lg:col-span-3" x-data="{open: true}" x-show="open">
            
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
             <div class="my-6 lg:col-span-3" x-data="{open: true}" x-show="open">
            
             <div class="bg-green-100 border border-green-400 text-green-700 mx-6 px-4 py-3 rounded relative" role="alert">
                 <strong class="font-bold">{{ __('Actualizado!')}}</strong>
                 <span class="block sm:inline">{{session('messageupdate')}}</span>
                 <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                   <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                 </span>
               </div>
            
             </div>
            @endif
            
            @if (session()->has('messagedestroy'))
             <div class="my-6 lg:col-span-3" x-data="{open: true}" x-show="open">
            
             <div class="bg-red-100 border border-red-400 text-red-700 mx-6 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{ __('Alerta!')}}</strong>
                <span class="block sm:inline">{{session('messagedestroy')}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                  <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
              </div>
            
             </div>
            @endif

  <hr class="mt-2 mb-6">

  @foreach ($curriculos as $curriculo)
      <article class="card mb-6" x-data="{open: false}">
          <div class="card-body bg-gray-100">

           @if ($profesiones->id == $curriculo->id)

           <form wire:submit.prevent="update">
               <input wire:model="sector" class="form-input w-full" placeholder="{{ __('Ingrese el nombre de la profesión')}}">

               @error('sector')
                   <span class="text-xs text-red-500">
                       {{$message}}
                   </span>
               @enderror

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
              <button wire:click="update" class="inline-flex ml-6 items-center py-1 px-6 my-4 bg-gray-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Actualizar')}}
            </button>

            <button wire:click="cancel" class="w-32 text-sm ml-2 bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">Cancelar</button>
           </form>
               
           @else 
           <header class="flex justify-between items-center">
               <h1 x-on:click="open = !open" class="cursor-pointer"><strong>{{ __('Sector: ')}}</strong>{{$curriculo->sector}}</h1>
               <h1 x-on:click="open = !open" class="cursor-pointer"><strong>{{ __('Profesión: ')}}</strong>{{$curriculo->especializacion->profesion->name}}</h1>
               <h1 x-on:click="open = !open" class="cursor-pointer"><strong>{{ __('Especialización: ')}}</strong>{{$curriculo->especializacion->name}}</h1>
               <div>
                   <i class="fas fa-edit cursor-pointer text-blue-500" wire:click="edit({{$curriculo}})"></i>
                   <i class="fas fa-eraser cursor-pointer text-red-500" wire:click="destroy({{$curriculo}})"></i>
               </div>
           </header>
           
     {{-- Desplegables, dan problemas si están activos --}}
           <div x-show="open">
            
               @livewire('cleep-card.curriculo-estudio', ['curriculo' => $curriculo], key($curriculo->id))
               @livewire('cleep-card.curriculo-expelabors', ['curriculo' => $curriculo], key($curriculo->id))
               @livewire('cleep-card.curriculo-capacidades', ['curriculo' => $curriculo], key($curriculo->id))
               @livewire('cleep-card.curriculo-autodidactas', ['curriculo' => $curriculo], key($curriculo->id))
               @livewire('cleep-card.curriculo-expepymes', ['curriculo' => $curriculo], key($curriculo->id))
               @livewire('cleep-card.curriculo-accisolids', ['curriculo' => $curriculo], key($curriculo->id))

           </div>

           @endif
             
          </div>
      </article>
  @endforeach


  <div x-data="{open: false}">
      <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
          <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
          {{ __('Agregar nueva profesión')}}
      </a>

      <article class="card" x-show="open">
          <div class="card-body bg-gray-100">
            <h1 class="text-xl font-bold mb-4">{{ __('Agregar nueva profesión')}}</h1>

            <div class="mb-4">
                <input wire:model="sector" class="form-input w-full" placeholder="{{ __('Sector al cuál pertenece la profesión')}}">
                @error('sector')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror

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
            </div>

            <div class="flex justify-end">
               <button class="btn btn-danger" x-on:click="open = false">{{ __('Cancelar')}}</button>
               <button class="btn btn-primary ml-2" wire:click="storeCurriculo">{{ __('Aceptar')}}</button>
            </div>
          </div>
      </article>
  </div>
  </div>
