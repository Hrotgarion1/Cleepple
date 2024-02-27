<x-app-layout>

     {{-- Ver el video de crear una plataforma de cursos para ver como utilizo los scripts --}}
    {{-- <x-slot name="post">
        {{$course->slug}}
   </x-slot> --}}

    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
        <figure>
            {{-- Para que no me muestre un error si el curso no tiene imagen, lo meto dentro de un if --}}
              @if ($course->image)
              <img class="h-60 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
              @else 
              <img class="object-cover object-center" src="{{ asset('storage/img/nombreSinFondo1.png') }}" alt="">
              @endif
        </figure>
       
        <div class="text-white">
         <h1 class="text-4xl">{{$course->title}}</h1>
         <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
         <p class="mb-2"><i class="fas fa-chart-line"></i>{{ __('Nivel:')}} {{$course->level->name}}</p>
         <p class="mb-2"><i class=""></i>{{ __('Categoria:')}} {{$course->category->name}}</p>
         <p class="mb-2">{{ __('Estatus:')}}
            
            @switch($course->status)

            @case(1)
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
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
            @default
                
             @endswitch  </p>
         
        </div>
        </div>
        </section>
       
        <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
    
            @if (session('info'))
                <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
    
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">{{ __('Error de validación!')}}</strong>
                        <span class="block sm:inline">{{session('info')}}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                          <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                      </div>
    
                </div>
            @endif
            <div class="order-2 lg:col-span-2 lg:order-1">
    
                {{-- Observaciones al por las cuales rechazo el curso --}}
               <section class="card mb-12">
                   <div class="card-body">
                    {!! Form::open(['route' => ['instructor.courses.deny', $course]]) !!}
                     <div class="my-2">
                         {!! Form::label('body', 'Observaciones del curso', ['class' => 'text-xl text-gray-500']) !!}
                     </div>
                     <div class="mb-2">
                        {!! Form::textarea('body', null, ['class' => 'w-full border border-gray-200 rounded-lg']) !!}

                        @error('body')
                            <strong class="text-red-600">{{$message}}</strong>
                        @enderror
                     </div>
                     {!! Form::submit('Rechazar curso', ['class' => 'btn btn-secondary']) !!}
                     {!! Form::close() !!}
                   </div>
               </section>
       

              
 
       
            </div>
       
            <div class="order-1 lg:order-2">
                 <section class="card mb-4">
                     <div class="card-body">
                         <div class="flex items-center">
                             <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                             <div class="ml-4">
                                 <h1 class="font-bold text-gray-500 text-lg">{{ __('Profesor:')}}{{$course->teacher->name}}</h1>
                                 <a class="text-blue-400 text-sm font-bold" href="">{{'@' .Str::slug($course->teacher->name, '')}}</a>
                               </div>
                         </div>
                      
                        
                         
       
                     </div>
                 </section>
       
                 
            </div>
       
        </div>

        <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script>
        // Al editor CKEditor debo de pasarle el id del textarea que quiero que lo utilice, el extract y el body
          ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
               console.error( error );
            } );
        </script>
        </x-slot>
</x-app-layout>