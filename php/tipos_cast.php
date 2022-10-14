<?php
/*  PHP tiene un tipado debil
    Numéricos
        Integer
        Float
        Double

    Cadenas de caracteres
        Char
        String

    Boolean
        true or false

    Sin valor
        No tiene valor (Null)
        No esta definido (Undefined)
*/    
    $numero = 0;
    var_dump($numero);

    // Conversión de tipos automática
    $numero2="23";
    var_dump($numero2);
    $numero2 = $numero2 + 2 ; // Sumamos al String un número
    var_dump($numero2); // 

       # MALAS practicas, observe al final que si realizo la suma 16
       # solo funciona si esta al principio de la cadena (con warning)
    $papas = "11 papas en el costal";
    $cuantas_papas_hay = $papas + 5;
    echo $cuantas_papas_hay."\n";

