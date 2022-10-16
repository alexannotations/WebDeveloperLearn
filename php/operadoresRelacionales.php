<?php
# Operadores Relacionales
$a=2;
$a2="2";
$b=1;

# Igual, ==
# Compara los valores, pese a que son de tipos diferentes
var_dump($a == $a2);

# Idéntico, ===
# Compara tipos y valores, pese a ser el mismo valor, son diferentes tipos
var_dump($a === $a2);

# Diferentes
# != , compara el valor sin importar el tipo
var_dump($a != $a2);
# !==, compara el tipo y valor
var_dump($a !== $a2);

# Menor que
var_dump($a < $b);
# Mayor que
var_dump($a > $b);

# Mayor o Igual que
var_dump($a >= $b);
# Menor o Igual que
var_dump($a <= $b);


# Operador de Nave Espacial, <=> (<=mayorQue)
# Devuelve -1 si el numero izq. es menor que el der.
# Devuelve 1 si el numero izq. es mayor que el der.
# Devuelve 0 si son iguales
echo 4 <=> 3; // 1
echo 1 <=> 1; // 0
echo -50 <=> 1; //-1

    
# Fusión de Null, ??
# dice cual es la primer variable que esta definida
# se puede ir concatenando con más variables
$edad_pepito = 23;
echo $edad_juanito ?? $edad_pepito;
// Si la edad de Juanito no esta definida, 
// usa la edad de pepito

