<x-centro-layout>
    Lista de cursos por validar a estudiantes
   
    {{-- <x-table-responsive>
           
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
                   <a href="" class="text-indigo-600 hover:text-indigo-900">{{ __('Revisar')}}</a>
                 </td>
               </tr>
 
                @endforeach
             </tbody>
           </table>
 
           <div class="px-6 py-4">
             {{$courses->links()}}
           </div>
      
       
    </x-table-responsive> --}}
</x-centro-layout>