<?php
/**
 * Es un header de un sitio web
 * por medio de la cookie definimos un color personalizado 
 * para el usuario
 */

setcookie(
    name: "header_color",
    value: "#12373d"    // si esta definida se usa este color
);

/* indica si ya esta definida la cookie header_color
si es asi asigna el value a $color #12373d
no esta definida asigna el color #121f3d
*/
$color = $_COOKIE["header_color"] ?? "#121f3d";

?>
<!DOCTYPE html>
<html lang="en">
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