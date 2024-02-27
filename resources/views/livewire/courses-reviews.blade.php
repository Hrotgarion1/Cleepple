<section class="mt-4">
    <h1 class="font-bold text-3xl text-gray-800">{{ __('Valoraciones')}}</h1>

    @can('enrolled', $course)
        <article class="mb-4">

            @can('valued', $course)
                
         <textarea wire:model="comment" class="form-input w-full" rows="3" placeholder="Ingresar reseña"></textarea>

         <div class="flex items-center mb-2">
            <button wire:click="store" class="btn btn-primary mr-2">Guardar</button>

            <ul class="flex">
                <li class="mr-1 cursor-pointer" wire:click="$set('rating', 1)">
                    <i class="fas fa-star text-{{$rating >= 1 ? 'yellow' : 'gray'}}-300"></i>
                </li>
                <li class="mr-1 cursor-pointer" wire:click="$set('rating', 2)">
                    <i class="fas fa-star text-{{$rating >= 2 ? 'yellow' : 'gray'}}-300"></i>
                </li>
                <li class="mr-1 cursor-pointer" wire:click="$set('rating', 3)">
                    <i class="fas fa-star text-{{$rating >= 3 ? 'yellow' : 'gray'}}-300"></i>
                </li>
                <li class="mr-1 cursor-pointer" wire:click="$set('rating', 4)">
                    <i class="fas fa-star text-{{$rating >= 4 ? 'yellow' : 'gray'}}-300"></i>
                </li>
                <li class="mr-1 cursor-pointer" wire:click="$set('rating', 5)">
                    <i class="fas fa-star text-{{$rating == 5 ? 'yellow' : 'gray'}}-300"></i>
                </li>
            </ul>

           </div>

           @else 

           <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">{{ __('Mensaje de información!')}}</p>
                <p class="text-sm">{{ __('Este curso ya a sido valorado.')}}.</p>
              </div>
            </div>
          </div>

          @endcan
        </article>
    @endcan

    <div class="card">
        <div class="card-body">
            {{-- Este método ($course->reviews->count()) me indica cuantos reviews tiene el curso --}}
            <p class="text-gray-800 text-xl mb-2">{{$course->reviews->count()}} valoraciones</p>

            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800">
                    <figure class="mr-4">
                        {{-- Me devuelve la imagen del usuario que escribió el review --}}
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>
                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b>{{$review->user->name}}</b> <i class="fas fa-star text-yellow-300"></i> ({{$review->rating}})</p>

                            {{$review->comment}}
                            
                        </div>
                        <div class="card flex-1">
                            <div class="card-body bg-gray-100">
                        <p class="text-xs text-gray-800">{{$review->created_at}}</p>
                        </div>
                        </div>

                    </div>
                    
                </article>
            @endforeach
        </div>
    </div>
</section>
