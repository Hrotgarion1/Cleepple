<x-centro-layout>
    <h1 class="text-3xl text-gray-600 my-4">Lista de cursos por validar</h1>

    @if (session('info'))
    <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Aprovado con éxito!')}}</strong>
          <span class="block sm:inline">{{session('info')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

  </div>
    @endif

    @if (session('infodeny'))
    <div class="lg:col-span-3" x-data="{open: true}" x-show="open">

      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{ __('Denegado!')}}</strong>
          <span class="block sm:inline">{{session('info')}}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>{{ __('Cerrar')}}</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>

  </div>
    @endif
   
    <x-table-responsive>
           
           <table class="min-w-full divide-y divide-gray-200">
             <thead class="bg-gray-50">
               <tr>
                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   {{ __('ID')}}
                 </th>
                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   {{ __('Nombre')}}
                 </th>
                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   {{ __('Categoría')}}
                 </th>
                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   {{ __('')}}
                 </th>
                 <th scope="col" class="relative px-6 py-3">
                   <span class="sr-only"></span>
                 </th>
               </tr>
             </thead>
             <tbody class="bg-white divide-y divide-gray-200">

                 @foreach ($courses as $course)
                 
               <tr>
                 <td class="px-6 py-4 whitespace-nowrap">
                     <div class="text-sm font-medium text-gray-900">
                         {{$course->id}}
                     </div>
                 </td>

                 <td class="px-6 py-4 whitespace-nowrap">
                     <div class="text-sm text-gray-900">
                        {{$course->title}}
                     </div>
                 </td>
 
                 <td class="px-6 py-4 whitespace-nowrap">
                     <div class="text-sm text-gray-900 flex items-center">
                        {{$course->category->name}}
                     </div>
                 </td>
                 
 
                 <td class="px-6 py-4 whitespace-nowrap">
 
                 </td>
                 
                 <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                   <a href="{{route('instructor.courses.show', $course)}}" class="text-indigo-600 hover:text-indigo-900">{{ __('Revisar')}}</a>
                 </td>
               </tr>
 
                @endforeach
             </tbody>
           </table>
 
           <div class="px-6 py-4">
             {{$courses->links()}}
           </div>
      
       
    </x-table-responsive>
</x-centro-layout>