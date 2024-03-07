<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
</head>
<body>
    <h1>Listado Comentarios</h1>
    <form action="{{ route('logout') }}" method="POST" x-data>
        @csrf
        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">Cerrar Sesión</a>
    </form>
    {{-- <a href="/logout" target="_blank" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a> --}}
    <a href="{{ route('comentario.create') }}">Agregar</a>
    <table border="1">
        <th>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
        </th>
        <tbody>
            @foreach ($comentarios as $comentario)
            <tr>
                <td>{{$comentario->nombre}}</td>
                <td>{{$comentario->correo}}</td>
                <td>{{$comentario->comentario}}</td>
                <td>
                    <a href="{{ route('comentario.show', $comentario) }}">Ver</a>
                    <a href="{{ route('comentario.edit', $comentario) }}">Editar</a>
                    <form action="{{ route('comentario.destroy', $comentario) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @livewireScripts
</body>
</html>