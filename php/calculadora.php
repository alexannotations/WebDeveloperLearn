<style>
    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>
<?php
//var_dump($_POST);
print_r($_POST);

    // paso de parametros
    function calcular($calculo){

        global $numero1;
        global $numero2;

        if (!strcmp("Suma",$calculo)) {
            echo "<p class='resultado'>El resultado es (+): " .($numero1+$numero2) ."</p>";
        }
        if (!strcmp("Resta",$calculo)) {
            $resultado=$numero1-$numero2;
            echo "<p class='resultado'>El resultado es (-):  $resultado</p>";
        }
        if (!strcmp("Multiplicacion",$calculo)) {
            $resultado=$numero1*$numero2;
            echo "<p class='resultado'>El resultado es (*):  $resultado</p>";
        }
        if (!strcmp("Division",$calculo)) {
            $resultado=$numero1/$numero2;
            echo "<p class='resultado'>El resultado es (/):  $resultado</p>";
        }
        if (!strcmp("Modulo",$calculo)) {
            $resultado=$numero1%$numero2;
            echo "<p class='resultado'>El resultado es (%):  $resultado</p>";
        }
        if (!strcmp("Increment",$calculo)) {
            $numero1++;
            $resultado=$numero1;
            echo "<p class='resultado'>El resultado (++):  $resultado</p>";
        }
        if (!strcmp("Decrement",$calculo)) {
            $numero1--;
            $resultado=$numero1;
            echo "<p class='resultado'>El resultado (--):  $resultado</p>";
        }

    }
?>