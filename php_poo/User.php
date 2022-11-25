<?php

class User
{
    public const PAGINATE = 25;
    protected $type;
    public $name;
    private $password;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }
}
