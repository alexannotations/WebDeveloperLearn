<?php
/** Reto de variables variables
 * leer el codigo y vecir que resultado va al final
 * Observe el scope de $var
 */
$dog="wof";
$cat="meow";
$horse="ijiji";

$option=2;

switch ($option) {
    case 1:
        $var="dog";
        break;
    
    case 2:
        $var="horse";
        break;
}

echo $$var;


# ----------------------------------------------------------------------
# Variables globales
$outside_variable="Esto es una variable global";

function myFunction(){
    global $outside_variable;
    echo $outside_variable;   
}
myFunction();

function my_function(){
    echo $GLOBALS["outside_variable"];
}
my_function();


# ----------------------------------------------------------------------
# Ejemplo #6 Variables estáticas con funciones recursivas
function test()
{
    static $count=0; // se inicializa únicamente en la primera llamada a la función
    // si se omitiera static la variable $count siempre seria cero cada vez que se llame a la funcion

    $count++;
    echo $count; // conservara su ultimo valor 
    if($count<10){
        test(); // la funcion se llama a si misma (recursiva)
    }
    $count--;
}

test();

