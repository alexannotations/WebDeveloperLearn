<?php
# estructura de control foreach
# bucle
#
# https://www.php.net/manual/es/control-structures.foreach.php
# foreach funciona sólo sobre arrays y objetos
#
#        foreach (expresión_array as $valor)
#            sentencias
#        foreach (expresión_array as $clave => $valor)
#            sentencias

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

# recorre el arreglo sin indicar la dimension
# $cafe funciona como $clave o index, 
# puede asignarse cualquier nombre para hacerlo autoexplicativo
foreach ($tienda_de_cafes as $cafe => $price){
    echo "El café $cafe cuesta $$price USD \n";
}

echo "\n";

# tambien se pueden usar las palabras reservadas break y continue
?>
