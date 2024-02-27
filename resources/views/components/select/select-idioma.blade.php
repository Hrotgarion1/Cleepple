
  <!-- component -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <div class="flex p-2">
  <div x-data="{ dropdownOpen: false }" class="relative">
      <div class="relative bg-white rounded-lg hover:bg-gray-200 flex flex-wrap w-48">
    <button @click="dropdownOpen = !dropdownOpen" class=" w-5/6 z-10 block">
      <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
     {{ trans('select.title-select-idioma')}}
    </button>
    
  </div>
  
    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
  
    <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-24 bg-white rounded-md shadow-xl z-20">
      <div class="flex flex-wrap w-full hover:bg-gray-200">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/ES.png') }}">
        </div>
        <div class="flex-initial">
            <a href="{{ url('lang', ['es']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
              {{ trans('select.label-select-idioma') }}
            </a>
        </div>
      </div>
  
      <div class="flex flex-wrap w-full hover:bg-gray-200">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/GB.png') }}">
        </div>
        <div class="flex-initial">
            <a href="{{ url('lang', ['en']) }}" class="block py-1 text-sm capitalize text-gray-700  hover:text-gray-800" >
              {{ trans('select.label-1-select-idioma') }}
              </a>
        </div>
      </div>
  
      <div class="flex flex-wrap w-fullhover:bg-gray-200">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/DE.png') }}">
        </div>
        <div class="flex-initial">
            <a href="{{ url('lang', ['de']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
              {{ trans('select.label-2-select-idioma') }}
             </a>
        </div>
      </div>
  
      <div class="flex flex-wrap w-full hover:bg-gray-200">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/FR.png') }}">
        </div>
        <div class="flex-initial">
            <a href="{{ url('lang', ['fr']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
              {{ trans('select.label-3-select-idioma') }}
            </a>
        </div>
      </div>

      <div class="flex flex-wrap w-full hover:bg-gray-200">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/it.png') }}">
        </div>
        <div class="flex-initial">
            <a href="{{ url('lang', ['it']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
              {{ trans('select.label-4-select-idioma') }}
            </a>
        </div>
      </div>
      
    </div>
  </div>

  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
   
  </div>
  </div>
