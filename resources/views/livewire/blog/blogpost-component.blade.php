<div>
    {{-- Selects --}}
    <div class="container bg-gray-200 py-4 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-undo-alt text-xs mr-2"></i> {{ __('Reset')}}</button>


            <!-- Dropdown categorias-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow px-4 text-gray-700" x-on:click="open = true">
                    <i class="fas fa-globe-europe text-sm mr-2"></i>
                    {{ __('Provincia')}}
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl z-30" x-show="open" x-on:click.away="open = false">
                    @foreach ($provinces as $province)
                <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-200 hover:text-white" wire:click="$set('province_id', {{$province->id}})" x-on:click="open = false">{{$province->name}}</a>
                    @endforeach
                    
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown tipo empleo, comercial, poryectos sociales-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow px-4 text-gray-700" x-on:click="open = true">
                    <i class="fas fa-filter text-sm mr-2"></i>
                    {{ __('Tipo')}}
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl z-30" x-show="open" x-on:click.away="open = false">
                    @foreach ($typeposts as $typepost)
                <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-200 hover:text-white" wire:click="$set('typepost_id', {{$typepost->id}})" x-on:click="open = false">{{$typepost->name}}</a>
                    @endforeach
                    
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown niveles-->
            <div class="relative" x-data="{ open: false }">
                <button class="block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow px-4 text-gray-700" x-on:click="open = true">
                    <i class="fas fa-filter text-sm mr-2"></i>
                    {{ __('Categoría')}}
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl z-30" x-show="open" x-on:click.away="open = false">
                    @foreach ($categoriaposts as $categoriapost)
                <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-200 hover:text-white" wire:click="$set('categoriapost_id', {{$categoriapost->id}})" x-on:click="open = false">{{$categoriapost->name}}</a>
                    @endforeach
                   
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
        </div>
    </div>

    <div class="container py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
           @foreach ($blogposts as $blogpost)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($blogpost->image) {{Storage::url($blogpost->image->url)}} @else {{ asset('storage/img/sinFondo.png') }} @endif)">
                <div class="w-full h-full px-8 flex flex-col justify-center">

                     <div class="flex">

                    <div>
                        @foreach ($blogpost->profesion as $profesi)
                            <a class="inline-block px-3 h-6 bg-{{$profesi->color}}-600 text-white rounded-full mb-2" href="{{route('posts.profesion', $profesi)}}">{{$profesi->name}}</a>
                        @endforeach
                    </div>

                    <div>
                        @foreach ($blogpost->especializacion as $especial)
                            <a class="inline-block px-3 h-6 bg-{{$especial->color}}-600 text-white rounded-full mb-2 ml-2" href="{{route('posts.especializacion', $especial)}}">{{$especial->name}}</a>
                        @endforeach
                    </div>
                     </div>

                    <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{route('posts.show', $blogpost)}}">
                            {{$blogpost->name}}
                        </a>
                    </h1>

                    <div class="flex text-base text-white mt-12">
                              
                        <a href="{{route('posts.province', $blogpost->province)}}" class="inline-block bg-gray-400 rounded-full px-4">{{$blogpost->province->name}}</a>
                        <a href="{{route('posts.type', $blogpost->typepost)}}" class="inline-block bg-gray-400 rounded-full px-4 ml-2">{{$blogpost->typepost->name}}</a>
                        <a href="{{route('posts.category', $blogpost->categoriapost)}}" class="inline-block bg-gray-400 rounded-full px-4 ml-2">{{$blogpost->categoriapost->name}}</a>
                    
                    </div>
                </div>
            </article>
          @endforeach

        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
           {{$blogposts->links()}}
        </div> 
    </div>



</div>
