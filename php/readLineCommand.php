<?php
/*
La función readline() no funciona en el navegador, porque lee texto desde la terminal.
Para leer datos desde el navegador necesitamos usar un input de HTML💚
Los parentesis forzan la precedencia, y tambien se forza el casting.
*/

$segundos = readline("Ingresa un tiempo en segundos: "); 
echo "$segundos segundos son "; 
$dias = (int)($segundos / 86400);
$segundos = (int)($segundos % 86400);
$horas = (int) ($segundos / 3600); 
$segundos = (int) ($segundos % 3600); 
$minutos = (int) ($segundos / 60); 
$segundos = (int) ($segundos % 60); 

echo "$dias días, $horas horas, $minutos minutos y $segundos segundos.\n"; 
