<div class="w-full p-2 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-idioma">
      {{ trans('select.title-select-situacion') }}
    </label>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-800 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-200" id="grid-state">
        <option>{{ trans('select.option-select-situacion') }}</option>
        <option>{{ trans('select.option-1-select-situacion') }}</option>
        <option>{{ trans('select.option-2-select-situacion') }}</option>
        <option>{{ trans('select.option-3-select-situacion') }}</option>
        <option>{{ trans('select.option-4-select-situacion') }}</option>
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>