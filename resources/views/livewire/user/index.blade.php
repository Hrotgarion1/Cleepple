<div class="">
  <div class="">
    <h1 class="text-3xl font-bold mb-2">{{ __('Listado de Posts')}}</h1>
     <a class="bg-gray-500 text-white rounded-lg p-2" href="{{route('user.postsblog.create')}}">{{ __('Nuevo post')}}</a>
  </div>


 <div class="">
    <input wire:model="search" class="w-full text-base mt-6 text-gray-900 p-2 bg-gray-100 rounded-lg" placeholder="Ingresar nombre de post">
 </div>
 @if ($postblogs->count())
   <div class="flex flex-col mt-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Name')}}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Status')}}
                </th>
                <th scope="col" class="relative px-6 py-3">
                  
                </th>
                <th scope="col" class="relative px-6 py-3">
                    
                  </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($postblogs as $postblog)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      @isset($postblog->image)
                         <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($postblog->image->url)}}" alt="">
                         @else 
                         <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                      @endisset
                    </div>

                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{$postblog->name}}
                      </div>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-4 whitespace-nowrap">

                    @switch($postblog->status)
                    @case(1)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        {{ __('Borrador')}}
                      </span>
                        @break
                    @case(2)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{ __('Publicado')}}
                      </span>
                        @break
                    @endswitch
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{route('user.postsblog.edit', $postblog)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <form action="{{route('user.postsblog.destroy', $postblog)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="rounded-lg text-red-500 hover:text-red-900 text-base p-2" type="submit">{{ __('Eliminar')}}</button>
                    </form>
                </td>
              </tr>
              @endforeach
              <!-- More items... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
   <div class="mt-2">
    {{$postblogs->links()}}
   </div>
 @else 
  <div class="mt-2">
    <strong class="text-red-600">{{ __('No hay ningún registro')}}</strong>
 </div>
   
 @endif

</div>
  
