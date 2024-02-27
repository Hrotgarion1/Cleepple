<x-app-layout>
    
    <section class="bg-cover" style="background-image: url({{ asset('img/centro/cleepple-nombre.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-red-800 font-bold text-4xl">{{ __('En Cleepple tenemos los mejores Centros de Estudios')}}</h1>
                <p class="text-gray-800 font-bold text-lg mt-2 mb-4">{{ __('Busca el curso que mejor se adapte a tus necesidades y obten algunos Eps extras al finalizarlo')}}</p>

                @livewire('search')
            </div>
        </div>

    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">{{ __('Estos son algunos de nuestros Centros registrados')}}</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/centro/imgcurso1.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ __('Centro 1')}}</h1>
                </header>
                   <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas enim, nostrum porro.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/centro/imgcurso2.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ __('Centro 2')}}</h1>
                </header>
                   <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas enim, nostrum porro.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/centro/imgcurso3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ __('Centro 3')}}</h1>
                </header>
                   <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas enim, nostrum porro.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/centro/imgcurso4.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ __('Centro 4')}}</h1>
                </header>
                   <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas enim, nostrum porro.</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-800 py-12">
      <h1 class="text-center text-white text-3xl">{{ __('¿No encuentras el curso que necesitas?')}}</h1>
      <p class="text-center text-white">{{ __('Dirígete al catálogo de cursos y filtralos por la categoría que más se ajuste a tus necesidades.')}}</p>
      <div class="flex justify-center mt-4">
      <a href="{{route('centro.catalogo')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Catálogo') }}</a>
    </div>
    </section>
    <section class="my-24">
        <h1 class="text-center text-gray-600 text-3xl">{{ __('Últimos cursos publicados!')}}</h1>
        <p class="text-center text-gray-600 text-sm mb-6">{{ __('En esta sección te mostramos los últimos cursos publicados por nuestros Centros de Estudios')}}</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($courses as $course)
                <x-course-card :course="$course" />
                 @endforeach
        </div>

    </section>
</x-app-layout>
