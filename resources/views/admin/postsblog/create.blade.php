@extends('adminlte::page')

@section('title', 'Posts')

@section('plugins.Sweetalert2')
@section('plugins.Chartjs')
@section('plugins.Select2')



@section('content_header')
<h1>{{ __('Crear un Post')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- El valor del form::open 'files' => true sirve para que pueda enviar un archivo al controlador en el objeto $request --}}
            {!! Form::open(['route' => 'admin.postsblog.store', 'autocomplete' => 'off', 'files' => true]) !!}
             {{-- Input oculto para pasar el nombre del usuario a los post --}}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="from-group">
                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
            
                @error('name')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>

            <div class="from-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'readonly', 'placeholder' => 'Slug del post']) !!}
            
                @error('slug')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('typepost_id', 'Tipo') !!}
                {!! Form::select('typepost_id', $types, null, ['class' => 'form-control']) !!}
            
                @error('typepost_id')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('categoriapost_id', 'Categoria') !!}
                {!! Form::select('categoriapost_id', $categories, null, ['class' => 'form-control']) !!}
            
                @error('categoriapost_id')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('province_id', 'Provincias') !!}
                {!! Form::select('province_id', $provinces, null, ['class' => 'form-control']) !!}
            
                @error('province_id')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>

            <div class="form-group">
               <p class="font-weight-bold">{{ __('Profesiones')}}</p>

               @foreach ($profesiones as $profesion)
                   
               <label class="mr-2">
                    {!! Form::checkbox('profesiones[]', $profesion->id, null) !!}
                    {{$profesion->name}}
               </label>

               @endforeach
                <hr>
                @error('profesiones')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>
               
            <div class="form-group">

                <p class="font-weight-bold">{{ __('Especializaciones')}}</p>
 
                @foreach ($especializaciones as $especializacion)
                    
                <label class="mr-2">
                     {!! Form::checkbox('especializaciones[]', $especializacion->id, null) !!}
                     {{$especializacion->name}}
                </label>
 
                @endforeach
                  <hr>
                @error('especializaciones')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

            </div>
            

             <div class="form-group">

                <p class="font-weight-bold">{{ __('Estado del post')}}</p>

                <label>
                    {!! Form::radio('status', 1, true) !!}
                    {{ __('Borrador')}}
                </label>

                <label class="ml-2">
                    {!! Form::radio('status', 2) !!}
                    {{ __('Público')}}
                </label>

                @error('status')
                       <small class="text-danger">{{$message}}</small> 
                @enderror

             </div>

             <div class="row mb-3">
                 <div class="col">
                     <div class="image-wrapper">
                        <img id="picture-post" src="{{ asset('storage/img/sinFondo.png') }}" alt="">
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-group">
                         {!! Form::label('file', 'Imagen del post', ['class' => 'font-bold']) !!}
                         {{-- La clase accept => image/* es para que SOLO acepte imagenes y /* para que sean de cualquier formato --}}
                         {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                     </div>

                     @error('file')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur nam accusamus ab aperiam similique cumque numquam, quibusdam iusto asperiores. Facilis culpa architecto quas sed. Voluptatibus quae tenetur suscipit numquam?</p>
                 </div>
             </div>

             <div class="form-group">
                   {!! Form::label('extract', 'Extracto') !!}
                   {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

                    @error('extract')
                       <small class="text-danger">{{$message}}</small> 
                    @enderror

             </div>

             <div class="form-group">
                {!! Form::label('body', 'Cuerpo del post:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                    @error('body')
                       <small class="text-danger">{{$message}}</small> 
                    @enderror
             </div>

             {!! Form::submit('Crear post', ['class' => 'btn btn-secondary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        /* estilos del div */
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        /*estilos de la imagen que hay dentro del div*/
        .image-wrapper img{
             position: absolute;
             object-fit: cover;
             width: 100%;
             height: 100%;
        }
    </style>
@stop

@section('js')

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
{{-- CKEditor es para los textarea de los formularios,  --}}
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<script>
    $(document).ready( function() {
        //id del input que escucha, en este caso es el input name, y después el del input dónde quiero que 
        //lo pegue, es decir, en el input slug
    $("#name").stringToSlug({
      setEvents: 'keyup keydown blur',
      //id de donde lo va a pegar
      getPut: '#slug',
    space: '-'
  });
});

     //Select2 de provincias
    $(document).ready(function() {
        $('#province_id').select2();
         });

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

        //Cambiar imagen
        //Este código está a la escucha del input con id file
         document.getElementById("file").addEventListener('change', cambiarImagen);
         //Si selecciono un archivo se activa la función cambiarImagen
         function cambiarImagen(event){
            var file = event.target.files[0];
   
            var reader = new FileReader();
                reader.onload = (event) => {
           //aquín busca el elemento con el id picture-post y lo cambia en el atributo src          
         document.getElementById("picture-post").setAttribute('src', event.target.result); 
       };
   
       reader.readAsDataURL(file);
       }
       
</script>
@endsection