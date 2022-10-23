<?php
print_r($_REQUEST);
$words=array("Samantha","Sandra","Natalia","Veronica");

if($_REQUEST["palabra0"]==$words[0]){
    echo "La palabra ingresada es correcta";
}
else{
    echo "La palabra ingresada es incorrecta, la palabra correcta es: $words[0]";
}

if($_REQUEST["palabra1"]==$words[1]){
    echo "La palabra ingresada es correcta";
}
else{
    echo "La palabra ingresada es incorrecta, la palabra correcta es: $words[1]";
}

if($_REQUEST["palabra2"]==$words[2]){
    echo "La palabra ingresada es correcta";
}
else{
    echo "La palabra ingresada es incorrecta, la palabra correcta es: $words[2]";
}

?>
