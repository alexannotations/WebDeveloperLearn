<?php
/*

    Adición 	+
    Sustracción 	-
    Multiplicación 	*
    División 	/
    Módulo 	%
    Potenciación 	**
    Identidad 	Convierte un string a int o float, según sea el caso. 	+ 	+$a
    Negación 	Convierte un número a positivo o negativo. 	- 	-$a

    = 	Asignación
    += 	Incremento especifico
    ++ 	Incremento en uno
    -= 	Decremento especifico
    -- 	Decremento en uno
    *= 	Multiplicación
    /= 	División
    .= 	Concatenación

*/

echo (5*6) ." ". (80/4)."\n";

# Operador de asignacion, =
$year=18;

$contador=1;
$contador++;        // $contador+=1;    $contador=$contador+1;

$name="Usuario";
$name.= " "."lastName";      // $name=$name ." "."lastName";


# Precedencia y asociatividad
$contador=0;
echo $contador ."\n";
$resultado = $contador++;   // primero asigna, despues acumula
echo $resultado ."\n";
echo $contador ."\n";

echo "\nRepetimos\n";

$contador=0;
echo $contador ."\n";
$resultado = ++$contador;   // primero acumula, despues asigna
echo $resultado ."\n";
echo $contador ."\n";


echo "\n";
