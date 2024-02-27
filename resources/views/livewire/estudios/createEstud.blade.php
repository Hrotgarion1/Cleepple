<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 mb-6 sm:pb-4">
                    <img src="{{ asset('storage/img/nombreSinFondo1.png') }}" class="rounded-full mb-4"
                        style="width: 10rem" alt="">


                    <div class="mb-4">
                    <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput1" placeholder="{{ __('estudios.placeholder-createEstud')}}" wire:model="centro">
                        @error('centro') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-1-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput2" placeholder="{{ __('estudios.placeholder-1-createEstud')}}" wire:model="curso">
                        @error('curso') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput3"
                            class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-2-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput3" placeholder="{{ __('estudios.placeholder-2-createEstud')}}"
                            wire:model="categoria">
                        @error('categoria') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-3-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput4" placeholder="{{ __('estudios.placeholder-3-createEstud')}}"
                            wire:model="fechaIni">
                        @error('fechaIni') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-4-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput5" placeholder="{{ __('estudios.placeholder-4-createEstud')}}"
                            wire:model="fechaFin">
                        @error('fechaFin') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput6" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-5-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput6" placeholder="{{ __('estudios.placeholder-5-createEstud')}}" wire:model="eps">
                        @error('eps') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput7"
                            class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-6-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput7" placeholder="{{ __('estudios.placeholder-6-createEstud')}}" wire:model="profesion">
                        @error('profesion') <span class="text-red-500">{{ $message }}</span>@enderror

                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput8"
                            class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-7-createEstud')}}</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="exampleFormControlInput8" placeholder="{{ __('estudios.placeholder-7-createEstud')}}" wire:model="especializacion">
                        @error('especializacion') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>



                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex mb-6 sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">
                            {{ __('estudios.button-createEstud')}}
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="w-32 text-sm bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">
                            {{ __('estudios.button-1-createEstud')}}
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
