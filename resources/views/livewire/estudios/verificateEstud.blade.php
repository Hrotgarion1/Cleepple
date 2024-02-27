<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">


            <form action="{{route('verificar-estudios.store')}}" method="POST">
                 @csrf
                <div class="bg-white px-4 pt-5 pb-4 mb-6 sm:p-6 sm:pb-4">
                    <img src="{{ asset('storage/img/nombreSinFondo1.png') }}" class="rounded-full mb-4"
                        style="width: 10rem" alt="">
                    
                        <div class="mb-4">
                            <label for="exampleFormControlInput6"
                        class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-verificateEstud')}}</label>
                            <input type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput6" placeholder="{{ __('estudios.placeholder-verificateEstud')}}">
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-1-verificateEstud')}}</label>
                            <input type="text" name="centro"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="{{ __('estudios.placeholder-1-verificateEstud')}}" wire:model="centro" readonly>
                           
                        </div>
    
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-2-verificateEstud')}}</label>
                            <input type="text" name="curso"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" placeholder="{{ __('estudios.placeholder-2-verificateEstud')}}" wire:model="curso" readonly>
                           
                        </div>
    
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-5-verificateEstud')}}</label>
                            <input type="text" name="fechaIni"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput4" placeholder="{{ __('estudios.placeholder-5-verificateEstud')}}"
                                wire:model="fechaIni" readonly>
                           
                        </div>
    
                        <div class="mb-4">
                            <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">{{ __('estudios.label-6-verificateEstud')}}</label>
                            <input type="text" name="fechaFin"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput5" placeholder="{{ __('estudios.placeholder-6-verificateEstud')}}"
                                wire:model="fechaFin" readonly>
                            
                        </div>
                    
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex mb-6 sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button type="submit"
                            class="w-32 text-sm bg-gray-800 hover:bg-blue-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-gray-600 transition ease-in-out duration-300">
                            {{ __('estudios.button-verificateEstud')}}
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalVerificate()" type="button"
                            class="w-32 text-sm bg-red-800 hover:bg-red-dark text-white uppercase py-1 px-6 rounded-lg mt-3 hover:bg-red-600 transition ease-in-out duration-300">
                            {{ __('estudios.button-1-verificateEstud')}}
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
