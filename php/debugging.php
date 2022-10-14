<?php
// Comentarios de una sola línea
# Otra forma de comentar en una línea

/* Esto es un comentario 
    multilínea
    Estos comandos se correran en la consola
*/

// Un array de datos:
$personas = [
    "Karla" => 22,
    "Anita" => 15,
    "Sara" => 65
];

# Observar en consola el contenido y detalles sobre esta variable:
var_dump( $personas );

echo "\n";

# Ahora usando solo muestra la info sin dar demasiados detalles
print_r(  $personas );
