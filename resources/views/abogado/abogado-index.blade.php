<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Registro de abogado</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>email</th>
                <th>Teléfono celular</th>
                <th>Teléfono particular</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abogados as $abogado)
                <tr>
                    <td>
                        <a href="{{ route('abogado.show', $abogado->id) }}">
                            {{ $abogado->nombre }}
                        </a>                    
                    </td>
                    <td>{{ $abogado->apellido_paterno }}</td>
                    <td>{{ $abogado->apellido_materno }}</td>
                    <td>{{ $abogado->email }}</td>
                    <td>{{ $abogado->telefono_celular }}</td>
                    <td>{{ $abogado->telefono_particular }}</td>
                    <td>{{ $abogado->codigo }}</td>
                    <td>
                        <a href="{{ route('abogado.edit', $abogado) }}">Editar</a>
                        <form action="{{ route('abogado.destroy', $abogado) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                            </input>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('abogado.create') }}">Crear Registro</a>
</body>
</html>