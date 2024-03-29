<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">{{ __('Zona:')}} {{$zonapost->name}}</h1>

        @foreach ($blogposts as $blogpost)
          <x-card-post :blogpost="$blogpost" />
        @endforeach
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
            {{$blogposts->links()}}
         </div> 
    </div>

</x-app-layout>