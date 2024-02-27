<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <div class="container py-8 grid grid-cols-5 gap-6">

                <aside>
                    <h1 class="font-bold text-lg mb-4">{{ __('Edición del curso')}}</h1>
        
                    <ul class=" text-sm text-gray-600 mb-4">
                        {{-- Aqui paso la nueva directiva de Balde para checkear la ruta @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif --}}
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.edit', $course)}}">{{ __('Información del curso')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.curriculum', $course)}}">{{ __('Lecciones del curso')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.goals', $course)}}">{{ __('Metas del curso')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.students', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.students', $course)}}">{{ __('Estudiantes')}}</a>
                        </li>
                        @if($course->observationCourse)

                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.observation', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a class="text-red-500" href="{{route('instructor.courses.observation', $course)}}">{{ __('Observaciones')}}</a>
                        </li>

                        @endif
                    </ul>

                    @switch($course->status)
                        @case(1)

                        @if($course->observationCourse)

                           <form action="{{route('instructor.courses.statusBack', $course)}}" method="POST">
                             @csrf
                             <button class="btn btn-danger" type="submit">{{ __('Solicitar revisión')}}</button>
                           </form>

                        @else

                        <div class="mt-4">
                            <form action="{{route('instructor.courses.status', $course)}}" method="POST">
                                @csrf
                                <button class="btn btn-secondary" type="submit">{{ __('Solicitar revisión')}}</button>
                            </form>
                        </div>

                        @endif
                            
                            @break
                        @case(2)
                            <div class="card text-gray-500">
                                <div class="card-body bg-yellow-100">
                                    Este curso se encuentra en revisión
                                </div>
                            </div>
                            @break

                        @case(3)
                        <div class="card text-gray-500">
                            <div class="card-body bg-green-200">
                                Este curso se encuentra publicado
                            </div>
                        </div>
                        <div class="mt-4">
                            <form action="{{route('instructor.courses.statusPaused', $course)}}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">{{ __('Pausar publicación')}}</button>
                            </form>
                        </div>
                            @break

                            @case(4)
                        <div class="card text-gray-500">
                            <div class="card-body bg-purple-200">
                                Este curso se encuentra pausado
                            </div>
                        </div>
                        <div class="mt-4">
                            <form action="{{route('instructor.courses.status', $course)}}" method="POST">
                                @csrf
                                <button class="btn btn-primary" type="submit">{{ __('Reutilizar')}}</button>
                            </form>
                        </div>
                        <div class="card text-gray-500 mt-4">
                            <div class="card-body">
                                Reutilizar envía el curso a revisión donde puede ser actualizado por el instructor.
                            </div>
                        </div>
                        
                            @break
                        @default
                            
                    @endswitch
                    
                    

                </aside>
        
                <div class="col-span-4 card">
        
                    <main class="card-body text-gray-600">
                      {{$slot}}
                    </main>
        
                </div>
        
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        {{-- Imprime la variable js si está definida en alguna otra página, si no lo está no la imprime. De momento esta impresa en instructor.courses.edit --}}
        @isset($js)
           {{$js}}
        @endisset
        
    </body>
</html>
