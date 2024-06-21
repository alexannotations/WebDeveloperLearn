<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>

<article>
<form METHOD="GET" ACTION="methodGET.php">
Edad: <input TYPE="text" NAME="edad">
<INPUT TYPE="submit" VALUE="aceptar">
</form>

<?php
$edad= $_GET['edad']??null; 
print("La edad es : $edad");
?>

</article>


<article>
<p>Se puede hacer uso del siguietne codigo para leer todas las variables y sus contenidos pasados por GET.
<br><pre>script.php?variable1=contenido1&variable2= contenido2</pre>
</p>

<?php
echo "Variables pasadas mediante GET:<br><pre>";
foreach ($_GET as $indice => $valor) {

    echo "$indice : $valor<br>";
}
echo "</pre>";
?>
</article>


    
</body>
</html>