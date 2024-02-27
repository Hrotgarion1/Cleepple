<div class="flex flex-wrap mb-4">
    <div class="w-full p-3 md:w-1/3">
        <p class="text-gray-800 text-xl"><i class="fas fa-tools mr-2"></i>{{ trans('components.title-ajustes') }}</p>
        <p class="text-gray-500 text-sm">{{ trans('components.description-ajustes') }}</p>
    </div>
    <div class="w-full flex flex-wrap md:w-2/3 bg-white shadow rounded-lg">
        <div class="w-full sm:w-1/2 p-3">
            <x-select-idioma />
            <x-toggle-button-buscadores />
        </div>
        <div class="w-full sm:w-1/2">
            <x-select-situacion-laboral />
            <x-toggle-button-empresa />
            
        </div>



    </div>
</div>
