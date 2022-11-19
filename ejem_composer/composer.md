# composer
Es el sistema empleado para mantener un estandar profesional en nuestros proyectos web en php

## Repositorio
El trabajo de composer es centralizar todos los paquetes de php, la gestion de paquetes (si un paquete depende de otros paquetes y por tanto se tienen todas las dependencias instaladas)
[repositorio principal](https://packagist.org/)

## Como instalar dependencias
```composer require --dev phpunit/phpunit```
la opcion --dev indica que queremos instalar un componente a nivel de desarrollo
```composer require nesbot/carbon```
este componente para manejo de fechas funcionara del lado de producción. Observe que se auto agregaron al archvio _composer.json_ dos estructuras _"require"_ y _"require-dev"_ junto con la carpeta vendor y el archivo _autoload.php_ 

## Como iniciar un proyecto
Cuando se trabaja con composer, todo gira en torno al archivo _composer.json_ se puede generar automaticamente con un comando, seguido de algunas preguntas, tomando algunas configuraciones de git: ``` composer init ```

### Instalacion de dependencias indicadas en composer.json
_Would you like to install dependencies now [yes]?_ __no__
para hacer la instalacion de las dependencias usamos el comando ``` composer install ``` y comenzara a instalar los paquetes requeridos y sus dependencias.

## Comandos de composer
https://getcomposer.org/doc/03-cli.md

Auxilia en la generación del archivo composer.json
iniciando un proyecto
``` composer init ```

Crea la configuración de composer 
en orden: (composer.json, estructurar el proyecto, crear las clases y archivos)
``` composer dump ```

Cuando tenemos la configuracion json, pero nada en composer (vendor)
``` composer install ```

Agregar dependecias por primera vez
``` composer require nombre/paquete ```

Desinstalar un paquete
``` composer remove nombre/paquete``` 

Actualiza composer, el manejador de dependencias
``` composer self-update ```

Actualiza las dependencias de nuestros proyectos
``` composer update ```


## Archivo de configuración composer.json
Se hace la configuración de la tecnología
archivo _composer.json_
Guarda la configuración estandar de lo que se necesita
```json
{
    "name": "name_author/name_package",
    "authors":[{}],
    "require":{},    // lo que el paquete requiere
    "autoload": {   // sistema de autocarga
        "psr-4": {
            /** configura el namespace, todo lo que el  
             * sistema incluya como Text va a 
             * hacer referencia a la carpeta src
             */
            "Text\\": "src/"
        },
        // sistema de carga de archivos de composer
        "files": [
            "src/helpers.php"   // elemento de autocarga
        ]
    }
}
```
Para indicarle al sistema que se esta usando el sistema de autocarga de composer, en la terminal ejecutamos
``` composer dump``` (agregar composer al proyecto) para que se cree la carpeta vendor
y el archivo _autoload.php_ junto con los archivos de configuración donde se registro el _helper.php_ a nivel de archivos, y en psr4 el namespace apunta a la carpeta _src_


## Archivo composer.lock
Se crea de manera automatica. Es de ayuda para trabajos colaborativos, porque mantiene las versiones exactas de cada dependencia, omitiendo asi el compartir la carpeta vendor.


## Migrar a servidor
Si necesitas migrar tu proyecto a un servidor, no es necesario copiar todas las carpetas, la carpeta vendor se suele ignorar, porque el archivo _composer.json_, permite instalar las dependencias con el comando ```composer install```, _composer_ buscará las dependencias y creará la carpeta vendor automáticamente en cualquier máquina que se ejecute.

Si dos dependencias distintas requieren de una misma dependencia simplemente instala una sola vez esta dependencia.


## sistema autoload
Despues de crear este archivo y crear las carpetas indicadas si ejecutamos ```composer dump``` nos configurara el archivo _autoload.php_ que internamente se encarga de cargar todo.
```json
    "autoload": {
        "psr-4": {
            "Text\\": "src/"
        },
        "files": [  // carga una serie de archivos, observe que es un array, configurando archivos ayudantes con funciones
            "src/helpers.php",
            "src/file2.php"
        ],
        "classmap":[ // configura carpetas, carga de manera directa carpetas que van a tener dentro de si diferentes clases
            "database/seeds",
            "database/factories"
        ],
        "psr-0":{   // elemento antiguo, a simple vista parece la misma configuración que psr-4
        // Pero se debe considerar toda la ruta de la carpeta
            "Text\\":"src/"
        },
        "psr-4":{//actual, hace enfasis a la carpeta principal y se entiende la ruta dentro de si o árbol de carpeta
            "Text\\":"src/"
        }
    }
// NOTA: los archivos json no permiten comentarios
```
Al utilizar un archivo _index.php_ debemos invocar al archivo de autocarga 
```php
require __DIR__ . '/vendor/autoload.php';
```
para darle la utilidad correcta a composer, que permite cargar las clases y configuración.
