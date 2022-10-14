<?php
/*
    https://www.php.net/manual/es/reserved.constants.php
    https://www.php.net/manual/es/language.variables.basics.php
    https://www.php.net/manual/en/language.constants.php
*/

// el signo $ indica que estamos ante una variable
$usuario = "nombreUsuario";

$numero1=7;
$numero2=8;
echo "$numero1 + $numero2 \n"; ## Muestra el texto
echo $numero1 + $numero2 ."\n"; ## Realiza el calculo


// A partir de PHP 5.3.0, es posible referirse a una clase utilizando una variable
// las constantes de clase están asignadas una vez por clase, y no por cada instancia de la clase. 
const CONSTANTE = 'valor constante';


/*
    El primer parámetro del método define() indica el nombre de la constante entre comillas, 
    en el segundo parámetro el valor que tendrá. Los parámetros deben estar separados por una coma.
    Es buena práctica escribir el nombre de las constantes en mayúsculas.
    NO es necesario usar el signo de dólar si quieres usar una constante. Se utiliza el nombre tal cual.
    NO puedes definir otra constante con el mismo nombre

    define: 
    Define constantes en tiempo de ejecución, (recomendada por el momento)
    esto le permite ser definida dentro de bloques como funciones, condicionales, etc.
    const: 
    Se derfinen en tiempo de compilación, 
    esto hace que no podamos definir constantes dentro de funciones ni condicionales.
*/

define("NUMERO_PI", 3.14);  // Constante: NUMERO_PI = 3.14
echo NUMERO_PI ."\n";
# PHP si continua ejecutando el codigo, indicando el error
# pero no redefine la constante nuevamente
define("NUMERO_PI", 1234);  // Constante: NUMERO_PI = 3.14
echo NUMERO_PI ."\n";