<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la profesión']) !!}
    @error('name')
        <span class="text-danger text-sm">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder', 'readonly' => 'Slug de la profesión']) !!}
    @error('slug')
        <span class="text-danger text-sm">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="">{{ __('Color:')}}</label> --}}
    {{-- En el name pongo el nombre del campo donde se almacena la variable en la tabla de la migracion,
    en este caso quiero llenar el color así que lo nombro color como en la tabla y le doy la clase
    form-control que es la misma que la de los inputs de arriba --}}
    {{-- <select name="color" id="" class="form-control">
        <option value="red">Color rojo</option>
        <option value="green">Color verde</option>
        <option value="blue" selected>Color azul</option>
    </select> --}}
    {{-- El primer atributo es el campo a llenar, 
        el segundo es el nombre que muestra el select, --}}
    {!! Form::label('color', 'Color:') !!}
    {{-- Aquí pongo el form::select, primer valor es el name del select
    el segundo es un array que he creado en el método create y que
    lo recibo aqui como una variable $colors  --}}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    
    @error('color')
        <span class="text-danger text-sm">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extract') !!}
    {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto de la profesión']) !!}
    @error('slug')
        <span class="text-danger text-sm">{{$message}}</span>
    @enderror
</div>