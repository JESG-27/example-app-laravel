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
        <form method="POST" action="/comentario">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="nombre">

            <label for="mail">Correo</label>
            <input type="email" id="mail" name="correo">
            
            <label class="gender-label">Género</label>
            <label for="gender">Hombre</label>
            <input type="radio" id="male" value="H" name="gender" name="genero">
            <label for="gender">Mujer</label>
            <input type="radio" id="female" value="M" name="gender" name="genero">

            <label for="password" class="password-label">Contraseña</label>
            <input type="password" id="password" name="contrasenia">

            <label for="comment" class="comment-label">Comentario</label>
            <textarea id="comment" name="comentario"></textarea>

            <label for="city" class="city-label">Ciudad</label>
            <select name="ciudad" id="city">
                <option value="guadalajara">Guadalajara</option>
                <option value="zapopan">Zapopan</option>
                <option value="tonala">Tonalá</option>
                <option value="otra">Otra</option>
            </select>

            <label for="contract" class="contract-label">Me interesa contratarte</label>
            <input type="checkbox" id="contract" name="contratar">

            <button type="submit" class="submit-button">Enviar</button>

        </form>
    </section>
</body>
</html>