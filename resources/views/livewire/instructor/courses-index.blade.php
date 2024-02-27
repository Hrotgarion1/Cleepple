<div class="container py-8">
    
  @if (session('info'))
    <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Nuevo!')}}</strong>
          <span class="block sm:inline">{{session('info')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

  </div>
    @endif

    @if (session('infodestroy'))
    <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Alerta!')}}</strong>
          <span class="block sm:inline">{{session('info')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

  </div>
    @endif

   <x-table-responsive>
       <div class="px-6 py-4 flex">
          <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" placeholder="{{ __('Ingrese el nombre de un curso')}}">
           
          <a class="btn btn-danger ml-2" href="{{route('instructor.courses.create')}}">{{ __('Crear nuevo curso')}}</a>
        </div>

       @if ($courses->count())
           
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Nombre')}}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Matriculados')}}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Calificación')}}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Estatus')}}
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Delete</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($courses as $course)
                
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      @isset($course->image)
                         <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
                         @else 
                         <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                      @endisset
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{$course->title}}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{$course->category->name}}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$course->students->count()}}</div>
                  <div class="text-sm text-gray-500">{{ __('Alumnos')}}</div>
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900 flex items-center">
                        {{$course->rating}}
                        <ul class="flex text-sm ml-2">
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="text-sm text-gray-500">{{ __('Valoraciones')}}</div>
                  </td>

                   {{-- El curso tiene observaciones --}}
                   

                     @if(!$course->observationCourse)

                     <td class="px-6 py-4 whitespace-nowrap">
                      @switch($course->status)
                        @case(1)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                            {{ __('Borrador')}}
                          </span>
                            @break
                        @case(2)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            {{ __('Revisión')}}
                          </span>
                            @break
                        @case(3)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ __('Publicado')}}
                          </span>
                            @break
                        @case(4)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                            {{ __('Pausado')}}
                          </span>
                            @break
                        @default     
                      @endswitch

                     </td>
      
                     @else

                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 p-1"><i class="fas fa-exclamation">{{ __('Observación')}}</i></a>
                      </td>

                     @endif
                    
                
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="{{route('instructor.courses.edit', $course)}}" class="text-indigo-600 hover:text-indigo-900">{{ __('Editar')}}</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="{{route('instructor.courses.destroy', $course)}}" class="text-red-600 hover:text-red-900">{{ __('Eliminar')}}</a>
                </td>
              </tr>

               @endforeach
              <!-- More rows... -->
            </tbody>
          </table>

          <div class="px-6 py-4">
            {{$courses->links()}}
          </div>
       @else 
          <div class="px-6 py-4">
            {{ __('No hay ningún registro que coincida')}}
          </div>
       @endif
   </x-table-responsive>
  
</div>
