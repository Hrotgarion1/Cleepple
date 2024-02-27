<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cleepple') }}</title>

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

            <div class="container py-8 grid grid-cols-5">

                <aside>
                    <h1 class="font-bold text-lg mb-4">{{ __('Mi centro de estudios')}}</h1>
        
                    <ul class=" text-sm text-gray-600">
                        {{-- Aqui paso la nueva directiva de Blade para checkear la ruta @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif --}}
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.portada') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.portada')}}">{{ __('Portada del Centro')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.catalogo') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.catalogo')}}">{{ __('Portada del Catálogo')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.index') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.index')}}">{{ __('Nuestros cursos')}}</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.check') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.check')}}">{{ __('Cursos por verificar')}}</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.studies') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.studies')}}">{{ __('Verificar cursos a estudiantes')}}</a>
                        </li>
                        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.lista-instructor') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.lista-instructor')}}">{{ __('Listado de Instructores')}}</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.lista-alumno') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.lista-alumno')}}">{{ __('Listado de Alumnos')}}</a>
                        </li>
                    </ul>
                     
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