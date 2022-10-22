<?php


##############################################################
# comillas simples
$variable='año 2022';
echo 'un texto que
ocupa varias lineas
comilla simple\'
backslash \\ 
y mas texto $variable ';

echo "\nActualmente es el $variable \n";
echo 'Actualmente es el '.$variable ."\n";


##############################################################
# mostrar estructura compleja
$courses=[
    'backend'=>[
        'PHP',
        'Laravel'
    ]
];
# cuando una estructura es compleja es necesario utilizar las llaves
echo "{$courses['backend'][0]} \n";
# cuando una estructura de datos tiene mas de un nivel usamos las llaves para escapar


# mostrar un objeto
class User{
    public $userName='Ana';
}
$user=new User;  // se crea el objeto
echo "$user->userName quiere aprender\n";

$course1=['frontend'=>'HTML5'];
echo "{$user->userName} quiere aprender {$course1['frontend']} \n";


# estructura compleja con una funcion con variables variables
function getJob(){
    return 'developer';
}
$developer='Italivi';
//   "${'developer'} programa ...
echo "{${getJob()}} programa PHP\n";    // se agregan segundas llaves para mayor legibilidad


##############################################################
# Variables variables
$color='rojo';
$rojo='color para usar';
# accedo dinamicamente a la variable $rojo con ${$color}
# cambia ${$color} por ${'rojo'} quedando como $rojo
echo "$color es un ${$color}\n";

# podrías tener varias variables, y un array que contenga el nombre de esas variables. 
# crear un ciclo que recorra ese array, 
# y usando variables dinámicas imprimir el valor de dichas variables:
$nombre1 = "Susan";
$nombre2 = "Wendy";
$nombre3 = "Paty";
$nombre4 = "Renata";

$variables = ["nombre1", "nombre2", "nombre3", "nombre4"];

foreach($variables as $variable) {
	echo $$variable . "<br>";
}

?>
