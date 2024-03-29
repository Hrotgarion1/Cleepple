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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="{{asset('vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
        
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <div class="container py-8 grid grid-cols-5">

                <aside>
                    <h1 class="font-bold text-lg mb-4">{{ __('Mis publicaciones')}}</h1>
        
                    <ul class=" text-sm text-gray-600">

                        @can('acceso_organizacion')
                            
                        {{-- Aqui paso la nueva directiva de Blade para checkear la ruta @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif --}}
                        <li class="leading-7 mb-1 border-l-4 @routeIs('user.postsblog.index') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('user.postsblog.index')}}">{{ __('Listado de posts')}}</a>
                        </li>
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('user.postsblog.create') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('user.postsblog.create')}}">{{ __('Publicar un post')}}</a>
                        </li>
                        
                        @endcan

                        @cannot('acceso_organizacion')
        
                        <li class="leading-7 mb-1 border-l-4 @routeIs('users.achievement-list') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('users.achievement-list')}}">{{ __('Listado de logros')}}</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('users.achievement') border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('users.achievement')}}">{{ __('Publicar un logro')}}</a>
                        </li>

                        @endcannot

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

        @isset($jsuser)
        {{$jsuser}}
        @endisset
        
        {{-- Imprime la variable jsuser si está definida en alguna otra página, si no lo está no la imprime. De momento esta impresa en user.postsblog.create --}}
        
    </body>
</html>