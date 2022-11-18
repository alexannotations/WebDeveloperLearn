<?php
$username=null;
$useremail=null;
$userage=null;
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
    echo var_dump($_POST);
    echo "</pre>";
    $username=$_POST["name_user"];
    $useremail=$_POST["email_user"];
    $userage=$_POST["age_user"];

    // Sanitizacion de variables, debe realizarse con todas las variables
    // Convierte todos los caracteres aplicables a entidades HTML
    $htmlusername=htmlentities($username);
    // escapar caracteres
    // Escapa un string con barras invertidas '
    $slashusername=addslashes($username);
    // expresiones regulares: unicamente las letras "/\d/" numeros "/\D/"
    $onlywords=preg_replace("/\d/","",$username);
    // Filtra una variable con el filtro que se indique
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
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
    <title>Validando el envío de un formulario y Sanitizacion</title>
</head>
<body>
    
<form action="#" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="name_user" id="nombre">

    <label for="emai">email</label>
    <input type="email" name="email_user" id="email">

    <label for="age">Nombre</label>
    <input type="number" name="age_user" id="age">

    <!-- envia el encabezado de form sin datos. name_user si contiene datos al enviar 
        Se puede usar form para validar si todo el formulario se envio -->
    <button name="form" type="submit">Mandar formulario</button>
</form>

<p>
Se podria hackear el formulario si no se sanitiza lo introducido
<b>&lt;div style="background-color: red;"&gt;hola te hakie&lt;/div&gt;</b>
EL archivo permite inyectar codigo html, y se muestra como se limpia
</p>

<p>
    User name: <?=$username?><br>
    htmlentities(username): <?=$htmlusername?><br>
    addslashes(username): <?=$slashusername?><br>
    regex(username): <?=$onlywords?><br>
    User email: <?=$useremail?><br>
    User age: <?=$userage?><br>
</p>
</body>
</html>