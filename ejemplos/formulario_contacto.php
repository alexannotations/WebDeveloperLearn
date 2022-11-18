<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario_contacto.css">
    <title>Formulario de contacto</title>
</head>
<body>

    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>

    <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
    </div>

    <form action="#">

        <h1>¡Contáctanos!</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button type="submit">Enviar</button>
        </div>

        <div class="contact-info">
            
            <div class="info">
                <!-- el tag i funciona para agregar los iconos -->
                <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +1 123 456 7890</span>
            </div>

        </div>

    </form>

    <!-- 
        https://fontawesome.com/ 
        https://tailwindcss.com/
        https://icons8.com/line-awesome
        -->
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    
</body>
</html>