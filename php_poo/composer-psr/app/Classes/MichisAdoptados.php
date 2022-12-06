<?php

# El namespace debe ser igual a la carpeta donde se encuentra
namespace App\Classes;

# Las clases se deben llamar igual que el archivo.
class MichisAdoptados {

    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct($name, $date_adopted, $adopted_by) {
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }

    public function getName() {
        return $this->name;
    }

    public function getDate_adopted() {
        return $this->date_adopted;
    }

    public function getAdopted_by() {
        return $this->adopted_by;
    }
}