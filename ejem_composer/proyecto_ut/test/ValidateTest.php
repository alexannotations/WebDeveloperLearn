<?php

// configuracion propia de la de phpunit
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email(){
        // clase :: metodo()
        // Validamos que se correcto
        $email=Validate::email('usuario@example.com');
        $this->assertTrue($email);  // funcion de phpunit para probar si el correo funciona

        // O validamos que es incorrecto
        $email=Validate::email('usuario@@example.com');
        $this->assertFalse($email);
    }
}