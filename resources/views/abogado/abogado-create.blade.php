<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @if (isset($abogado))
        <h1>Editar abogado</h1>
        <form action="{{ route('abogado.update', $abogado) }}" method="POST">
            @method('PATCH')
    @else
        <h1>Registro de abogado</h1>
        <form action="{{ route('abogado.store') }}" method="POST">
    @endif
    
        @csrf
        <label for="nombre">Nombre(s)</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') ?? $abogado->nombre ?? '' }}">
        <br>
        <label for="apellido_paterno">Apellido Paterno: </label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno') ?? $abogado->apellido_paterno ?? '' }}">
        <br>
        <label for="apellido_materno">Apellido Materno: </label>
        <input type="text" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno') ?? $abogado->apellido_materno ?? '' }}">
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{ old('email') ?? $abogado->email ?? '' }}">
        <br>
        <label for="telefono_celular">Telefono celular: </label>        
        <input type="text" name="telefono_celular" id="telefono_celular" value="{{ old('telefono_celular') ?? $abogado->telefono_celular ?? '' }}">
        <br>
        <label for="telefono_particular">Telefono particular: </label>  
        <input type="text" id="telefono_particular" name="telefono_particular" value="{{ old('telefono_particular') ?? $abogado->telefono_particular ?? '' }}">
        <br>
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" value="{{ old('codigo') ?? $abogado->codigo ?? '' }}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>