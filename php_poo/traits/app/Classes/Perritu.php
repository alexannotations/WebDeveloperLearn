<?php
# PSR namespace hace referencia al archivo donde esta guardado
namespace App\Classes;

use App\Traits\Pet;

# regla de PSR mismo nombre para la clase y el archivo
class Perritu {

    # para usar el trait en una clase
    use Pet;

    public function bark() {
        return "Woof! 🐶";
    }

    public function drool() {
        return "🐶💧";
    }
    
}