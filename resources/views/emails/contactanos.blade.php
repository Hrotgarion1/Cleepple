<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
<style>
h1{
    color:black;
}
p{
    color: gray;
}

    
</style>
    </head>
<body>
    <h1></i>Correo urgente!</h1>

    <p> <strong>Nombre:</strong> {{$contacto['name']}}</p>
    <p> <strong>Correo:</strong> {{$contacto['email']}}</p>
    <p> <strong>Teléfono:</strong> {{$contacto['tel']}}</p>
    <p> <strong>Descripción:</strong> {{$contacto['mensaje']}}</p>
</body>
</html>