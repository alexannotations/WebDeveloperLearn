<?php

// configuracion propia de la de phpunit
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    // los metodos deben comenzar con test_nombreMetodo o testNombreMetodo
    public function test_email(){
        // clase :: metodo()
        // Validamos que sea correcto
        // assert1
        // El nombre de clase completamente cualificado ClassName::class
        $email=Validate::email('usuario@example.com');
        $this->assertTrue($email);  // funcion de phpunit para probar si el correo funciona

        // O validamos que es incorrecto
        // assert2
        $email=Validate::email('usuario@@example.com');
        $this->assertFalse($email);
    }

    public function test_url(){
        // assert3
        $url=Validate::url('https://example.com');
        $this->assertTrue($url);

        // assert4
        $url=Validate::url('example.com');
        $this->assertFalse($url);  // observe que se espera un false, porque la direccion no es valida
    }
}
