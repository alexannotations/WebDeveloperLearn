<?php
/**
 * toma una marca de tiempo, el id del usuario que quiere autenticarse y la clave secreta
 * para generar el hash que se enviará en la petición
 * 
 * Para utilizarlo se l;lama al script con el id del usuario como argumento
 * ``` php generate_hash.php 1 ```
 * 
 * 
 */

$time = time();
echo "Time: $time".PHP_EOL."Hash: ".sha1($argv[1].$time.'No se lo cuentes a nadie!').PHP_EOL;