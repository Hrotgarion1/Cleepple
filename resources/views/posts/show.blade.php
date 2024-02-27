<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$blogpost->name}}</h1>
        <div class="flex text-2xl font-bold text-gray-600">
          <a href="{{route('posts.province', $blogpost->province)}}">{{ __('Provincia: ')}}<span class="text-3xl font-bold text-blue-600">{{$blogpost->province->name}}</span></a> 
          <a class="ml-8" href="{{route('posts.type', $blogpost->typepost)}}">{{ __('Tipo: ')}}<span class="text-3xl font-bold text-blue-600">{{$blogpost->typepost->name}}</span></a> 
          <a class="ml-8"  href="{{route('posts.category', $blogpost->categoriapost)}}" class="ml-8">{{('Categoría: ')}}<span class="text-3xl font-bold text-blue-600">{{$blogpost->categoriapost->name}}</span></a> 
        </div>

        <div class="text-lg text-gray-500 mb-2">
            {!!$blogpost->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          
            {{-- contenido principal del post --}}
            <div class="lg:col-span-2">

                <figure>
                    @if ($blogpost->image)
                       <img class="w-full h-72 object-cover object-center" src="{{Storage::url($blogpost->image->url)}}" alt="">
                    @else
                       <img class="w-full h-72 object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$blogpost->body!!}
                </div>
            </div>

            {{-- contenido relacionado con este post --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en <span class="text-3xl font-bold text-blue-600">{{$blogpost->categoriapost->name}}</span></h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                               
                                @if ($similar->image)
                                   <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                   <img class="w-36 h-20 object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                                @endif

                               <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>