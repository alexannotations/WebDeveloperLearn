<?php
# estructura de control if else elseif
# condicionales
#
# else if o elseif funcionan igual en caso de llaves, 
# pero considere el caso de uso de dos puntos
# https://www.php.net/manual/es/control-structures.elseif.php
echo password_verify($_POST['upassword'], $passwordSavedHashed) ? 'password correct' : 'passwword incorrect';

$asientos_disponibles = 0;
$tiene_boletos = false;
$puede_comprar = true;

if ($asientos_disponibles > 0)
    echo "Puedes ver la pelicula";
else if ($tiene_boletos)
    echo "No te creo, pero puedes ver la pelicula";
else if ($puede_comprar)
    echo "Bueno, adelante";
else
    echo "Lo sentimos no hay asientos";
//endif;    # En algunos codigos lo incluye, pero aqui genera error

echo "\n";

?>
