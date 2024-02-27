<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ __('estudios.title-verificar-estudios')}}</title>

    <style>
        h1{
         color: rgb(102, 102, 109);
        }
        .p{
            color: rgb(153, 151, 151);
        }
    </style>

</head>
<body>

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mb-8">
        <img src="{{ asset('storage/img/nombreSinFondo1.png') }}" style="width: 20rem">
    </div>
   
    <h1>{{ __('estudios.h1-verificar-estudios')}}</h1>
    <p>{{ __('estudios.p-verificar-estudios')}}<span class="font-bold">{{ Auth::user()->name }}</span> {{ __('estudios.p-1-verificar-estudios')}} {{$item['curso']}}  {{ __('estudios.p-3-verificar-estudios')}} {{$item['organization']}}  {{ __('estudios.p-4-verificar-estudios')}} {{$item['fechaIni']}}  {{ __('estudios.p-5-verificar-estudios')}} {{$item['fechaFin']}} .</p>
    <p>{{ __('estudios.p-6-verificar-estudios')}} <a href="http://www.cleepple.com">
        Cleepple.com
    </a> </p>
   

    <p>{{ __('estudios.p-7-verificar-estudios')}}</p>

    <P>Cleepple.com</P>

</body>
</html>