<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ __('Verificación de cursos')}}</title>

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
   
    <h1>{{ __('Verificación de curso aprovada')}}</h1>
    <p class="text-gray-600 font-bold text-base">{{ __('Nombre del curso:')}}</p><strong class="text-gray-500 text-base">{{$course->title}}</strong>
    <p>{{ __('El curso a sido aprovado correctamente, estamos muy contentos con su trabajo y esperamos que siga manteniendo el máximo esfuerzo.')}}</p>
    
   

    <p>{{ __('Reciba un cordial saludo.')}}</p>

    <P>{{$course->teacher->name}}</P>

</body>
</html>