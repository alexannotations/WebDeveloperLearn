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


# Para recorrer el mismo array asociativo usando un ciclo FOR normal
// Obtenemos las claves del array asociativo
$keys = array_keys($tienda_de_cafes);

// Recorremos el array asociativo usando un bucle for
for ($i = 0; $i < count($keys); $i++) {
    $cafe = $keys[$i];        // clave
    $price = $tienda_de_cafes[$cafe];    // valor
    echo "El café $cafe cuesta $$price USD \n";
}
?>