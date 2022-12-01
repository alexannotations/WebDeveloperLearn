<?php
/** Argumentos
 * https://www.php.net/manual/es/functions.arguments.php
 * 
 */

// Pasa un array como parámetro por defecto, observe que ya estan definidos los valores
function sumar_edades($edades = array(13, 17, 35)) {
    return array_sum($edades);
  }
  // Usa el array que se esta pasando
  echo sumar_edades(array(5, 10, 15)) . PHP_EOL;    // PHP_EOL El símbolo 'Fin De Línea' correcto de la plataforma en uso. 
/** Se puede crear una funcion donde se incluyan parametros por defecto y parametros obligatorios
 * para esto siempre se deben indicar primero los parametros obligatorios, y despues los parametros por defecto
 * 
 * function hacerCalculo($n1, $n2=8){   #code  }
 * */

  /**
   * Trailing commas 
   * implementado en PHP 8
   * Son comas que se pueden dejar al aire,
   * observe la ultima coma al final de argumento
   * Se usa para generar codigo dinamico, o bien solo por comodidad
   */
  function multiplicar(
                        $n1 = 1, 
                        $n2 = 2, 
                        $n3 = 3,
                    ) {
    return $n1 * $n2 * $n3;
  }
  echo multiplicar() . PHP_EOL;
  


  class UnaClaseRandom {

  }
  class OtraClaseRandom {

  }
  
  /** La palabra reservada class es usada para la resolución de nombres de clases. 
   * Se puede obtener un string con el nombre completamente cualificado de 
   * la clase ClassName utilizando ClassName::class. 
   * Esto es particularmete útil con clases en espacios de nombres.  
   * */
  // Parámetro por defecto con instancias de clase.
  function receive_a_class($class = new UnaClaseRandom) {
      echo $class::class;   // muestra una UnaClaseRandom si se envia sin parametros
  }
  echo receive_a_class() . PHP_EOL; 
  echo receive_a_class(new OtraClaseRandom) . PHP_EOL;  // muestra una OtraClaseRandom
  
  // Orden de los parámetros
  function suma($n1, $n2 = 8)
  {
      return $n1 + $n2;
  }
  
  echo suma(8) . PHP_EOL;



/** # Named arguments   php8.0
 * https://www.php.net/manual/es/functions.arguments.php#functions.named-arguments
 * Los named arguments son una forma de pasarle parametros a una funcion 
 * basandose en el nombre del parametro en lugar de la posicion. Es decir,
 * puedo simplemente mencionar a que parametro le quiero pasar algun valor.
 * 
 * */
function myFunction ($parametro1, $parametro2) {
	#code
}
myFunction($argumento1, $argumento2);

// ----------------------------------
function get_person_info($name, $age, $country){
    echo "Tengo la información de $name, tiene $age años y vive en $country";
}
// observe que se envian en diferente orden
get_person_info(
    age: 18,
    country: "Erathia",
    name: "Rosalia B.",
);
