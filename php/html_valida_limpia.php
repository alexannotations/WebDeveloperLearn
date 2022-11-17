<?php
// Determina si una variable está definida y no es null
echo "- isset name_user:".var_dump(isset($_POST["name_user"]))."<br>";
// Determina si una variable está vacía
echo "- notempty name_user:".var_dump(!empty($_POST["name_user"]))."<br>";

if ( isset($_POST["name_user"]) ) {
    echo "name_user fue enviado";
    echo "<pre>";
    echo var_dump($_POST["name_user"]);
    echo "</pre>";
}

echo "- isset form:".var_dump(isset($_POST["form"]))."<br>";
echo "- notempty form:".var_dump(!empty($_POST["form"]))."<br>";
if ( isset($_POST["form"]) ) {
    echo "Toda la informacion del formulario fue mandada";
    echo "<pre>";
    echo var_dump($_POST["form"]);
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

    <!-- envia el encabezado de form sin datos. name_user si contiene datos al enviar 
        Se puede usar form para validar si todo el formulario se envio -->
    <button name="form" type="submit">Mandar formulario</button>
</form>
    
</body>
</html>