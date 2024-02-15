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
            <a href="{{ route('comentario.index') }}">Comentarios</a>
        </div>
    </header>

    <section class="contact-form">
        <h2>Comentario</h2>
        <form method="POST" action="/comentario">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <div>{{ $message }}</div>
            @enderror

            <label for="mail">Correo</label>
            <input type="email" id="mail" name="correo" value="{{ old('correo') }}">
            @error('correo')
                <div>{{ $message }}</div>
            @enderror

            <label for="comment" class="comment-label">Comentario</label>
            <textarea id="comment" name="comentario">{{ old('comentario') }}</textarea>
            @error('comentario')
                <div>{{ $message }}</div>
            @enderror

            <label for="city" class="city-label">Ciudad</label>
            <select name="ciudad" id="city">
                <option value="guadalajara" @selected(old('guadalajara') == 'guadalajara')>Guadalajara</option>
                <option value="zapopan" @selected(old('zapopan') == 'zapopan')>Zapopan</option>
                <option value="tonala" @selected(old('tonala') == 'tonala')>Tonalá</option>
                <option value="otra" @selected(old('otra') == 'otra')>Otra</option>
            </select>
            @error('ciudad')
                <div>{{ $message }}</div>
            @enderror

            <button type="submit" class="submit-button">Enviar</button>

        </form>
    </section>
</body>
</html>