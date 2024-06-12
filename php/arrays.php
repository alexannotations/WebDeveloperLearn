<?php
/*
https://www.php.net/manual/es/language.types.array.php
https://www.php.net/manual/es/ref.array.php

En el array indexado a cada elemento le corresponde un número.
En un array asociativo cada elemento se compone de un valor y una clave.

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
# Es el equivalente a los objetos JSON de JavaScript, 
# sobre todo porque podemos verlos como una lista, 
# y los subíndices son palabras.
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

# Manipulación de arreglos
echo count($edades) ."\n";  // cuenta cuantos valores tiene el array
array_push($arreglo,44);    // agregamos un valor al array
var_dump($arreglo); // observamos los valores del array

$NotArray=0;
var_dump(is_array($NotArray));  // checamos si es un array

# convertir un string en un array, hay que indicar el separador y el string
$listaFrutas="Sandia,Piña,Platano,Mango";
$frutasArray=explode(",",$listaFrutas); // funcion explode()
var_dump($listaFrutas);
var_dump($frutasArray);
$frutasString=implode(",",$frutasArray); // convierte a string un array
var_dump($frutasString);
?>
