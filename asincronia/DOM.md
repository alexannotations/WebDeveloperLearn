# DOM
_Document Object Model_

Es un conjunto de utilidades que nos permiten manipular documentos XML, se trata de una API que nos proporciona las herramientas que necesitamos para manipular XML o páginas XHTML en forma sencilla y rápida.
En la base del funcionamiento de DOM se encuentra la necesidad de transformar la página o el archivo XML en una estructura más sencilla, basada en nodos interconectados en forma de árbol.
DOM es independiente de cualquier lenguaje, aunque en general se asocia con JavaScript.
Para usar DOM necesitamos que la página se cargue por completo, para que este presente la estructura de árbol.
Las funciones de DOM hacen posible realizar diversos cambios sobre esta estructura, como añadir, eliminar, modificar o reemplazar nodos.



## Tipos de nodos
Los más importantes son:
- __Document__ Nodo raíz de los documentos HTML y XML. Todos los nodos derivan de _Document_.
- __DocumentType__ Contiene la representación del DTD empleado en la página.
- __Element__ Representa el contenido definido por etiquetas html de apertura y cierre o de una etiqueta abreviada.
- __Attr__ Representa el par atributo/valor.
- __Text__ Almacena el contenido del texto que se encuentra entre una etiqueta de apertura y una de cierre.
- __CDataSection__ Se encarga de representar una sección ```<![CDATA[]]>```
- __Comment__ Es un nodo especial que representa un comentario de XML.



## Uso de DOM
Con la estructura de nodos ya definida, podemos hacer uso de DOM para trabajar con ellos.
Con el objeto Node de JS, podemos acceder a las propiedades para manipular y procesar documentos.

El objeto define diferentes constantes para acceder a los distintos nodos:
```js
Node.ELEMENT_NODE = 1
Node.ATTRIBUTE_NODE = 2
Node.TEXT_NODE = 3
Node.CDATA_SECTION_NODE = 4
Node.ENTITY_REFERENCE_NODE = 5
```

Algunas propiedades, atributos y funciones
```js
nodeName    // devuelve un string con el nombre del nodo
nodeValue   // devuelve un string con el valor del nodo
nodeType    // devuelve un número con una de las 12 constantes que corresponden a los nodos
getElementsByName()     // obtiene los elementos cuyo atributo name coincida con el parámetro que pasamos
getElementById()        // permite acceder directamente a un nodo y modificar sus propiedads
getElementsByTagName()  // obtiene los elementos que presentan una etiqueta igual al páarametro indicado
```

Ejemplo de acceso a nodos mediante DOM
```js
// obtener los elementos <head> y <body>
var objeto_head = objeto_html.firstChild;
var objeto_body = objeto_html.lastChild;

// acceder directamente al <body>
var objeto_body = document.body;
```



# BOM
_Browser Object Model_

Permite manipular la forma en que se presentan las propiedades de las ventanas del navegador. 
Permite efectura las siguientes tareas:
- Crear, redimensionar, mover y cerrar las ventanas del navegador, trabajar sobre la barra de estado y otras modificaciones que no se relacionan con el contenido propio de la pagina.
- Obtener datos relacionados con el navegador ejecutado.
- Acceder a las propiedades que corresponden a la página actual
- Gestionar las cooies
- Trabajar con objetos ActiveX en IE
Los objetos dentro de BOM se organizan en jerarquías.


- Objeto __window__ representa la ventana del navegador: ```moveBy(x,y)```, ```moveTo(x,y)```, ```resizeBy(x,y)```, ```resizeTo(x,y)```.

- Objeto __document__ se encuentra disponible en DOM y BOM: ```lastModified```, ```referrer```, ```title```, ```URL```. Estas ultimas 2 ademas de obtener un valor, tambien es posible establecerlo.

- Objeto __location__ representa la URL de la pagina: ```hash```, ```host```, ```hostname```, ```href```, ```pathname```, ```port```, ```protocol```, ```search```.


```js
// uso de BOM para redimensionar una ventana al maximo posible, 
// dependiendo de la pantalla del usuario.
window.moveTo(0,0);
window.resizeTo(screen.availWidth, screen.availHeight);

document.getElementsByTagName("p");     // para acceder a un parrafo
document.images[0];                     // para acceder a una imagen
document.images["imagen"]
document.links[0]                       // acceder a un enlace
document.forms[0]                       // acceder al formulario
document.forms["preguntas"]
```



