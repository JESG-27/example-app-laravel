<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>
<body>
    <header>
        <div class="nav">
            <a href="/informacion">Información</a>
            <a href="/comentario/create">Contacto</a>
        </div>
    </header>

    <section class="contact-form">
        <h2>Contacto</h2>
        <form method="POST" action="{{ route('comentario.update', $comentario) }}">
            @csrf
            @method('PATCH')
            <label for="name">Nombre</label>
            <input type="text" id="name" name="nombre" value="{{ $comentario->nombre }}">

            <label for="mail">Correo</label>
            <input type="email" id="mail" name="correo" value="{{ $comentario->correo }}">

            <label for="comment" class="comment-label">Comentario</label>
            <textarea id="comment" name="comentario">{{ $comentario->comentario }}</textarea>

            <label for="city" class="city-label">Ciudad</label>
            <select name="ciudad" id="city">
                <option value="guadalajara" @selected($comentario->ciudad == 'guadalajara')>Guadalajara</option>
                <option value="zapopan" @selected($comentario->ciudad == 'zapopan')>Zapopan</option>
                <option value="tonala" @selected($comentario->ciudad == 'tonala')>Tonalá</option>
                <option value="otra" @selected($comentario->ciudad == 'otra')>Otra</option>
            </select>

            <button type="submit" class="submit-button">Enviar</button>

        </form>
    </section>
</body>
</html>