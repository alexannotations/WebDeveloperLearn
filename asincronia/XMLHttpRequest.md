# [XMLHttpRequest](https://developer.mozilla.org/es/docs/Web/API/XMLHttpRequest)
Es un objeto nativo de JS que permite obtener datos sobre una URL sin que sea necesario recargar la pagina por completo.
Admite el trabajo con XML, HTTP, file y FTP, para efectuar peticiones enviando datos de forma asicrona en segundo plano.
En JS depende del objeto ```window```.


## Propiedades del objeto XMLHTTPREQUEST
- ```readyState``` valor numerico entero que se encarga de guardar el estado de la peticion.
- ```responseText``` el resultado del servidor en forma de cadena de texto.
- ```responseXML``` el contenido del resultado del servidor en formato XML, se puede procesar como un objeto DOM.
- ```status``` el codigo de estado HTTP devuelto por el servidor.
- ```statusText``` el codigo de estado HTTP devuelto por el servidor en forma de cadena de texto.


## metodos del objeto XMLHTTPREQUEST
- ```open("metodo","url")``` inicializa el pedido, adecuado para ser usado desde JS. Establece los parametros de la petición que se realiza al servidor.
- ```openRequest()``` crea un pedido desde código nativo.
- ```abort()``` detiene la peticion actual
- ```getAllResponseHeaders()```devuelve una cadena de texto con las cabeceras del resultado del servidor
- ```getResponseHeader("cabecera")``` entrega una cadena de texto con el contenido de la cabecera solicitada.
- ```onreadystatechange()``` maneja los eventos que se producen
- ```send()``` efectua la petición HTTP al servidor
- ```sendRequestHeader("cabecera","valor")``` establece cabeceras personalizadas en la petición HTTP




## Crear una instancia
```js
var req = new XMLHttpRequest();
```
Es necesario implementar ```XMLHttpRequest``` como una clase, de esta forma sera posible generar las instancias que sean necesarias para manejar la comunicación con el servidor.

```js
function crearObjetoAjax(){
    var obj_h;
    // comprueba que el objeto pueda ser creado por el navegador
    if(window.XMLHttpRequest){
        obj_h = new XMLHttpRequest();
    }
    // caso contrario se crea mediante un control ActiveX (deprecated)
    else {
        obj_h = new ActiveXObject(Microsoft.XMLHTTP);
    }
    return obj_h;
}
```