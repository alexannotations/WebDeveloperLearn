<?php
/** ejecutar composer dump para que se cree la carpeta vendor
 * 
 * 
 */
namespace Text; // de la configuracion de composer.json

// mismo estandar que java
class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }
}