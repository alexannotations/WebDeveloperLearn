<?php
# funciones
# https://www.php.net/manual/es/functions.user-defined.php
# https://www.php.net/manual/es/functions.arguments.php
# https://gist.github.com/ryansechrest/8138375#9-functions

# recibe parametro $rank
function es_estudiante_legend($rank) {
    
    if ($rank >= 20000) {
        echo "¡Eres un estudiante Legend!\n";
    }
    else {
        echo "Lo sentimos, aun no alcanzas el nivel legend\n";
    }
}

# podemos crear una función que reciba una lista de números
function sum(...$args)
{
    return array_sum($args); // funcion predefinida
}
echo sum(1,2,3,4); // 10
echo "\n";



    $rank_user = (int) readline("Por favor, dinos cual es tu Rank: ");
    es_estudiante_legend($rank_user);


echo "\n";
?>
