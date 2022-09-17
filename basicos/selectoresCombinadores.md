# Selectores combinadores
Ayudan a ser más especificos.
 - __Descendientes__        div p
    padre . hijo
 - __Hijo directo__         div > p
    padre >.hijoDirecto
 - __Elemento adyacente__   div + p
 - __General de hermanos__  div ~ p

Se pueden combinar los selectores, y se pueden leer mas facil de derecha a izquierda
```css
div .selectorA ~ .selectorB > p{}
```
