<?php

namespace Text; // de la configuracion de composer.json

// mismo estandar que java
class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }
}