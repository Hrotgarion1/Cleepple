
<div class="flex flex-wrap p-3">
    <div class="w-full p-3 md:w-1/3">
        <div class="flex flex-wrap mx-auto max-w-4xl">
            <div class="w-full">
            <p class="w-full text-gray-800 text-xl">{{ __('estudios.title-estudio-component')}}</p>
            </div>
            <div class="w-full"><x-actual-estudios /></div>
            <div class="w-full md:w-1/2 py-1">
                <p class=" w-full text-gray-800">{{ __('estudios.data-estudio-component')}} <span class="text-gray-800">2.100</span></p>
            </div>
            <div class="w-full md:w-1/2 py-1">
                <p class=" w-full text-gray-800">{{ __('estudios.data-1-estudio-component')}}  <span class="text-red-800">0</span></p>
            </div>
          </div>
          <p class="text-gray-500 text-sm">{{ __('estudios.description-estudio-component')}}</p>
        
        <div class="mt-5 sm:flex sm:justify-center mx-auto max-w-4xl">
            <div class=" px-4 py-4">
                @if (session()->has('message'))
                    <div class="bg-white border-t-4 border-gray-500 rounded-xl text-gray-900 px-4 py-3 shadow-md my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <button wire:click="create()"
                    class="w-48 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">{{ __('estudios.button-estudio-component')}}</button>
                @if ($isOpen)
                    @include('livewire.estudios.createEstud')
                @endif
            </div>
    
        </div>
    </div>
        <!--Desde aqui el boton de crear-->
    
    
    <div class="w-full md:w-2/3">
        <table class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto">
            <tbody class="divide-y divide-gray-300 mb-10 rounded-lg">

                @foreach ($estudios as $estudio)
    
                    <tr class="flex flex-wrap mb-6 text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <td class="bg-gray-200 w-1/6 px-3 py-2">
                            <img src="{{ asset('storage/img/iconocleepplegrande.jpg') }}" class="rounded-full"
                                style="width: 2rem" alt="">
                        </td>
                        
                        {{-- administrador --}}
                        @if (auth()->user()->is_admin)
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('Usuario')}}</span> {{ $estudio->user->name }}</td>
                        @endif
                    @foreach ($estudio->profesion as $profesi)

                    <td class="bg-gray-200 w-3/6 py-2 px-3 text-right text-gray-800 text-lg">
                        {{ $profesi->name }}
                    </td>
                    <td class="bg-gray-200 w-2/6 py-2 px-3 text-right text-gray-800 text-lg">

                        @switch($estudio->status)
                           @case(1)
                           <span class="">
                               {{ __('estudios.td-estudio-component')}}<span class="text-red-800">0</span></p>
                             </span>
                               @break
                           @case(2)
                           <span class="">
                               {{ __('estudios.td-estudio-component')}}<span class="text-red-800">0</span></p>
                             </span>
                               @break
                           @case(3)
                           <span class="">
                               {{ __('estudios.td-estudio-component')}}<span class="px-2 inline-flex text-lg leading-5 font-semibold text-green-800 ml-1">{{ $estudio->category->value }}</span>
                             </span>
                               @break
                           @case(4)
                           <span class="">
                               {{ __('estudios.td-estudio-component')}}<span class="text-red-800">0</span></p>
                             </span>
                               @break
                           @default     
                         @endswitch
                    </td>
                        
                    @endforeach
                        
                        <!--desde aqui el body-->
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-1-estudio-component')}}</span> {{ $profesi->name }}</td>

                        @foreach ($estudio->especializacion as $especial)
                            <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-2-estudio-component')}}</span> {{ $especial->name }}</td>
                        @endforeach
                        
                        <td class="text-xs text-gray-600 w-full sm:w-2/3 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-3-estudio-component')}}</span> {{ $estudio->curso }}</td>

                        @if(!$estudio->observationEstudio)

                        <td class="text-xs text-gray-600 w-full sm:w-1/3 px-3 mx-auto mt-3">
                         @switch($estudio->status)
                           @case(1)
                           <span class="px-2 inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps propuestos ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 ml-1">{{ $estudio->category->value }}</span>
                             </span>
                               @break
                           @case(2)
                           <span class="px-2 inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps en revisión ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 ml-1">{{ $estudio->category->value }}</span>
                             </span>
                               @break
                           @case(3)
                           <span class="px-2 inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Verificados ')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 ml-1">{{ $estudio->category->value }}</span>
                             </span>
                               @break
                           @case(4)
                           <span class="px-2 inline-flex text-xs leading-5 text-gray-800 font-bold">
                               {{ __('Eps Denegados:')}}<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 ml-1">{{ $estudio->category->value }}</span>
                             </span>
                               @break
                           @default     
                         @endswitch
   
                        </td>
         
                        @else
   
                         <td class="text-xs text-gray-600 w-full sm:w-1/3 px-3 mx-auto mt-3">
                           <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 p-1"><i class="fas fa-exclamation">{{ __('Observación')}}</i></a>
                         </td>
   
                        @endif
                        
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-5-estudio-component')}}</span> {{ $estudio->centro }}</td>
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-6-estudio-component')}}</span> {{ $estudio->category->name }}</td>
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-7-estudio-component')}}</span> {{ $estudio->fechaIni }}</td>
                        <td class="text-xs text-gray-600 w-full sm:w-1/2 px-3 mx-auto mt-3"> <span class="text-gray-800 font-bold">{{ __('estudios.td-8-estudio-component')}}</span> {{ $estudio->fechaFin }}</td>
                        <td class=" w-full px-3 mb-1 mt-3">
    
                    
    
                            <button wire:click="verificate({{ $estudio->id }})"
                                class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">{{ __('estudios.button-2-estudio-component')}}</button>
                            @if ($isOpenVeri)
                                @include('livewire.estudios.verificateEstud')
                            @endif
                            
                            <button wire:click="delete({{ $estudio->id }})"
                                class="w-32 text-sm bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">{{ __('estudios.button-3-estudio-component')}}</button>
                        </td>
    
                    </tr>
                @endforeach
                <br>
            </tbody>
        </table>
        <div class="bg-gray-100 px-6 py-4 rounded-lg max-w-4xl mx-auto border-t border-gray-200">
            {{$estudios->links()}}
        </div>
    </div>
    </div>
    <!--nuevo-->
    