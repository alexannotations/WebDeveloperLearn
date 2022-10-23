<?php
//print_r($_REQUEST);
$words=array("Samantha","Sandra","Natalia","Veronica","Vannesa","Isabel");

foreach ($words as $key => $name) {
    if($_REQUEST['palabra'.$key]==$name){
        echo "
        La palabra ingresada es correcta"."<br>";
    }
    else{
        echo "
        La palabra ingresada es Incorrecta, la palabra correcta es: $name<br>";
    }
}


?>
