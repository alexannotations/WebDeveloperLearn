<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>
<body>
    <form action="htmlserverget-post.php" method="get">
        <!-- el atributo name al definirlo permite mandar los datos por el metodo GET -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="name_user" id="nombre">

        <label for="edadid">Edad:</label>
        <input type="text" name="age_user" id="edadid">

        <button type="submit">Mandar formulario</button>
    </form>
    
</body>
</html>