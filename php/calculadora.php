<?php
//var_dump($_POST);
print_r($_POST);
    if(isset($_POST["button"])){
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        if (!strcmp("Suma",$operacion)) {
            echo "El resultado es: " .($numero1+$numero2);
        }
        if (!strcmp("Resta",$operacion)) {
            echo "El resultado es: " .($numero1-$numero2);
        }
        if (!strcmp("Multiplicacion",$operacion)) {
            echo "El resultado es: " .($numero1*$numero2);
        }
        if (!strcmp("Division",$operacion)) {
            echo "El resultado es: " .($numero1/$numero2);
        }
        if (!strcmp("Modulo",$operacion)) {
            echo "El resultado es: " .($numero1%$numero2);
        }
    }
?>