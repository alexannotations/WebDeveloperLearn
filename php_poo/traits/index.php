<?php
# sistema de autocarga de composer
require("vendor/autoload.php");

# importamos las clases
use App\Classes\Perritu;
use App\Classes\Michi;



$firulais = new Perritu();
$mrmichi = new Michi();

echo $firulais->bark() . "\n";
# el metodo del trait se invoca igual que los metodos propios
echo $firulais->play() . "\n";

echo $mrmichi->sayMeow() . "\n";
echo $mrmichi->sleep() . "\n";