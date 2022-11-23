<?php
// Comentarios de una sola línea
# Otra forma de comentar en una línea

/* Esto es un comentario 
    multilínea
    Estos comandos se correran en la consola
    Xdebug 
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

/** 
 * En laravel tenemos la funcion dump(). Esta nos provee de un elemento que
 * podemos manipular para ver información muy detallada de lo que queramos.
 * 
 * En frameworks como lavarel podemos llegar a tener herramientas
 * mas avanzadas de debugging como la funcion dd()
 * 
 * Estas funciones no estan nativamente, se pueden implementar con composer:
 * composer require symfony/var-dumper
 * 
 * index.php
 * 
 * 
 */