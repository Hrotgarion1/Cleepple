<style>
    .toggle__dot {
    top: -.25rem;
    left: -.25rem;
    transition: all 0.3s ease-in-out;
  }
  
  input:checked ~ .toggle__dot {
    transform: translateX(100%);
    background-color: #4850bb;
  }
  </style>
<div class="flex p-2">
  
    <!-- Toggle Button -->
    <label 
      for="toogleSelf"
      class="flex items-center cursor-pointer"
    >
      <!-- toggle -->
      <div class="relative">
        <!-- input -->
        <input id="toogleSelf" type="checkbox" class="hidden" />
        <!-- line -->
        <div
          class="toggle__line w-10 h-4 bg-gray-200 rounded-full shadow-inner"
        ></div>
        <!-- dot -->
        <div
          class="toggle__dot absolute w-6 h-6 bg-white rounded-full shadow inset-y-0 left-0"
        ></div>
      </div>
      <!-- label -->
      <div class="ml-3 text-gray-800 font-medium">
        {{ trans('toggle.label-button-self') }}
        
      </div>
    </label>
</div>