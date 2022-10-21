<?php
# funciones
# https://www.php.net/manual/es/functions.user-defined.php
# https://gist.github.com/ryansechrest/8138375#9-functions

function get_pokemon() {

    # https://www.php.net/manual/es/function.rand.php
    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo $numero_aleatorio." Pikachu\n";
            break;
        
        case 2:
            echo $numero_aleatorio." Charmander\n";
            break;

        case 3:
            echo $numero_aleatorio." Mewtwo\n";
            break;
        
        default:
            echo $numero_aleatorio." Lo siento, no hay pokémon para ti :c\n";
    }

}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}

echo "\n";

?>
