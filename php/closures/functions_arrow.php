<?php
/** https://www.php.net/manual/es/functions.arrow.php
 * Tanto las funciones anónimas como las funciones de flecha se implementan utilizando la clase Closure. 
 * Las funciones de las flechas tienen la forma básica fn (argument_list) => expr. 
 * Su sintaxis es muy parecida a las arrow functions de javascript, mientra que su
 * funcionamiento es muy parecido a las Lambdas de python.
 * La diferencia con las funciones anonimas es que 
 * las funciones flecha NO declaran un scope local.
 * 
 */

 $add_one_obj =fn($current_obj) => $current_obj+1;
 echo $add_one_obj(7);

# -------------------------------------------------------------------
# observe que es el mismo ejemplo
$numbers=[1,2,3,4];

# ejemplo usando la funcion anonima
 $numbers_by_2_an=array_map(
                     function($current){return $current*2;}
                    , $numbers);
 
 var_dump($numbers_by_2_an);

# ejemplo usando las arrow functions
$numbers_by_2_ar=array_map(
                    fn($current) => $current*2
                    , $numbers);

var_dump($numbers_by_2_ar);

# -------------------------------------------------------------------
# mas ejemplos
# -------------------------------------------------------------------

// Lee la variable $cajero del ámbito global
// el ambito solo funciona para leer, NO para escribir, es decir,
// No se pueden modificar las variables de ambito global desde arrow function
$cajero = 10;
$add_cajero = fn($add) => $cajero + $add;
echo $add_cajero(20) . PHP_EOL;  // 30



// Observe como no se modifico la variable del ambito global, 
// conservando siempre su valor original
$cajero2 = 10;
$add_cajero2 = fn($add) => $cajero += $add; 
$add_cajero2(5);
$add_cajero2(5);
$add_cajero2(6);
echo $cajero2 . PHP_EOL;  // 10 



// Arrow functions como funciones anonimas
// filtra las edades, quedando solamente los mayores de edad
// array_filter recibe un array, y un callback. Observe la diferencia en la sintaxis
$edades = [5, 21, 50, 9 ,18]; 
$mayores_de_18y = array_filter($edades, 
                                function($current) { return $current >= 18;}
                            );
echo implode(" ", $mayores_de_18y) . PHP_EOL;  // 21 50 18

$mayores_de_edad = array_filter($edades, 
                                fn($current) => $current >= 18
                            );
echo implode(" ", $mayores_de_edad) . PHP_EOL;  // 21 50 18




// Observe el paso de parametro por referencia
$where_am_i = "México";
$change_where_am_i = fn(&$where_am_i) => $where_am_i = "Colombia";
$change_where_am_i($where_am_i);

echo $where_am_i . PHP_EOL;   // Colombia
