<?php
// contratos
// Database, get, delete, store, edit, update
// La interfaz permite desarrollar la logica necesaria para que sea desarrollada a traves de clases
interface Person
{
    public function getName();
}


class Admin implements Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('Lynda');
echo $admin->getName();