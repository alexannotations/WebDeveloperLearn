<?php

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Murcielago",
                    "Baldosa", "Terremoto", "Asteroide", "Gallo", "Escuela"];

define("MAX_ATTEMPS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

// Inicializamos el juego
$choosen_word = $possible_words[ rand(0, count($possible_words)-1 ) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_"); // (string a rellenar, tamaño del string, valor con el cual rellenar)
$attempts = 0;

// Info al usuario
echo "Palabra de $word_length letras \n\n";
echo $discovered_letters . "\n\n";

// Pedimos datos al usuario
$player_letter = readline("Escribe una letra: ");
$player_letter = strtolower($player_letter);

//  PHP8 verificar letra introducida (ahuja en un pajar)
if (str_contains($choosen_word,$player_letter)) {
    // $letter_position es una variable que no influye, pero es creada debido a la precedencia de php
    // se usara mas adelante, devuelve la posicion de la letra que el usuario escribio, 
    // se usa while para devolver todas las ocurrencias, devuelve false al no encontrar mas
    $offset=0;
    while ($letter_position=strpos($choosen_word,$player_letter,$offset)!==false) {
        // un string es un array, al array ___ se colocara la letra indicada
        $discovered_letters[$letter_position]=$player_letter;   // presenta error
        $offset=$letter_position+1;
    }
} 
else{
    $attempts++;
    echo "Letra incorrecta. Te quedan ". MAX_ATTEMPS-$attempts ." intentos.";
}

echo "\n";

?>
