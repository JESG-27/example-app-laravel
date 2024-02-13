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
    <table>
        <th>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Comentario</th>
            </tr>
        </th>
        <tbody>
            @foreach ($comentarios as $comentario)
            <tr>
                <td>{{$comentario->nombre}}</td>
                <td>{{$comentario->correo}}</td>
                <td>{{$comentario->comentario}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>