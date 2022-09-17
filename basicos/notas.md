# CSS
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
