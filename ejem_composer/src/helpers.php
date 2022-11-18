<?php
/** aqui se tiene la configuración
 *  para utilizar funciones repetitivas en vistas y controladores
 * 
 * helper.php hace uso de la clase Format, aunque el archivo helpers
 * no tiene referencia sobre su archivo hermano Format.php, 
 * con el namespace Text y la clase Format que se configuraron en el archivo
 * composer.json se hace referencia a la carpeta src donde estan los archivos que nos interesan
 * Observe el nombre que tienen las funciones en las clases y en helpers
 * 
 * Cuando se pegan funciones a este archivo utilizamos una condicional y
 * se mete a la funcion dentro de la condicional, para preguntar 
 * si esa funcion no existe dentro del sistema de carga y php la pueda llamar
 * 
 */
if (!function_exists('upper')) {
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}

if ('lower') {
    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
}
