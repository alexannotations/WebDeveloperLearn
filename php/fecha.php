<?php
# https://www.php.net/manual/es/function.date.php
# https://www.php.net/manual/en/datetime.format.php

//header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Mexico_City');
echo date_default_timezone_get();


function obtener_hora() {
    return date("H:i", time());
}

echo "\nLa hora es " . obtener_hora();
echo "\n";

?>
