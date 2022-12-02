<?php
/** 
 * https://www.php.net/manual/es/language.exceptions.php 
 * https://www.php.net/manual/es/class.throwable.php
 * 
 * Errores en tiempo de ejecución
 * php lanza una excepcion, que se manejan con la
 * estructura ```try/catch```
 * Para lanzar errores propios, se usa la palabra ```throw```
 * Todas las excepciones en php deben implementar la interfaz ```Throwable```.
 * La clase ```Exception``` de php implementa directamente a la interfaz ```Throwable```
 * 
 */


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
