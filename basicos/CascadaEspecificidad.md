# Cascade Style Sheets

## Cascada en CSS
La cascada es el concepto que determina qué estilos se colocan sobre otros, priorizando a aquellos que se encuentren más abajo del código.

## Especificidad en CSS
La especificidad consiste en dar un valor a una regla CSS sobre qué tan específico es el estilo, esto para que los navegadores puedan saber qué estilos aplicar sobre otros, independientemente de dónde se encuentren en el código. El estilo se aplicará donde la especificidad sea mayor.

## Tipos de especificidad en CSS
Existen 6 tipos de especificidad con su respectivo valor, donde ```X``` es la cantidad de estilos que lo contienen. 
¿Como podemos saber que reglas de CSS tienen mayor especificidad?

||||||Especificidad|
|-|-|-|-|-|-|
|X|O|O|O|O|!important|
||X|O|O|O|estilos en linea escritos en el html inlineStyles|
|||X|O|O|#id|
||||X|O|clases, atributos y pseudoclases|
|||||X|elementos y pseudoelementos tag|
|||||O|selector universal|

[specificity Calculator](https://specificity.keegan.st/)

## Posicionamiento
 - relative
 - absolute
 - fixed
 - sticky
 - static
 - initial
 - inherital
