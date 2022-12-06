<?php

# para que la autocarga funcione tambien de inicluir un namespace
namespace App\Traits;

/** un trait se define de forma semejante a una clase
 * aunque actua como plantilla para ciertos metodos
 * NO se puede instanciar
 * regla PSR mismo nombre para la clase y el archivo
 * */
trait Pet {

    # el trait tiene funciones 
    public function play() {
        return "I'm playing!!";
    }

    public function sleep() {
        return "I'm sleeping";
    }

}