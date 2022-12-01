<?php
# funciones
# https://www.php.net/manual/es/functions.user-defined.php
# https://www.php.net/manual/es/functions.arguments.php
# https://gist.github.com/ryansechrest/8138375#9-functions
#
# https://wiki.php.net/rfc/spread_operator_for_array#advantages_over_array_merge
# https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list


# recibe parametro $rank
# en caso de no pasarse algun valor en la funcion, se puede usar un valor por defecto
# aqui pasamos $rank=1 que es un parametro predeterminado, pero puede recibir otro valor
function es_estudiante_legend($rank=1) {
    
    if ($rank >= 20000) {
        echo "¡Eres un estudiante Legend!\n";
    }
    else {
        echo "Lo sentimos, aun no alcanzas el nivel legend\n";
    }
}

# Paso de parametros
// Valores
function greet($name)
{
    return "Hola, $name";
}
echo greet('Usuario');


// Referencia
$course='PHP';
/* el parametro por referencia &, si se quita la variable $course mostraria PHP fuera de la funcion */
function path(&$course)  
{
    $course='Lavarel';
    echo $course;   // Lavarel
}
path($course);
echo $course;   // Lavarel
/**
 * https://www.php.net/manual/es/language.references.pass.php
 * El paso de parametros a una funcion, se realiza una copia de la variable
 * a otra ubicacion en memoria.
 * Un paso por referencia, se manda la ubicacion en memoria de dicha variable.
 * 
 *  */


# podemos crear una función que reciba una lista de números
function sum(...$args)
{
    return array_sum($args); // funcion predefinida
    # la funcion no indica algun retorno en su definicion
    # para retornar varios elementos podemos utilizar un array
    //return ['PDF','vista'];
    //exit(); # detiene el sistema 
}
echo sum(1,2,3,4); // regresa un int 10
# si a una funcion no se le pone nombre, se le llama funcion anonima
echo "\n";

/**
 * Este es un ejemplo para PHP Doc
 * Esta funcion realiza una suma dee dos numeros
 * puede auxiliarse con la extension vscode: PHP DocBlocker
 * 
 * @param int $a
 * @param int $b
 * @return void
 */
function suma($a,$b)
{
    echo "La suma de $a + $b es: ".($a+$b)."\n";
}

# operador unpacking
$arreglo1=[1,2,3];
$arreglo2=[4,5,6];
# juntar los arreglos array_merge() o con (arrayUnpacked u operador SPREAD) ...
# para PHP 7.4 o superior
$arreglosJuntos=[...$arreglo1, ...$arreglo2];
print_r($arreglosJuntos);


# como aplicar SPREAD a las funciones
# paso de parametros de array
$numeros=[1,2];
suma(...$numeros);


# genera parametros de forma dinamica con ...
# con ... $params se convierte en array
function sum_infinity(...$params){
    $result =0;
    print_r($params);
    foreach ($params as $key => $value) {
      $result+= $value;
    }
    # ver todos los numeros dinamicos sumados utilizando implode
    echo "El resultado de ". implode("+",$params) ." es:$result \n";
 }
 
 sum_infinity(1,3,5,5,8);
 sum_infinity(1,3,4,9,10,15);


$rank_user = (int) readline("Por favor, dinos cual es tu Rank: ");
es_estudiante_legend($rank_user);


echo "\n";


# closure o funciones anonimas
/** 
 * https://www.php.net/manual/es/class.closure.php
 * https://www.php.net/manual/es/functions.anonymous.php
 * 
 * Son funciones que podemos definir sin necesidad de asignarles un nombre.
 * Una función anónima se suele usar muy a menudo como 
 * parámetro directo en lugar de guardarlo en una variable (por comodidad)
 * Los Closures también se llaman callbacks porque son las funciones que 
 * son llamadas de regreso al terminar de ejecutar el código 
 * de otra función que te la pidió 
 * Las podemos guardar dentro de variables, pero su uso mas comun es pasarlas
 * como parametros de  otra funcion. Las funciones anonimas son una instancia 
 * de la clase Closure.
 * */

# funcion anonima
$greetings=function($name) // variable que requiere lógica
            {
                return "Hola, $name";
            };
echo $greetings('Lex');


# closure
// mandar por parametro una función que sera ejecutada por otra función
// closure forza a que se use una funcion anónima
function greet_lang(Closure $lang, $name)
{
    return $lang($name);
}
// variable con funcion anonima, variable que ejecuta logica en su interior
$es=function ($name){
        return "Hola, $name";
    };  // No olvidar el ;
$en=function ($name){
        return "Hello, $name";
    };  // No olvidar el ;

echo greet_lang($es,'Betty');
echo greet_lang($en,'Betty');

/* *  https://www.php.net/manual/es/function.array-map.php
 * funcion anonima como parametro de una funcion
 * cada numero del array $numbers se multiplicara por dos,
 * como indica la funcion anonima, y se guardara como array
        array(4) {
            [0]=>int(2)
            [1]=>int(4)
            [2]=>int(6)
            [3]=>int(8)
        }
  */
$numbers=[1,2,3,4];
$numbers_by_2=array_map(
                    function($current){
                        return $current*2;
                    }, $numbers
                );  // No olvidar el ;

var_dump($numbers_by_2);

/** La palabra reservada use
 * Cuando queremos que una variable externa exista dentro de un Closure
 * sin necesidad de pasarla como parametro podemos usar la palabra 
 * reservada "use".
 * Recordemos que las funciones tienen un ambito local, sin acceso al ambito global
 * 
 */
$outside_variable="esta es una variable externa";
$funcion_anonima = function() use($outside_variable){
    // gracias a use puedo usar la variable $outside dentro de esta funcion
    echo $outside_variable;
};  // No olvidar el ;
$funcion_anonima();


?>
