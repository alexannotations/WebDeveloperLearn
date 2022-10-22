<?php
# funciones
# https://www.php.net/manual/es/functions.user-defined.php
# https://www.php.net/manual/es/functions.arguments.php
# https://gist.github.com/ryansechrest/8138375#9-functions
#
# https://wiki.php.net/rfc/spread_operator_for_array#advantages_over_array_merge
# https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list
# https://www.php.net/manual/es/function.usort.php
# https://www.php.net/manual/es/migration70.new-features.php
# https://www.php.net/manual/es/array.sorting.php
#
# https://www.php.net/manual/es/ref.strings.php
# https://www.php.net/manual/es/ref.math.php
# https://www.php.net/manual/es/ref.array.php
# https://www.php.net/manual/es/ref.datetime.php
# 
# https://www.php.net/manual/es/reserved.variables.globals.php
# https://www.php.net/manual/es/language.variables.scope.php

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

// uso de funcion anonima para indicar como ordenar el arreglo
// modifica el arreglo original
usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;   // operador nave espacial (<=mayorQue)
});

print_r( $precios_de_cafes );


$palabras = ["Hola", "Abecedario", "Zapato", "Gato","ABC"];
usort($palabras, function($a, $b){
    return $a <=> $b;
});
foreach ($palabras as $i => $palabra) {
    echo "[" . $i . "] = " . $palabra . "\n";
}

?>
