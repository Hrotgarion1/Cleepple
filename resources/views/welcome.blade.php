<x-app-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 ">
                <img src="{{ asset('storage/img/nombreSinFondo1.png') }}" style="width: 20rem">
            </div>
            <div class="bg-gray-100">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                  <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    {{ __('views.label-welcome')}}
                    <br>
                    <span class="text-blue-400">{{ __('views.label-1-welcome')}}</span>
                  </h2>
                  <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">

                    <!--nuevo-->
{{-- 
                    @if (Route::has('login'))
                        <div class="inline-flex rounded-md">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="inline-flex items-center justify-center px-5 shadow py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">{{ __('views.button-welcome')}}</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center justify-center px-5 shadow py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">{{ __('views.button-1-welcome')}}</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="inline-flex items-center justify-center ml-3 px-5 shadow py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">{{ __('views.button-2-welcome')}}</a>
                                @endif
                        @endif
                    </div>
                    @endif --}}

                  </div>
                </div>
              </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">{{ __('Estudiantes y trabajadores')}}</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Cleepple es tu portal, aquí obtendrás el reconocimiento y la diferenciación que pondrá en alza todo tu esfuerzo, no lo dudes y registrate ahora!
                            </div>
                            @if (Route::has('login'))
                        <div class="inline-flex rounded-md">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="text-gray-600 text-xl p-3">{{ __('views.button-welcome')}}</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-gray-600 text-xl p-3">{{ __('views.button-1-welcome')}}</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-2-welcome')}}</a>
                                @endif
                        @endif
                    </div>
                    @endif
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Autónomos y PYMES</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quisquam nulla tenetur asperiores culpa, maiores dolore perspiciatis! Cum illum neque, corrupti quam explicabo culpa cupiditate dicta accusamus. Eaque, quis sunt?
                            </div>
                            @if (Route::has('login'))
                            <div class="inline-flex rounded-md">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-welcome')}}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-1-welcome')}}</a>
    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-gray-600 text-xl p-3">{{ __('views.button-2-welcome')}}</a>
                                    @endif
                            @endif
                        </div>
                        @endif
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Centros de Formación</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint nihil molestiae quis culpa asperiores provident aut quia ab distinctio molestias? Aspernatur hic facilis vitae quidem expedita voluptate minus illum provident.
                            </div>
                            @if (Route::has('login'))
                            <div class="inline-flex rounded-md">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-welcome')}}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-1-welcome')}}</a>
    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-gray-600 text-xl p-3">{{ __('views.button-2-welcome')}}</a>
                                    @endif
                            @endif
                        </div>
                        @endif
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">ONG´s y Entidades Sociales</a></div>
                            
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde minus, enim laboriosam quis earum odit? Optio corrupti dolores quasi vitae sit quia similique molestiae, repellendus nulla libero illum repudiandae doloremque.
                            </div>
                            @if (Route::has('login'))
                            <div class="inline-flex rounded-md">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-welcome')}}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-gray-600 text-xl p-3">{{ __('views.button-1-welcome')}}</a>
    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-gray-600 text-xl p-3">{{ __('views.button-2-welcome')}}</a>
                                    @endif
                            @endif
                        </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://www.josenunez.eu" class="ml-1 underline">
                            Desarrollado por Jose P. Nuñez
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                    &copy; Cleepple Copyright <?php
                    $then = 2019;
                    $now = date('Y');
                    if ($then == $now) {
                    echo $now;
                    } else {
                    echo "$then - $now";
                    }
                    ?>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Cleepple v1.3.0
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

