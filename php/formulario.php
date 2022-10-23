<?php
# https://www.php.net/manual/es/reserved.variables.request.php

# ayuda a recibir los datos que envia el formulario en forma de un array
print_r($_REQUEST);


$words=array("Samantha","Sandra","Natalia","Veronica");
# https://www.php.net/manual/es/function.str-shuffle.php
$shuffle_words=array();

foreach ($words as $key => $name) {
    $shuffle_words[$key]=str_shuffle($name);
    echo $shuffle_words[$key].",";
}

echo "
    <form action='formulario_analisis.php'>
        <input type='text' name='palabra0'>
        <input type='text' name='palabra1'>
        <input type='text' name='palabra2'>
        <button type='submit'>Enviar</button>
    </form>
";

?>
