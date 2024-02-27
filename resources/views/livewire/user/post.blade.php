<div>
    <h1 class="text-3xl text-gray-600 mb-2">{{ __('Crear un post')}}</h1>
    

    
        <div class="">
            {{-- Para que no se autocomplete el campo le pongo el atributo autocomplete off --}}
            {!! Form::open(['route' => 'user.postsblog.store', 'autocomplete' => 'off' ]) !!}

            <div class="from-group">
                {!! Form::label('name', 'Nombre:', ['class' => 'text-base font-bold']) !!}
                {!! Form::text('name', null, ['class' => 'w-full text-base p-1', 'placeholder' => 'Ingrese el nombre']) !!}
            </div>

            <div class="from-group mt-2">
                {!! Form::label('slug', 'Slug:', ['class' => 'text-base font-bold']) !!}
                {!! Form::text('slug', null, ['class' => 'w-full text-base p-1 mt-2', 'readonly', 'placeholder' => 'Slug del post']) !!}
            </div>

            {!! Form::close() !!}
        </div>
        
</div>
