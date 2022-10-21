<?php
# estructura de control Do ... While
# bucle
#
# https://www.php.net/manual/es/control-structures.do.while.php

$usernames = ["Pepito123", "Mr.Michi", "Retax"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
    echo "\n";

# si el nombre existe $usernames, se vuelve a ejecutar
# para lo contrario negar la funcion con !
} while( in_array($username, $usernames) );

echo "\n";

?>
