<x-usuario-layout>
    {{-- Ver el video de crear una plataforma de cursos para ver como utilizo los scripts --}}
    {{-- <x-slot name="post">
        {{$course->slug}}
   </x-slot> --}}
    <div>
        <h1 class="text-3xl text-gray-600 mb-2">{{ __('Crear un post')}}</h1>
        
    
        
            <div class="">
                {{-- Para que no se autocomplete el campo le pongo el atributo autocomplete off --}}
                 {{-- El valor del form::open 'files' => true sirve para que pueda enviar un archivo al controlador en el objeto $request --}}
                {!! Form::open(['route' => 'user.postsblog.store', 'autocomplete' => 'off', 'files' => true ]) !!}

                {{-- Input oculto para pasar el nombre del usuario a los post --}}
                  {!! Form::hidden('user_id', auth()->user()->id) !!}
    
                <div class="">
                    {!! Form::label('name', 'Nombre:', ['class' => 'text-base font-bold']) !!}
                    {!! Form::text('name', null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg', 'placeholder' => 'Ingrese el nombre']) !!}

                    @error('name')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
    
                <div class="from-group mt-2">
                    {!! Form::label('slug', 'Slug:', ['class' => 'text-base font-bold']) !!}
                    {!! Form::text('slug', null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg', 'readonly', 'placeholder' => 'Slug del post']) !!}
                
                    @error('slug')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>

                <div class="mt-2">
                    {!! Form::label('typepost_id', 'Tipo', ['class' => 'text-base font-bold']) !!}
                    {!! Form::select('typepost_id', $types, null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg']) !!}
                
                    @error('typepost_id')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
    
                <div class="mt-2">
                    {!! Form::label('categoriapost_id', 'Categoria', ['class' => 'text-base font-bold']) !!}
                    {!! Form::select('categoriapost_id', $categories, null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg']) !!}
                
                    @error('categoriapost_id')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
    
                <div class="mt-2">
                    {!! Form::label('province_id', 'Provincias', ['class' => 'text-base font-bold']) !!}
                    {!! Form::select('province_id', $provinces, null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg']) !!}
                </div>

                <div class="mt-2">
                    {!! Form::label('profesiones_id', 'Profesiones', ['class' => 'text-base font-bold']) !!}
                    {!! Form::select('profesiones_id', $profesiones, null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg']) !!}
                
                    @error('profesion_id')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>

                <div class="mt-2">
                    {!! Form::label('especializaciones_id', 'Especializaciones', ['class' => 'text-base font-bold']) !!}
                    {!! Form::select('especializaciones_id', $especializaciones, null, ['class' => 'w-full text-base p-1 mt-2 border border-gray-200 rounded-lg']) !!}
                
                    @error('especializacion_id')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
                
                  <div class="mt-2">

                    <p class="font-bold text-base">{{ __('Estado del post')}}</p>
    
                    <label>
                        {!! Form::radio('status', 1, true) !!}
                        {{ __('Borrador')}}
                    </label>
    
                    <label class="ml-2">
                        {!! Form::radio('status', 2) !!}
                        {{ __('Activo')}}
                    </label>

                    @error('status')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror
    
                 </div>

                 <div class="grid grid-cols-2 gap-4 my-4">
                    <div class="">
                        <div class="">
                           <img id="picture-post" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            {!! Form::label('file', 'Imagen del post', ['class' => 'font-bold']) !!}
                            {{-- La clase accept => image/* es para que SOLO acepte imagenes y /* para que sean de cualquier formato --}}
                            {!! Form::file('file', ['class' => 'form-control-file my-2', 'accept' => 'image/*']) !!}
                        </div>

                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur nam accusamus ab aperiam similique cumque numquam, quibusdam iusto asperiores. Facilis culpa architecto quas sed. Voluptatibus quae tenetur suscipit numquam?</p>

                            @error('file')
                            <span class="text-red-800 text-sm">{{$message}}</span>
                            @enderror
                    </div>
                </div>

                  <div class="mt-2">
                    {!! Form::label('extract', 'Extracto', ['class' => 'text-base font-bold']) !!}
                    {!! Form::textarea('extract', null, ['class' => 'w-full mt-1 border border-gray-200']) !!}
                
                    @error('extract')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
 
                  <div class="mt-2">
                    {!! Form::label('body', 'Cuerpo del post:', ['class' => 'text-base font-bold']) !!}
                    {!! Form::textarea('body', null, ['class' => 'w-full mt-1 border border-gray-200']) !!}
                
                    @error('body')
                       <strong class="text-red-600 text-sm">{{$message}}</strong> 
                    @enderror

                </div>
 
                    {!! Form::submit('Crear post', ['class' => 'btn bg-gray-600 text-white mt-2']) !!}
    
                {!! Form::close() !!}
            </div>
            
    </div>

    <x-slot name="jsuser">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{asset('js/blog/posts/form.js')}}"></script>
        
        <script>
          //Slug automático
      document.getElementById("name").addEventListener('keyup', slugChange);

     function slugChange(){
    
      title = document.getElementById("name").value;
      document.getElementById("slug").value = slug(title);

       }

       function slug (str) {
      var $slug = '';
      var trimmed = str.trim(str);
      $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
      replace(/-+/g, '-').
      replace(/^-|-$/g, '');
      return $slug.toLowerCase();
     }

      // Al editor CKEditor debo de pasarle el id del textarea que quiero que lo utilice, el extract y el body
      ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //Select2 de profesiones
       $(document).ready(function() {
         $('#province_id').select2();
          });

        </script>
    </x-slot>
    
    
 </x-usuario-layout>