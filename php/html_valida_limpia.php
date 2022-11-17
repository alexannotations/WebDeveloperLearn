<?php

echo "- isset:".var_dump(isset($_POST["name_user"]))."<br>";
echo "- notempty:".var_dump(!empty($_POST["name_user"]))."<br>";

if ( isset($_POST["name_user"]) ) {
    echo "Toda la informacion del formulario fue mandada";
    echo "<pre>";
    echo var_dump($_POST["name_user"]);
    echo "</pre>";
}
else {
    echo "No se mando ninguna informacion en el formulario";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando el envío de un formulario</title>
</head>
<body>
    
<form action="#" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="name_user" id="nombre">

    <!-- envia el encabezado de form_name sin datos. name_user si contiene datos al enviar -->
    <button name="form_name" type="submit">Mandar formulario</button>
</form>
    
</body>
</html>