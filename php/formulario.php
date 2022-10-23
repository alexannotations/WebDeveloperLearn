<?php
# https://www.php.net/manual/es/reserved.variables.request.php

# ayuda a recibir los datos que envia el formulario en forma de un array
//print_r($_REQUEST);


$words=array("Samantha","Sandra","Natalia","Veronica");
# https://www.php.net/manual/es/function.str-shuffle.php


$form="<form action='formulario_analisis.php'>";

foreach ($words as $key => $name) {
    $form.="
    La palabra: " .str_shuffle($name) ." "."<input type='text' name='palabra".$key."'><br>";
}

$button="\n\t<button type='submit'>Enviar</button>\n";
$formclose="</form>";

echo $form.$button.$formclose;

?>
