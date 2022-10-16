<?php

/*
https://www.php.net/manual/es/language.operators.logical.php
https://www.php.net/manual/es/language.operators.precedence.php
 AND        and o &&
 OR          or o ||
 NOT        !
*/

$verdadero=true;
$afirmativo=true;
$mentira=false;
$negativo=false;

var_dump($verdadero&&$mentira); // false
var_dump($verdadero&&$afirmativo);  // true
var_dump($verdadero||$negativo); // true
var_dump($mentira||$negativo);  // false
var_dump($verdadero||$afirmativo); // true
var_dump(!$verdadero); // falso


# Un error muy comun, que resulta confuso.
# observe la diferencia entre escribir and o &&
# su diferencia es la precedencia, pero ambos realizan la misma operación.
$resultado = $verdadero and $mentira;   // false
var_dump($resultado); // true
$resultado2 = $verdadero && $mentira;   // false
var_dump($resultado2); // false

# Explicación de la precedencia
# =     tiene asociatividad derecha y mayor precedencia (asignacion)
# and   tiene asociatividad izquierda y menor precedencia (lógico)
#       ($resultado = $verdadero)      1o asigna true a resultado
# por lo anterior var_dump muestra true
#       ($verdadero and $mentira)      2o evalua, pero no asigno
# para forzar el resultado, usar parentesis
$resultado = ($verdadero and $mentira);
var_dump($resultado);
