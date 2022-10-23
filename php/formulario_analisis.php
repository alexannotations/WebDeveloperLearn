<?php
//print_r($_REQUEST);
$words=array("Samantha","Sandra","Natalia","Veronica","Vannesa","Isabel");

foreach ($words as $key => $name) {
    if($_REQUEST['palabra'.$key]==$name){
        echo "
        <p>La palabra ingresada es correcta</p>";
    }
    else{
        echo "
        <p>La palabra ingresada es Incorrecta, la palabra correcta es: $name</p>";
    }
}


?>
