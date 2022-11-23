Proyecto con las herramientas php, composer y phpunit

## Instrucciones de la actividad

- Instalar phpunit  ``` composer require --dev phpunit/phpunit ``` se crea la carpeta _vendor/_ y los archivos _composer.json_ y _composer.lock_

- Se puede trabajar asi, o se puede agregar el autoload a _composer.json_
```json
    "name": "alexannotations/validate",
    "description": "Proyecto de validación",
    "autoload": {
            "psr-4": {
                "App\\": "src/"
            }
        },
```
Ejecutar ```composer dump``` para dar de alta esta nueva configuracion de autoload

- Al trabajar con un sistema de pruebas phpunit debemos crear un documento _phpunit.xml_ con una configuración base

- Para ejecutar el sistema de pruebas, en la terminal escribir ```php vendor/phpunit/phpunit/phpunit```, hasta este momento no tenemos test para ejecutar, porque apenas creamos la configuración.

- Creamos la carpeta _test_, ahi creamos la clase _ValidateTest.php_. El estandar indica que las clases  de prueba deben terminar con Test, y las clases que deseemos porbar no deben tener la palabra test.

- Se probara una clase que no existe, se creo primero el test para analizar el resultado que deseamos, para que indique error, y asi las pruebas orienten respecto a la creación del sistema.

- Se crea la clase _Validate_ en la carpeta _src_ con la estructura basica, y al ejecutar la prueba deberia salir correcta, si el email es correcto o falsa si es incorrecto.

- Ahora se puede probar en un archivo index, sabiendo que funciona. Haciendolo de manera directa. Recordemos que primero es el test, y despues la validación. Cada test representa a un metodo,  y cada afirmacion es un asset


## Descripcion de archivos
### phpunit.xml
archivo de configuracion donde se indica donde estan las pruebas.


### ValidateTest.php
la prueba que dice prueba el metodo email y esperamos que sea verdadero o falso. Este codigo garantiza que el codigo es correcto.
