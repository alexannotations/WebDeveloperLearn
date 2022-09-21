# CSS

[HTML color codes](https://htmlcolorcodes.com/)

[HTML reference](https://htmlreference.io/)


# Modelo caja contenedor
Dos tipos de etiquetas en HTML
 - **Etiquetas block:** generan un salto de linea arriba u abajo de la pagina ocupando el 100% del ancho del documento, la mayoria son de este tipo.
 - **Etiquetas inline:** No generan un salto de linea


## Selectores CSS
En CSS existen selectores de:
 - __Etiqueta o tipo__  p{}  div{}
 - __id__               #id-del-elemeto{}
 - __clase__            .miEstilo-o-elemento{}
 - __atributo__         a[href="..."]{}
 - __universal__        *{}

El uso del selector con el acento circunflejo permite aplicar el estilo a los elementos __p__ que __comiencen__ con _"mis"_.
```css
p[name^="mis"]{  ... }
```

El uso del signo de peso aplica a los elementos que __terminan__ con 
_"mis"_.
```css
p[name$="mis"]{  ... }
```

El uso del asterisco aplica a los elementos que __contengan__ con 
_"mis"_.
```css
p[name*="mis"]{ ... }
```
# Pseudoclases
Aplica el estilo a la etiqueta que sea el cuarto _numero de hijo_ de los elementos __p__
```css
p:nth-child(4){ ...  }
``` 
Aplica el estilo a todos los elementos __p__ pares
```css
p:nth-child(even){ ... }
``` 
Aplica el estilo a todos los elementos __p__ impares
```css
p:nth-child(odd){ ... }
``` 
Aplica el estilo al ultimo hijo del elemento __p__ 
```css
p:last-child{ ... }
``` 
Aplica el estilo al elemento __p__ unico
```css
p:only-child{ ... }
``` 


## Tipos de display

La propiedad display establece el tipo de visualización de los elementos HTML sin afectar el flujo normal de los elementos. Existen etiquetas que por defecto su display ya está determinado, como la etiqueta ```<div>``` que tiene display block, ```<span>``` tiene display inline y ```<button>``` tiene display inline-block.

- __inline__: Estos elementos son los que su caja mide exactamente lo mismo que su contenido. Estos elementos los podemos usar en textos y en lugar de que se agreguen en una nueva línea se agregaran justo al ladito del texto. ❗ Tienen como desventaja que no podemos ponerles márgenes ni tampoco podemos cambiar su tamaño.

- __block__: Estos elementos ocupan toda la pantalla, por lo que si quieres agregar otro elemento, este se agregará automáticamente abajo. No importa que tengas poco contenido, el elemento sí o sí va a ocupar toda la pantalla.

- __inline-block__: Con este display podemos tener tanto los beneficios de inline como de block, es decir, podemos tener elementos que no ocupen todo el ancho de la pantalla, sino que ocupen solamente lo que su contenido ocupa, pero también vamos a poder darle márgenes y podremos cambiar su tamaño.

- __flex__: consiste en el ordenamiento de elementos hijos en un solo eje, por defecto horizontalmente. El elemento padre o contenedor deberá contener la propiedad display con el valor flex. A partir de aquí, ya puedes ordenar los hijos según sea necesario.

- __grid__: [guide to grid](https://css-tricks.com/snippets/css/complete-guide-grid/) consiste en el ordenamiento de elementos hijos en dos ejes, como si fuera una cuadrícula o tabla. El elemento padre o contenedor deberá contener la propiedad display con el valor grid y debes definir las medidas de las columnas y de las filas. A partir de aquí, ya puedes ordenar los hijos según sea necesario.

- __none__: El display none desactiva la visualización de un elemento, como si el elemento no existiera.

