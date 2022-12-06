
```composer init```
No cargamos dependencias, ni dev dependencies.
No agregamos PSR-4 autoload mapping. Maps namespace

Se crea un archivo _composer.json_ 
```json
{
    "name": "alexa/composer-psr",
    "type":"project",
    "authors": [
        {
            "name": "alexannotations",
            "email": "correo@example.com"
        }
    ],
    "require": {}
}
```

Agregamos al archivo _json_, PSR-4 para agregar manualmente e.l autoload que define el punto de entrada para que se autocargen los archivos. Tambien creamos una nueva carpeta en la raiz llamada _app_  donde usualmente se pone toda la logica (Classes y Logic). Esto para que la autocarga suceda dentro de _app_ 
```
"psr-4":{
    "Espacio_principal_del_namespace":"Redirije_hacia_la_carpeta_app"
}
```

```json
{
    "name": "alexa/composer-psr",
    "type":"project",
    "authors": [
        {
            "name": "alexannotations",
            "email": "correo@example.com"
        }
    ],
    "autoload": {
        "psr-4":{
            "App\\":"app"
        }
    },

    "require": {}
}

```

Al cumplir las reglas de PSR-4 podemos comenzar a utilizar la autocarga de clases, en la carpeta Logic con ```use namespace``` 
Posteriormente podemos comenzar con el archivo principal en la raiz _index.php_, donde se escribira toda la logica de la aplicacion. Donde se incluira el unico _require_ de toda la aplicacion.
Ejecutamos ```composer du``` para generar todos los archivos para autocargar.

Tambien podemos agregar una autocarga de archivos con _"files": [array de archivos de carga automatica],_ . Lo que permitira tener disponible la funcion ```createMichis()``` de _app/Logic/CreateMichis.php_.

```json
{
    "name": "alexa/composer-psr",
    "type":"project",
    "authors": [
        {
            "name": "alexannotations",
            "email": "correo@example.com"
        }
    ],
    "autoload": {
        "files": [
            "app/Logic/CreateMichis.php"
        ],
        "psr-4":{
            "App\\":"app"
        }
    },

    "require": {}
}
```

Se recomienda ejecutar nuevamente ```composer du``` para generar todos los archivos para autocargar, dado que se realizaron cambios al archivo _composer.json_.
