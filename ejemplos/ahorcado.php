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



echo "\n";

?>
