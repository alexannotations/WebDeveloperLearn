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

/** Al no incluirse, la clase da error al no reconocer la clase
 * require referencia_a_la_misma_carpeta . 
 * Sistema de carga de clases instalado
 * 
 * helper permite crear funciones repetitivas
 * Realmente Composer si facilita (Y profesionaliza) 
 * mucho la carga de archivos en PHP, pero, cuand trabajas 
 * con muchas dependencias mediante Composer, es posible que 
 * existan 2 funciones iguales que lleven el mismo nombre, 
 * y eso puede causar un Fatal Error en PHP, es por eso que 
 * siempre se suele encerrar dentro de un if ( ! function_exists() ),
 * de esa forma no duplicamos las funciones y nos evitamos un error.
 */