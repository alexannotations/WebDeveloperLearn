# Selectores combinadores
Ayudan a ser más especificos.
 - __Descendientes__        div p
    padre _ hijo
 - __Hijo directo__         div > p
    padre >.hijoDirecto
 - __Elemento adyacente__   div + p
 - __General de hermanos__  div ~ p

Se pueden combinar los selectores, y se pueden leer mas facil de derecha a izquierda
```css
div .selectorA ~ .selectorB > p{}
```
# Tipos de selectores: pseudoclases y pseudoelementos

## pseudoclases
Permite llegar a las acciones que hace el usuario (reacciona a eventos)
 - :active
 - :focus
 - :hover
 - :nth-child(n)


 ## pseudoelementos
 Permiten acceder a elementos de html que no son accesibles con los anteriores selectores.
   - ::after
   - ::before
   - ::first-letter
   - ::placeholder
