<?php
require 'User.php';

// Admin hereda de User
class Admin extends User
{
    public $rol='Administrador';
    public function getName(){
        return "Soy $this->name";
    }
}

$admin=new Admin("Roberta ");
echo $admin->getName();

$nuser=new User(" Raquel ");
echo $nuser->getName();
