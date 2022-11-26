<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

// hereda de la clase TestCase
class PostTest extends TestCase
{
    // observe que el metodo comienza con test
    public function test_add_comment_to_post()
    {
        // asigno un objeto a las variables
        $post = new Post(); // crea un post
        $comment = new Comment();   // crea un comentario

        /**
         * agrega un comentario en el post
         * con los objetos previamente creados
         * Siendo esto el codigo minimo necesario para index.php
         */
        $post->addComment($comment);

        // afirmaciones de comprobación
        /** despues de crearse el post, lo comprobamos */
        $this->assertEquals(1, $post->countComments());
        /**
         *  probar que el comentario sea una instancia real de la clase comentarios.
         * codigo especifico que proporciona PhpUnit para comprobar que se esta haciendo realmente
         * una instancia de comentarios, por lo que revisamos el primer comentario guardado
        */
        $this->assertInstaceOf(Comment::class, $post->getComments()[0]);
    }
}