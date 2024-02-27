<header class="fixed max-w-4xl mx-auto h-16">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <!--Menu desplegable-->

    <!--El primer max-width que tengo debajo controla la barra superior cuando se esconde-->
    <div class="z-10 w-full">

        <div @click.away="open = false"
            class="flex flex-col max-width bg-white text-gray-700  dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
            x-data="{ open: false }">

            <div class="flex-shrink-0  pb-3 flex flex-row items-center justify-between">


                <!--El mx-width de esta clase controla cuando se esconde el boton en la barra superior-->
                <button class="rounded-lg max-width:hidden focus:outline-none" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <nav :class="{'block': open, 'hidden': !open}"
                class="flex-grow max-width:block px-4 pb-4 md:pb-0 md:overflow-y-auto">

                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#">Mi CleepCard</a>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex rounded-lg justify-between items-center py-2 px-6 mt-2 text-gray-500 cursor-pointer hover:bg-gray-200 hover:text-gray-500 focus:outline-none">
                        <span class="flex items-center">
                            <i class="fas fa-search-plus"></i>

                            <span class="mx-4 font-medium">Buscadores</span>
                        </span>

                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </button>

                    <div x-show="open" class="bg-white">
                        <a class=" fas fa-hand-holding-usd py-2 px-16 mt-2 block text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"> Ofertas de Empleo</a>
                        <a class="fas fa-map-marked-alt py-2 px-16 mt-2 block text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"> Empresas</a>
                        <a class="fas fa-people-arrows py-2 px-16 mt-2 block text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"> Socios</a>
                        <a class="fas fa-notes-medical py-2 px-16 mt-2 block text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"> Proyectos Sociales</a>
                        <a class="fas fa-users py-2 px-16 mt-2 block text-sm text-gray-500 rounded-lg hover:bg-gray-200 hover:text-gray-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#"> Centros Sociales</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Hasta aqui el menu -->

