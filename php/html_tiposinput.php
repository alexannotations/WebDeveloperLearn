<?php

echo "<pre>";
    echo "<h2>Input simple</h2>";
    var_dump($_POST["nombre"]);
    echo "<h2>Arreglos</h2>";
    var_dump($_POST["personas"]);
    echo "<h2>Arreglos asociativos</h2>";
    print_r($_POST["persona"]);
    echo "<h2>Checkbox</h2>";
    var_dump($_POST["list1"]);
    var_dump($_POST["list2"]);
    var_dump($_POST["list3"]);
    echo "<h2>Radio button</h2>";
    var_dump($_POST["lista"]);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input</title>
</head>
<body>
    
    <form action="#" method="post" enctype="multipart/form-data">
        <!--  -->
        <h2>Input simple</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <!--  -->
        <h2>Arreglos</h2>
        <label>Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">

        <!--  -->
        <h2>Arreglos asociativos</h2>
        <label>Nombre de la persona:</label>
        <input type="text" name="persona[name]">
        <label>Correo de la persona:</label>
        <input type="email" name="persona[email]">
        <label>Edad de la persona:</label>
        <input type="number" name="persona[edad]">

        <!--  -->
        <h2>Checkbox</h2>
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Este valor fue clicado">
        <input type="checkbox" name="list3">

        <!--  -->
        <h2>Radio button</h2>
        <input type="radio" name="lista" value="one">
        <input type="radio" name="lista" value="two">
        <input type="radio" name="lista" value="three">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>