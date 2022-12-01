<?php
# estructura de control switch
# condicional
#
# https://www.php.net/manual/es/control-structures.switch.php

$opcion = 1;

switch( $opcion ){

    case 1:
        //break;  // al no existir break continua
    case 4:
        echo "Opcion 4";
        break;

    case 2:
        echo "Opcion 2";
        break;

    case 3:
        echo "Opcion 3";
        break;

    case 5:
        echo "Opcion 5";
        break;

    default:
        echo "No existe :c";

}

echo "\n";

# match
# https://www.php.net/manual/es/control-structures.match.php

function get_country_name_switch($country) {

    $name = "";

    switch ($country) {
        case 'MX':
            $name = "México";
            break;

        case 'COL':
            $name = "Colombia";
            break;

        case 'EUA':
            $name = "Estados Unidos Americanos";
            break;
        
        default:
            $name = "Lo siento, no conozco ese país";
            break;
    }

    return $name;
    
}

function get_country_name_match($country) {

    return match($country) {
        "MX" => "México",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };

}

echo get_country_name_match("LKASJDKLASDNLAS");

echo "\n";

?>
