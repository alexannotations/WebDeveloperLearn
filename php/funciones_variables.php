<?php
/**     https://www.php.net/manual/es/functions.variable-functions.php
 * Es lo mismo que las variables variables, pero aplicado a funciones.
 * La ventaja es que podemos empezar a mandar a llamar funciones a 
 * partir de cadenas de texto dinamicas.
 * 
 */

 /** 
  * PHP evalua la variable $func.
  * Su valor es "saludar", por lo que
  * es a la funcion que se manda llamar
  * 
  */
 function saludar(){
    echo "meow";
 }

 function comer(){
    echo "ñom ñom";
 }

 $func="saludar";
 $func();
 