<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
</head>
<body>
    <header>
        <div class="nav">
            <a href="/informacion">Información</a>
            <a href="/contacto">Contacto</a>
        </div>
    </header>
    
    <hr>
    {{ $tipo }}
    <hr>

    <h1>Información</h2>
    @if ($tipo == 'alumnos')
        <h2>Alumnos</h2>
        <p>Información para alumnos</p>
    @elseif ($tipo == 'academicos')
        <h2>Academicos</h2>
        <p>Información para académicos</p>
    @else
        <h2>Invitados</h2>
        <p>Eres invitado</p>
    @endif

</body>
</html>