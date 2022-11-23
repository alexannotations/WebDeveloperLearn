<?php
/**
 * Es un header de un sitio web
 * por medio de la cookie definimos un color personalizado 
 * para el usuario
 */

setcookie(
    name: "header_color",
    value: "blue"    // si esta definida se usa este color
);

/* indica si ya esta definida la cookie header_color
si es asi asigna el value a $color blue
no esta definida asigna el color red
*/
$color = $_COOKIE["header_color"] ?? "red";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        display: flex;
        padding: 10px;
    }

    header img {
        width: 100px;
    }
    </style>
</head>
<body>

    <header style="background: <?= $color ?>">
        <img src="logo.webp" alt="Logo_empresa">
    </header>

</body>
</html>