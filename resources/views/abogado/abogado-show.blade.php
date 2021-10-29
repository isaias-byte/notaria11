<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $abogado->nombre }}</title>
</head>
<body>
    <h1>Información del abogado {{ $abogado->nombre }}</h1>
    <a href="{{ route('abogado.index') }}">Ver todos los registros</a>
    <ul>
        <li>Apellido Paterno: {{ $abogado->apellido_paterno }}</li>
        <li>Apellido Materno: {{ $abogado->apellido_materno }}</li>
        <li>Email: {{ $abogado->email }}</li>
        <li>Telefono Celular: {{ $abogado->telefono_celular }}</li>
        <li>Telefono Particular: {{ $abogado->telefono_particular }}</li>
        <li>Codigo: {{  $abogado->codigo  }}</li>
    </ul>
    
</body>
</html>