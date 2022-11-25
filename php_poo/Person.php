<?php

class Person
{
    public function doGreet()
    {
        return "Hola $this->name";  // accede a la propiedad $name de esta clase
    }
}
