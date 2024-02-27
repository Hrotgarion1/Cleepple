<div>
    
<article x-data="{open: false}">

        <h1 x-on:click="open = !open" class="cursor-pointer font-bolt text-lg text-gray-900"><i class="fas fa-user-tie text-blue-500 mr-1"></i>{{ __('Experiencia Laboral')}}</h1>

@foreach ($curriculo->expelabor as $item)
   <article class="card mt-4" x-show="open">
       <div class="card-body">

        @if ($expelabor->id == $item->id)

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Organización:')}}</label>
                <input wire:model="expelabor.organization" class="form-input w-full">
            </div>
            @error('expelabor.organization')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

            <div class="mt-2">
                <div class="flex items-center">
                <label class="w-64">{{ __('País:')}}</label>
                <select wire:model="country" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Escoge un país --')}}</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
              </div>
              @error('country')
                <span class="text-xs text-red-500">{{$message}}</span>
              @enderror
            </div>

            <div class="mt-2">
                <div class="flex items-center">
                <label class="w-64">{{ __('Provincia:')}}</label>
                <select wire:model="province" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    @if ($provinces->count() == 0)
                        <option value="">{{ __('-- Escoge un país primero --')}}</option>
                    @endif
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
              </div>
              @error('province')
                <span class="text-xs text-red-500">{{$message}}</span>
              @enderror
            </div>
        

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Descripción de la experiencia laboral:')}}</label>
                <input wire:model="expelabor.description" class="form-input w-full">
            </div>
            @error('expelabor.description')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Salario:')}}</label>
                <input wire:model="expelabor.salary" class="form-input w-full">
            </div>
            @error('expelabor.salary')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('Categoría profesional:')}}</label>
            <select wire:model="expelabor.cat_prof_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                <option value="">{{ __('-- Escoge una categoría --')}}</option>
                @foreach ($cat_profes as $cat_profe)
                    <option value="{{ $cat_profe->id }}">{{ $cat_profe->name }}</option>
                @endforeach
            </select>
          </div>
         @error('expelabor.cat_prof_id')
            <span class="text-xs text-red-500">{{$message}}</span>
         @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('Duración de la Jornada:')}}</label>
            <select wire:model="expelabor.jornada_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                <option value="">{{ __('-- Escoge una jornada laboral --')}}</option>
                @foreach ($jornadas as $jornada)
                    <option value="{{ $jornada->id }}">{{ $jornada->name }}</option>
                @endforeach
            </select>
          </div>
         @error('expelabor.jornada_id')
            <span class="text-xs text-red-500">{{$message}}</span>
         @enderror
        </div>
        
        <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('Horas extras:')}}</label>
            <select wire:model="expelabor.hora_extra_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                <option value="">{{ __('-- Horas extras diarias --')}}</option>
                @foreach ($hora_extras as $hora_extra)
                    <option value="{{ $hora_extra->id }}">{{ $hora_extra->name }}</option>
                @endforeach
            </select>
          </div>
         @error('expelabor.hora_extra_id')
            <span class="text-xs text-red-500">{{$message}}</span>
         @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Fecha de Inicio del contrato:')}}</label>
                <input wire:model="expelabor.fechaIni" class="form-input w-full">
            </div>
            @error('expelabor.fechaIni')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Fecha de finalización:')}}</label>
                <input wire:model="expelabor.fechaFin" class="form-input w-full">
            </div>
            @error('expelabor.fechaFin')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mt-4 flex justify-end">

            <button wire:click="update" class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">Actualizar</button>
               
            <button wire:click="cancel" class="w-32 text-sm ml-2 bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">Cancelar</button>
        </div>

        @else
              
        <header>
            <h1> <i class="fas fa-graduation-cap text-blue-500 mr-1"></i> {{ __('Experiencia laboral en: ')}}{{$item->organization}}</h1>
        </header>

        <div>
            <hr class="my-2">
            
            <p class="text-sm">{{ __('Organización: ')}}{{$item->organization}}</p>
            <p class="text-sm">{{ __('País: ')}} {{ $item->province->country->name }}</p>
            <p class="text-sm">{{ __('Provincia: ')}}{{ $item->province->name }}</p>
            <p class="text-sm">{{ __('Decripción: ')}}{{$item->description}}</p>
            <p class="text-sm">{{ __('Centro de Salario: ')}}{{$item->salary}}</p>
            <p class="text-sm">{{ __('Categoría: ')}}{{$item->cat_profe->name}}</p>
            <p class="text-sm">{{ __('Jornada: ')}}{{$item->jornada->name}}</p>
            @if ($item->hora_extra)
            <p class="text-sm">{{ __('Horas extra: ')}}{{$item->hora_extra->name}}</p>
            @else 
            <p class="text-sm">{{ __('Horas extra: ')}}{{ __('Sin horas estras')}}</p>
            @endif
            
            <p class="text-sm">{{ __('Fecha de Inicio: ')}}{{$item->fechaIni}}</p>
            <p class="text-sm">{{ __('Fecha de finalización: ')}}{{$item->fechaFin}}</p>
            <p class="text-sm">

                @switch($item->status)
                           @case(1)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps propuestos ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 ml-1">{{ $item->cat_profe->value }}</span>
                             </span>
                               @break
                           @case(2)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps en revisión ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 ml-1">{{ $item->cat_profe->value }}</span>
                             </span>
                               @break
                           @case(3)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Verificados ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 ml-1">{{ $item->cat_profe->value }}</span>
                             </span>
                               @break
                           @case(4)
                           <span class="inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Denegados:')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 ml-1">{{ $item->cat_profe->value }}</span>
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
        {{ __('Agregar nueva experiencia laboral')}}
    </a>

    <article class="card" x-show="open">
        <div class="card-body bg-white">
          <h1 class="text-xl font-bold mb-4">{{ __('Agregar nueva experiencia laboral')}}</h1>

          <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Organización:')}}</label>
                <input wire:model="organization" class="form-input w-full">
            </div>
            @error('organization')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
         </div>

         <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('País:')}}</label>
            <select wire:model="country" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                <option value="">{{ __('-- Escoge un país --')}}</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
          </div>
          @error('country')
            <span class="text-xs text-red-500">{{$message}}</span>
          @enderror
        </div>

        <div class="mt-2">
            <div class="flex items-center">
            <label class="w-64">{{ __('Provincia:')}}</label>
            <select wire:model="province" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                @if ($provinces->count() == 0)
                        <option value="">{{ __('-- Escoge un país primero --')}}</option>
                @endif
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
          </div>
          @error('province')
            <span class="text-xs text-red-500">{{$message}}</span>
          @enderror
        </div>

          <div class="mb-4">
            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Descripción del puesto:')}}</label>
                    <input wire:model="description" class="form-input w-full">
                </div>
                @error('description')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Salario:')}}</label>
                    <input wire:model="salary" class="form-input w-full">
                </div>
                @error('salary')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
          </div>
    
          <div class="mt-2">
            <div class="flex items-center">
                <label class="w-64">{{ __('Categoría:')}}</label>
                <select wire:model="cat_prof_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Escoge una categoría --')}}</option>
                    @foreach ($cat_profes as $cat_profe)
                        <option value="{{ $cat_profe->id }}">{{ $cat_profe->name }}</option>
                    @endforeach
                </select>
            </div>
             @error('cat_prof_id')
                <span class="text-xs text-red-500">{{$message}}</span>
             @enderror

             <div class="mt-2">
                <div class="flex items-center">
                <label class="w-64">{{ __('Duración de la Jornada:')}}</label>
                <select wire:model="jornada_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Escoge una jornada laboral --')}}</option>
                    @foreach ($jornadas as $jornada)
                        <option value="{{ $jornada->id }}">{{ $jornada->name }}</option>
                    @endforeach
                </select>
              </div>
             @error('jornada_id')
                <span class="text-xs text-red-500">{{$message}}</span>
             @enderror
            </div>
            
            <div class="mt-2">
                <div class="flex items-center">
                <label class="w-64">{{ __('Horas extras:')}}</label>
                <select wire:model="hora_extra_id" class="mt-2 px-2 text-sm sm:text-base rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                    <option value="">{{ __('-- Horas extras diarias --')}}</option>
                    @foreach ($hora_extras as $hora_extra)
                        <option value="{{ $hora_extra->id }}">{{ $hora_extra->name }}</option>
                    @endforeach
                </select>
              </div>
             @error('hora_extra_id')
                <span class="text-xs text-red-500">{{$message}}</span>
             @enderror
            </div>
    
            <div class="mt-2">
                <div class="flex items-center">
                    <label class="w-64">{{ __('Fecha de Inicio del empleo:')}}</label>
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

