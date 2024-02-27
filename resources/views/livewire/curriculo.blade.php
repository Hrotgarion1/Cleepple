<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-briefcase"></i>
          {{ __('livewire.title-curriculo') }}
      </h2>
  </x-slot>

  <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
         
        <div class="mt-10 sm:mt-0">
            <x-resumen-c-v />
        </div>

        <x-jet-section-border />

          <div class="mt-10 sm:mt-0">
              <livewire:estudio-component />
          </div>

          <x-jet-section-border />

          <div class="mt-10 sm:mt-0">
             
          </div>

          <x-jet-section-border />

          <div class="mt-10 sm:mt-0">
              
          </div>

          <x-jet-section-border />

          <div class="mt-10 sm:mt-0">
             
          </div>

          <x-jet-section-border />

          
      </div>
  </div>
  @if (session('infoveri'))
  <script>
      toastr("{{session('infoveri')}}");
  </script>
      
@endif
</x-app-layout>
