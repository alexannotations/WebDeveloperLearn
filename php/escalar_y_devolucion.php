<?php
/** Declaraciones de tipo escalar y devolucion
 * https://www.php.net/manual/es/migration70.new-features.php#migration70.new-features.scalar-type-declarations
 * https://www.php.net/manual/es/control-structures.declare.ph
 * https://www.php.net/manual/es/functions.arguments.php#functions.arguments.type-declaration
 * https://www.php.net/manual/es/functions.returning-values.php#functions.returning-values.type-declaration
 * 
 * Escalar
 * Cuando declaramos una funcion es posible indicar que tipo de datos queremos recibir en nuestro parametros.
 * Esto nos da la certeza de que estamos trabajando con el tipo de dato que realmente necesitamos.
 * El tipado de las funciones es coercitivo. En otra palabras podemos tipar nuestras funciones de forma opcional.
 * Para hacerlo de forma obligatoria se usa la palabra reservada "declare" al inicio del script
 * 
 * Devolucion
 * Tambien podemos declarar que tipo de dato va a devolver nuestra funcion. 
 * Esto da la certeza que al implementarse se esta trabajando con el tipo de dato que realmente se necesita.
 * El comportamiento por defecto es opcional, pero podemos forzarlo poniendo la palabra reservada "declare" 
 * al inicio del script. Si se desea indicar que no se quiere devolver nada se inica como ```: void```
 * 
 * Considere que si se utiliza "declare" ambas declaraciones son obligatorias.
 */

 // declaracion tipo escalar, antes de la variable se indica el tipo
function calcular_area_triangulo(int $base, int $altura, string $nombre) {
    return "¡Hola $nombre, el área de tu triángulo es " . ($base * $altura) / 2 . "!";
}
echo calcular_area_triangulo(10, 20, "Mr. ").PHP_EOL;





class Dummy{
    public $un_valor = "Cualquier cosa";
}
// La declaracion de tipo devolucion se indica despues de los parentesis con ```: tipo_dato```
function suma(Dummy $dummy): string{
    return $dummy->un_valor;
}
echo suma(new Dummy) . PHP_EOL;


# ---------------------------------------------------------------------------

// declaracion tipo escalar y tipo devolucion
function sumarArrays(array ...$arrays): array{
        // funcion anonima
        return array_map(function(array $array): int {
            return array_sum($array);   }, $arrays);
    }
print_r(sumarArrays([1,2,3], [4,5,6], [7,8,9]));

