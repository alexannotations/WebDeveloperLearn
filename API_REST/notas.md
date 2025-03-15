# Aplication Programming Interface
Uso en servicios web


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
_jq_ sirve para mostrar el json colorido, requiere instalarse

Es importante recordar que el método PUT hace un reemplazo, no modificaciones puntuales. Por ello la información que enviemos a través de la petición debe ser completa.


## URL amigables
El archivo router.php procesa transforma la URL amigable a una URL util, como la requiere PHP, por lo que este archivo es el que debe recibir directamente las peticiones.
```php -S localhost:8000 router.php```

Configurar URLs amigables implica el uso de expresiones regulares que procesan y transforman las URLs recibidas. A menudo se puede manejar con un router inicial que procesa las peticiones antes de ser pasadas al controlador principal.
Con estas configuraciones, ejecutar el servidor con el router nuevo permite definir caminos más simplificados como _/libros/1_ en vez de rutas con parámetros explícitos.

