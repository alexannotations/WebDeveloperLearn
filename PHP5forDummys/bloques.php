<HTML>
	<HEAD> <TITLE> Pagina de Bloques</TITLE></HEAD>
     <BODY>
         <?php 
         /* Entendiendo la programacion en PHP
            Bloques            fecha de inicio 24/julio/2014          */
         
         $contador = 0;         $contador = $contador + 1;         echo $contador, "<br>\n";
         $contador++;         echo $contador, "<br>\n";
         /*$contador+=2;  echo $contador "<br>\n";
         $contador-=3;  echo $contador "<br>\n";
         $contador*=2;  echo $contador <br>\n;
         $contador/=3;  echo $contador <br>\n;*/
         
         
         // Arreglos, el primer valor asignado en la clave entre corchetes, es cero si no se especifica lo contrario
         //$mascotas[1] = "dragon";
         //$mascotas[2] = "unicornio";
         //$mascotas[3] = "tigre";
         $mascotas = array ( "dragon" , "unicornio" , "tigre", "escorpion", "serpiente");  // el contador inicia desde cero.
         
         
         //$depositos['ARM'] = "Las Armas";
         //$depositos['STM'] = "Sta. Cruz Meyehualco";
         //$depositos['NOR'] = "La Noria";
         $depositos = array ("ARM" => "Las Armas" , 
                             'STM' => "Sta. Cruz Meyehualco" ,
                             'NOR' => "La Noria");
         
        print_r($depositos); // puede ver la estructura y los valores de cualquier serie usando el enunciado print_r.
        // el arreglo se muestra en forma de linea
         
         echo "<br>\n$mascotas[1] <br>\n";
         echo "{$depositos["STM"]} <br>\n";
         echo "El deposito de vehiculos es {$depositos['ARM']} <br>\n";
         // Si incluye el valor del arreglo en un enunciado mas largo que este encerrado entre comillas dobles, debara encerrar el nombre del valor entre llaves.
         
         echo "<pre>";      // Muestra el arreglo en la salida en forma de lista.
         print_r($depositos);
         echo "</pre>";
         
         print_r($mascotas);
         
         $mascotas[1] = "";
         echo "<br>\nValor 1 de mascotas establecido a nada {$mascotas[1]} <br>\n";
         
         unset ($mascotas[1]); //se utiliza para borrar un valor de del arreglo
         echo "<br>\nValor 1 de mascotas eliminado unicornio {$mascotas[1]} <br>\n";
         print_r($mascotas);  /*Se observa en la salida que ya no existe*/  echo "<br>\n";
         
         sort ($mascotas);         print_r($mascotas);  echo "<br>\n";// ordena los valores numeros, mayusculas y minusculas, asignando numeros, las palabras claves se pierden
         sort ($depositos);         print_r($depositos);  echo "<br>\n"; //ordena los valores segun su valor sin perder las claves.
         /*en la pagina 160 de php para dummyes muestra una tabla de sort, para ordenar series*/
         
         list($primer, $segundo) = $mascotas; //obtener los valores de un arreglo, en este caso los 2 primeros
         echo $primer,"<br>";
         echo $segundo,"<br>";
         
         // el enunciado list obtiene los valores de un arreglo y los pone en variables
         $infocamisa = array("xtragrande","morado",12.00); //crea el arreglo infocamisa
         print_r($infocamisa);
         sort ($infocamisa); //ordena el arreglo en orden alfabetico de los valores
         list($color,$talla) = $infocamisa; // establece variables promer y segundo valor y copia los 
         //dos primeros valores en $infocamisa en las dos variavbles nuevas
         //echo $talla,"<br>"; echo $color,"<br>";
         print_r($infocamisa);
         extract($infocamisa);
         echo "<br>Su talla es $talla; su color es $color; su precio es $infocamisa[2] <br>";
         // ppp.173   
         ?>
            
       
<?php
/* Se supone que $var_array es un array devuelto desde wddx_deserialize */

$tamanio = "grande";
$var_array = array("color" => "azul",
                   "tamaño"  => "medio",
                   "forma" => "esfera");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $tamanio, $forma, $wddx_tamanio\n<br>";
?>
       
<?php
        //Iteraciones entre el arreglo (moverse por los arreglos), de forma manual
        $valor = current ($depositos);
        echo "Valor actual $valor<br>";
        $valor = next ($depositos);
        echo "Valor siguiente $valor<br>";
        $valor = next ($depositos);
        echo "Siguiente valor $valor<br>";
        // iteraciones utilizando foreach, genera arreglo y lo ordena segun su clave, pp163
       reset($depositos); // puede resetear la ubicacion donde se encuentra el puntero, si desea empezar desde el principio.
       
        $capitales = array ("CA" => "Sacramento", "TX" => "Austin", "OR" => "Salem", "BO" => "Masachussets");
        ksort ($capitales);
       // foreach se mueve por el arreglo de valor en valor y ejecuta el bloque de enunciadio usando cada valor ene l arreglo. ppp.175
        foreach ($capitales as $estado => $ciudad )
        {
            echo "Iteraciones $ciudad, $estado <br>";
        }
        // Aqui no se considero el nombre clave, solo esta el nombre arreglo y nombre valor
        foreach ($capitales as $ciudad )
        {
            echo "$ciudad <br>";
        }
?> 
         
         
<?php
// Arreglos multidimensionales ppp.176
//es un arreglo de series, al tener parejas de claves y valores. El valor para 
//cada clave es un arreglo con dos parejas de claves y valores
$preciosproductos ['ropa']['camisa'] = 20.00;
$preciosproductos ['ropa']['pantalones'] = 22.50;
$preciosproductos ['ropa de cama']['manta'] = 25.00;
$preciosproductos ['ropa de cama']['colcha'] = 50.00;
$preciosproductos ['muebles']['lampara'] = 44.00;
$preciosproductos ['muebles']['alfombra'] = 750.00;
// este tipo de arreglo es multidimensional, ya que es como un arreglo de series.
$preciocamisa = $preciosproductos['ropa']['camisa'];
echo $preciosproductos['ropa de cama']['manta'];
echo "<br>El precio de una camisa es \${$preciosproductos['ropa']['camisa']}<br>"; // la diagonal inversa \ indica que signo de $ literal, y no el inicio de una variable.

// necesita un enunciado foreach para cada serie, un enunciado esta dentro de otro enunciado foreach, a esto se le llama anidar pp178
    echo "<table border=1>";
    foreach ($preciosproductos as $categoria)
    {
        foreach ($categoria as $producto => $precio)
        {
            $f_price = sprintf("%01.2f", $precio);
            echo "<tr><td>$producto:</td><td>\$$f_price</td></tr>";
        }
    }
    echo "</table>";
//pp.179 ?>

                   
	</BODY>
</HTML>