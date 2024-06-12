<?php
#include("php_1.php");   // agrega otros archivos

# La palabra clave const se utiliza para crear constantes. 
# A diferencia de la función define(), las constantes creadas con la palabra clave const 
# deben declararse en el ámbito global. Realizar la declaracion en el nivel superior del
# entorno de la aplicacióon, porque se necesita definir en tiempo de ejecución.
const TEST = 'foobar';
var_dump(TEST);

# varible global
# se cambia a global el ambito con la palabra reservada global seguido de la variable
# la instruccion global debe estar dentro de la funcion para hacer global la variable fuera 
$nombre=" fuera ";
function showName(){
    global $nombre; // se refiere a la variable fuera
    $nombre=" dentro " . $nombre;
}
showName();
echo $nombre ."\n";


# variables estaticas
# static permite conservar el valor asignado a la variable
# pese a haber salido de su ambito
# Tambien puede crearse una varible global
function incrementaVarible(){
    static $contador=0;
    $contador++;
    echo $contador . "\n";
}
incrementaVarible();
for ($i=0; $i < 6; $i++) { 
    incrementaVarible();
}


# constantes
define("AUTOR", "Alex", true);  // el true permite ignorar case sensitive
echo "la linea de esta intruccion es: ". __LINE__ ."\n";
echo "Estamos trabajando con el archivo: " . __FILE__ ."\n";


?>
