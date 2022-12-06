<?php

# PSR namespace hace referencia al archivo donde esta guardado
namespace App\Classes;

# para importar un trait usamos el namespace del trait
# el cual tambien debe ser incluido en el archivo del trait
use App\Traits\Pet;

# regla de PSR mismo nombre para la clase y el archivo
class Michi {

    # para usar el trait en una clase
    use Pet;

    public function sayMeow() {
        return "Meow! 🐱";
    }

    public function scratch() {
        return "😾";
    }

}