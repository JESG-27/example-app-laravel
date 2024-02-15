<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Comentario</title>
</head>
<body>
    <h1>Comentario ID: {{ $comentario->id }}</h1>
    <ul>
        <li>Nombre: {{ $comentario->nombre }}</li>
        <li>Nombre: {{ $comentario->correo }}</li>
        <li>Comentario: {{ $comentario->comentario }}</li>
    </ul>
</body>
</html>