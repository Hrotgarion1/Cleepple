<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/centro/cleepple-nombre.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-red-800 font-bold text-4xl">{{ __('Cursos online de nuestros Centros de Estudios')}}</h1>
                <p class="text-gray-800 font-bold text-lg mt-2 mb-4">{{ __('Cursos online con los que podrás obtener la formación que necesitas y aumentar los Eps de tu Curriculum.')}}</p>

                @livewire('search')
            </div>
        </div>

    </section>

    @livewire('course-catalogo')
</x-app-layout>