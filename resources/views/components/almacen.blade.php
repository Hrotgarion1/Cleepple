 {{-- <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<!--
  Custom select controls like this require a considerable amount of JS to implement from scratch. We're planning
  to build some low-level libraries to make this easier with popular frameworks like React, Vue, and even Alpine.js
  in the near future, but in the mean time we recommend these reference guides when building your implementation:

  https://www.w3.org/TR/wai-aria-practices/#Listbox
  https://www.w3.org/TR/wai-aria-practices/examples/listbox/listbox-collapsible.html
-->
<div class="space-y-1">
    <label id="listbox-label" class="block text-sm leading-5 font-medium text-gray-700">
      Assigned to
    </label>
    <div class="relative">
      <span class="inline-block w-full rounded-md shadow-sm">
        <button type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" class="cursor-default relative w-full rounded-md border border-gray-300 bg-white pl-3 pr-10 py-2 text-left focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
          <div class="flex items-center space-x-3">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
            <span class="block truncate">
              Tom Cook
            </span>
          </div>
          <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="none" stroke="currentColor">
              <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
        </button>
      </span>
  
      <!--
        Select popover, show/hide based on select state.
  
        Entering: ""
          From: ""
          To: ""
        Leaving: "transition ease-in duration-100"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="max-h-56 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
          <!--
            Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
            Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
          -->
          <li id="listbox-item-0" role="option" class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
            <div class="flex items-center space-x-3">
              <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
              <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
              <span class="font-normal block truncate">
                Wade Cooper
              </span>
            </div>
  
            <!--
              Checkmark, only display for selected option.
  
              Highlighted: "text-white", Not Highlighted: "text-indigo-600"
            -->
            <span class="absolute inset-y-0 right-0 flex items-center pr-4">
              <!-- Heroicon name: check -->
              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </span>
          </li>
  
          <!-- More options... -->
        </ul>
      </div>
    </div>
  </div>


  <!-- Aqui empieza el select de los idiomas que tiene banderas-->

  <!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="flex p-2">
<div x-data="{ dropdownOpen: false }" class="relative">
    <div class="bg-white rounded-lg flex flex-wrap w-64">

    
    <img src="{{ asset('storage/img/ES.png') }}" class="p-3 w-1/6">
  <button @click="dropdownOpen = !dropdownOpen" class=" w-5/6 z-10 block rounded-lg hover:bg-gray-200">
   Seleciona Idioma
  </button>
</div>

  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-24 bg-white rounded-md shadow-xl z-20">
    <div class="flex flex-wrap hover:bg-blue-500">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/ES.png') }}">
        </div>
        <div class="flex-initial">
            <a href="#" class="block py-1 text-sm capitalize text-gray-700 hover:text-white">
                Español
            </a>
        </div>
    </div>

    <div class="flex flex-wrap hover:bg-blue-500">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/GB.png') }}">
        </div>
        <div class="flex-initial">
            <a href="#" class="block py-1 text-sm capitalize text-gray-700  hover:text-white" >
            English
              </a>
        </div>
    </div>

    <div class="flex flex-wrap hover:bg-blue-500">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/DE.png') }}">
        </div>
        <div class="flex-initial">
            <a href="#" class="block py-1 text-sm capitalize text-gray-700 hover:text-white">
            Deutsche
             </a>
        </div>
    </div>

    <div class="flex flex-wrap hover:bg-blue-500">
        <div class="flex-initial">
            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/FR.png') }}">
        </div>
        <div class="flex-initial">
            <a href="#" class="block py-1 text-sm capitalize text-gray-700 hover:text-white">
            français
            </a>
        </div>
    </div>
    
  </div>
</div>
</div> --}}

{{-- <div class="w-full p-2 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-idioma">
    Selecciona un idioma
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-800 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-200" id="grid-state">
      <option>Español</option>
      <option>English</option>
      <option>Deutsche</option>
      <option>français</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
</div> --}}

<div class="mx-3 my-3">
  <p>{{ trans('profile.home') }}</p>
</div>

 {{-- <div class="w-full flex flex-wrap">
                <div class="flex flex-wrap w-1/4 hover:bg-gray-200">
                    <div class="flex-initial">
                        <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/GB.png') }}">
                    </div>
                    <div class="flex-initial">
                        <a href="{{ url('lang', ['en']) }}" class="block py-1 text-sm capitalize text-gray-700  hover:text-gray-800" >
                          {{ trans('select.label-1-select-idioma') }}
                          </a>
                    </div>
                  </div>
                    <div class="flex flex-wrap w-1/4 hover:bg-gray-200">
                        <div class="flex-initial">
                            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/ES.png') }}">
                        </div>
                        <div class="flex-initial">
                            <a href="{{ url('lang', ['es']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
                              {{ trans('select.label-select-idioma') }}
                            </a>
                        </div>
                      </div>
                      

                      <div class="flex flex-wrap w-1/4 hover:bg-gray-200">
                        <div class="flex-initial">
                            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/DE.png') }}">
                        </div>
                        <div class="flex-initial">
                            <a href="{{ url('lang', ['de']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
                              {{ trans('select.label-2-select-idioma') }}
                             </a>
                        </div>
                      </div>
                      
                      <div class="flex flex-wrap w-1/4 hover:bg-gray-200">
                        <div class="flex-initial">
                            <img class="ml-2 px-1 mt-2" src="{{ asset('storage/img/FR.png') }}">
                        </div>
                        <div class="flex-initial">
                            <a href="{{ url('lang', ['fr']) }}" class="block py-1 text-sm capitalize text-gray-700 hover:text-gray-800">
                              {{ trans('select.label-3-select-idioma') }}
                            </a>
                        </div>
                      </div>
                    </div> --}}
