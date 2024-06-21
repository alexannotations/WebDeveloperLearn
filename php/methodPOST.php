<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>

<article>
    <p>Se ha integrado un elemento de formulario monovalor.</p>
<form METHOD="POST" ACTION="methodPOST.php">
Edad: <input TYPE="text" name="edad">
<input TYPE="submit" value="aceptar">
</form>

<?php
$edad= $_POST['edad']??null; 
print("La edad es : $edad");
?>
</article>


<form action="methodPOST.php" method="post">
        <input type="checkbox" name="extras[]" value="garaje" checked>Garaje
        <input type="checkbox" name="extras[]" value="piscina">Piscina
        <input type="checkbox" name="extras[]" value="jardin">Jardín
<input type="submit" value="aceptar">
</form>


<form action="methodPOST.php" method="post">
<SELECT MULTIPLE SIZE="3" name="idioma[]">
<optgroup>
<OPTION value="ingles" selected> Ingles
<OPTION value="frances" > Frances
<OPTION value="aleman" > Aleman
<OPTION value="holandes" > Holandes
</optgroup>
</SELECT>
<input TYPE="submit" value="aceptar">
</form>
<?php
$idiomas= $_REQUEST["idiomas"]??null;
if ($idiomas) {
    foreach($idiomas as $idioma)
        print("$idioma<br>\n");
}
?>

<article>
<p>La variables pasadas por POST son enviadas dentro de los encabezados HTTP.
<br>
</p>

<?php
echo "Variables pasadas mediante POST:<br><pre>";
// foreach ($_POST as $indice => $valor) {
//     echo "$indice : $valor<br>";
// }
var_dump($_POST);
echo "</pre>";
?>
</article>
    
</body>
</html>