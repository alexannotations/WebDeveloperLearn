<?php

// composer require symfony/var-dumper
require("vendor/autoload.php");

class Michi {

    protected $patas = [];
    protected $color;

    function __construct(string $color) {

        $this->color = $color;

        for ($i=0; $i < 4; $i++)
            $this->patas[$i] = new PataDeMichi();

    }
    
}

class PataDeMichi {

    protected $nails = 4;
    protected $description = "Tiene manchitas";

    public function get_description() : string {
        return $this->description;
    }
    
}

$casa_de_michis = array(
    "nombre" => "MiChilango",
    "ubicacion" => [
        "pais" => "México",
        "ciudad" => "Ciudad de México",
        "colonia" => "Doctores",
        "numero" => 27
    ],
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("blanco"),
        new Michi("negro"),
        new Michi("gris"),
    ]
);

var_dump($casa_de_michis);
// es interactivo el detalle del arreglo
dd($casa_de_michis);
