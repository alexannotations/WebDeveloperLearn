<?php
/*
https://www.php.net/manual/es/language.types.array.php

El operador => indica la relación asociativa entre una clave y un valor.
La clave nos permite acceder a los valores almacenados en el arreglo.
*/

# declaracion de arrays
$arreglo=[20,18,40];
$arreglof=array(20,15,18,22);

# mostrando sus valores
echo "numero en arreglo: ".$arreglo[1] ."\n";
echo "numero en arreglof: ".$arreglof[1] ."\n";

# los arreglos asociativos son parecidos a las listas
$edades=array(
    "Brenda"=> 18,
    "Magda"=> 22,
    "Yeri"=> 33,
);
echo "La edad de Magda es " .$edades["Magda"] ."\n";

$cafes=[
    "capuccino"=> 50,
    "latte"=>62,
    "expresso"=>45,
];
echo "El precio del cafe latte es {$cafes['latte']}\n";

# dentro de un arreglo se puede definir otro arreglo
$personas=array(
    "Ana"=>array(
        "edad"=>23,
        "beca"=>"basica",
    ),
    "Mary"=>array(
        "edad"=>28,
        "beca"=>"exelencia",
    ),    
);
echo "La beca de Ana es: " .$personas["Ana"]["beca"]. 
        ". Su edad es: ".$personas["Ana"]["edad"]."\n";

?>
