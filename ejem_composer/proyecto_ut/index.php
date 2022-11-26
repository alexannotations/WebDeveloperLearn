<?php
// archivo principal de composer de autocarga
require __DIR__.'/vendor/autoload.php';

use App\Post;
use App\Comment;

// NO es necesario hacer la validación desde la pagina
var_dump(App\Validate::email('usuarioindex@example.com'));

$post = new Post();

$comment1 = new Comment();
$comment2 = new Comment();
$comment3 = new Comment();

$post->addComment($comment1);
$post->addComment($comment2);
$post->addComment($comment3);

$comments = $post->getComments();

$total_comments = count( $comments );

echo "<br>La cantidad de comentarios es: $total_comments";

/*
https://platzi.com/clases/2034-php-poo/32787-reto-ejercicio/
*/