
Se hace la configuración de la tecnología
archivo composer.json
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
___composer dump___ para que se cree la carpeta vendor
y el archivo _autoload.php_ junto con los archivos de configuración donde se registro el _helper.php_ a nivel de archivos, y en psr4 el namespace apunta a la carpeta _src_
