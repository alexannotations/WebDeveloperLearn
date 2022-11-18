<?php
/** se requiere el sistema de autocarga de clases de composer
* porque toda la configuracion esta ahi
*
* Todo componente tiene este ciclo de vida, el proyecto vive dentro de la carpeta src
* y esta carpeta vive y se carga a lo largo del sistema por la configuracion de composer.json
* La carga puede hacerse de manera manual, pero se aprovecha esta tecnología del sistema de autocarga
*/ 
require __DIR__ . '/vendor/autoload.php';

echo upper('hola');

/** para no usar a la clase directamente, 
 * usamos la funcion de helpers.php
 * Es decir, desde index se llama al archivo helpers.php donde
 * se indican las funciones, y estas buscan a la clase
 * 
 */ 
echo lower('HI');