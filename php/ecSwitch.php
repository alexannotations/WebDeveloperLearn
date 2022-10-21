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

?>
