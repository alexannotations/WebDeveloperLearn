# Aplication Programming Interface
Uso en servicios web


Para levantar un servidor php, considerando que existe un _index.html_ ``` php -S localhost:8000 ``` aunque para el ejemplo se ingresa desde el _router.php_

__deploy__
https://vercel.com/docs/functions/runtimes#advanced-usage/community-runtimes


## REST
 REpresentational State Transfer
- Recurso
- URI (Uniform Resource Identifier)
- Acción

__Petición REST__
- URL (Uniform Resource Locator) incluye el dominio y protocolo
- Verbo HTTP (GET, POST, PUT, DELETE)


## SOAP
Simple Object Access Protocol


## Consumo vía REST

```curl https://xkcd.com//info.0.json | jq```
_jq_ sirve para mostrar el json colorido, requiere instalarse {winget install jqlang.jq}

Es importante recordar que el método PUT hace un reemplazo, no modificaciones puntuales. Por ello la información que enviemos a través de la petición debe ser completa.


## URL amigables
El archivo router.php procesa transforma la URL amigable a una URL util, como la requiere PHP, por lo que este archivo es el que debe recibir directamente las peticiones.
```php -S localhost:8000 router.php```

Configurar URLs amigables implica el uso de expresiones regulares que procesan y transforman las URLs recibidas. A menudo se puede manejar con un router inicial que procesa las peticiones antes de ser pasadas al controlador principal.
Con estas configuraciones, ejecutar el servidor con el router nuevo permite definir caminos más simplificados como _/libros/1_ en vez de rutas con parámetros explícitos.



## Autenticación via HTTP
Restringir accesos a la API, las credenciales se envian en cada request, la autenticacion se realiza en cada request. Por lo que es ineficiente e insegura.
__user:password@URL__


## Autenticación HMAC
Codigo de Autorización Basado en Hash de Mensajes
Metodo de autenticación { ID + HASH }
    - _Función Hash_: Difícil de romper, que sea conocida por el cliente y servidor.
    - _Clave secreta_: Solamente la pueden saber el cliente y el servidor, será utilizada para corroborar el hash.
    - _UID_: El id del usuario, será utilizado dentro de la función hash junto con la clave secreta y un timestamp.


## Autenticación Access Tokens
Vea los archivos auth_server.php y auth_TokenAccess.php


## Manejo de errores en un servicio REST
https://www.restapitutorial.com/httpstatuscodes
HTTP Response Code
400 Bad Request: indica que el servidor no puede o no procesa la petición debido a algo que es percibido como un error del cliente
404 Not Found: el servidor no encuentra el recurso solicitado.
500 Internal Server Error: la petición no pudo procesarse por un error del servidor.


## Fuentes
- https://github.com/mchojrin/platzi-rest-api
