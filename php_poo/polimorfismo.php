<?php
/**
 * puede ejecutarse en un servidor de pruebas con el comando
 * php -S localhost:8080 .\php_poo\polimorfismo.php
 * o en terminal
 * php .\php_poo\polimorfismo.php
 */

abstract class Basee {
    protected $name;    // al ser protected pueden acceder las clases que hereden

    private function getClassName() {
        /** funcion accedida solo desde la misma clase
         * El nombre de la clase enlazada estáticamente en tiempo de ejecución
         * Obtiene el nombre de la clase desde la que se llama al método estático.
         * Devuelve el nombre de la clase. Devuelve false si la llamada se hizo desde fuera de la clase.
         */
        return get_called_class();
    }

    public function viewName() {
        return "My name is $this->name from class {$this->getClassName()}. ";
    }
}


class Admin extends Basee {
    public function __construct($name) {
        // $this->name hace referencia a la propiedad de la clase padre
        $this->name = $name;
    }
}


class User extends Basee {
    public function __construct($name) {
        $this->name = $name;
    }
}


class Guest extends Basee {
    // el nombre se establece de manera fija, a comparacion de los anteriores que usan un metodo constructor
    protected $name = 'invitado';
}

/** ----------------------------------------- */

$guest = new Guest();
echo $guest->viewName();    // llama a la funcion heredada de Basee 

$admin = new Admin('Helena');
echo $admin->viewName();

$user = new User('Jovana');
echo $user->viewName();