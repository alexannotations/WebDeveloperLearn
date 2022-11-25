<?php
/** Polimorfismo: interfaz */
interface Search
{
    public function all();
}


class Useer implements Search
{
    public function all()
    {
        return "Obteniendo a los usuarios, XML. ";
    }
}


class Post implements Search
{
    public function all()
    {
        return "Obteniendo los post, JSON. ";
    }
}


$user=new Useer();
echo $user->all();

$post=new Post();
echo $post->all();