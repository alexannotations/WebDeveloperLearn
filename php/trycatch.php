<?php
/** 
 * https://www.php.net/manual/es/language.exceptions.php 
 * https://www.php.net/manual/es/class.throwable.php
 * https://www.php.net/manual/es/class.exception.php
 * 
 * Errores en tiempo de ejecución
 * php lanza una excepcion, que se manejan con la
 * estructura ```try/catch```
 * Para lanzar errores propios, se usa la palabra ```throw```
 * Todas las excepciones en php deben implementar la interfaz ```Throwable```.
 * La clase ```Exception``` de php implementa directamente a la interfaz ```Throwable```
 * 
 * https://github.com/nunomaduro/collision
 * https://github.com/filp/whoops
 * */


try {
    $resultado = 20/0;  // division entre cero
    echo $resultado;
} catch(Throwable $e) {
    echo $e->getMessage();
    // se puede hacer bypass al error, dejando en blanco este bloque, y no hara nada
}
echo PHP_EOL."Esto siempre se ejecuta".PHP_EOL;


try {
    $pet = readline("¿Qué quieres adoptar? ");
    if ($pet != "gato" && $pet != "conejo")
        // si no se cumple la condicion (gato o conejo) 
        // se lanza una nueva excepcion con throw
        // el mensaje que se envia es el string dentro de Exception
        throw new Exception("Lo sentimos, no tenemos $pet en este centro de adopción");
    // despues de lanzar una excepcion el resto del codigo no se ejecuta 
    // y se pasa al bloque catch
    echo "¡Felicidades por tu nuevo $pet!";
} catch (Throwable $e) {
    // solo se ejecuta si se genera el error
    echo $e->getMessage();
}

/** Métodos de la clase Exception implements Throwable */
$e->getMessage(); // Mensaje de Excepción
$e->getCode(); // Código de una excepción
$e->getFile(); // Obtiene el fichero en el que se creó la excepción
$e->getLine(); // Obtiene la línea en el que se creó la excepción
$e->getTrace(); // Obtiene la traza de la pila
$e->getTraceAsString(); // Obtiene la traza de la pila como una cadena de caracteres
$e->getPrevious(); // Devuelve la excepcion anterior
$e->__toString(); // Representa la excepcion en formato de cadena


function caminito2() {    return 20 / 0;}
function caminito() {    return caminito2();}
function division() {    return caminito();}

try {
    $resultado = division();
    echo $resultado;
} catch (Throwable $e) {
    // echo $e->getFile();  // .../trycatch.php
    // echo $e->getLine();
    // echo $e->getMessage();   // division by zero
    // echo $e->getCode();  // 0

    /** 
     * cadena de ejecucion para que el error sucediera
     * Si sucede dentro del bloque try, no mostrara nada en el array.
     * pero si sucede fuera del bloque a traves de una funcion, mostrara 
     * un array con file, code line, function y args. 
     * O bien mostrara varios arrays, segun el camino, por cada funcion utilizada.
     * */
    var_dump($e->getTrace());   

}
