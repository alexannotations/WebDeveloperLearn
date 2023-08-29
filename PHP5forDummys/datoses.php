<HTML>
	<HEAD> <TITLE> Datos entran, datos Salen C.8</TITLE></HEAD>
     <BODY>
         
  <?php 
 // MySQL  pp.203
      
 /* $conectar = mysql_connect('localhost', 'user', '')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully'; */

  if (!$conexion = mysql_connect("localhost","user",""))
      {
          $mensaje = mysql_error();
          echo "$mensaje<br>";
          die();
      }
  echo "Conexion establecida con el servidor<br>";
  
  $basedat = "prueba";
  $db = mysql_select_db ($basedat,$conexion)
          or die("Fallo la conexion a base de datos <br>");
  /*Ejecutar consultas, los datos obtenidos se almacenan en una ubicacion temporal 
   * y el identificador se asigan a la variable $resultado, es necesario mover los datos
   * desde su ubicacion temporal a variables que pueda usar el programa */
      $consulta1 = 'SELECT Delegaciones, JUZGADO, PAdscp
                FROM juzgados
                WHERE PAdscp IS NOT NULL ';       //IS NOT NULL  -  != "" 
      $resultado = mysql_query ($consulta1,$conexion);           
            //conexio es opcional, uso de comillas pp.210, el resultado se almacena en una ubicacion temporal Resource id #4
          //or die("No se pudo ejecutar la consulta.<br>");
  
      $fila = mysql_fetch_array($resultado);
      extract($resultado);
      echo "$resultado <br>";
      
  // Check resultado, Si hubo un error mostras cual es
if (!$resultado) {
$message = 'Consulta invalida: ' . mysql_error() . " ";
$message . 'Consulta correcta: ' . $resultado;   //el operador .= o . es para concatenar
die("$message");
} 
//echo "$message<br>";
//phpinfo();  http://php.net/mysql_fetch_array
/*
    while ($fila = mysql_fetch_array($resultado, MYSQL_NUM)) {
        printf("<br>Delegaciones: %s  JUZGADO: %s  PAdscp: %s", 
                $fila[0], $fila[1], $fila[2]);  
    }
 
echo "<br>";

    while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
        printf("<br>Delegaciones: %s  JUZGADO: %s  PAdscp: %s", 
                $fila["Delegaciones"], $fila["JUZGADO"], $fila["PAdscp"]);
    }

echo "<br>";

    while ($fila = mysql_fetch_array($resultado, MYSQL_BOTH)) {
        printf ("<br>Delegaciones: %s  JUZGADO: %s  PAdscp: %s",
                $fila[0], $fila["JUZGADO"], $fila["PAdscp"]);
    }
*/


 /*// Usar ciclos for pp.185
      // for (valorinicial;condicionfinal;incremento) {bloque de enunciados;}
      for ($i=1;$i<=10;$i++){echo "$i. ¡Hola mundo!<br>";}
      // usted puede preguntarle a php cuantos valores hay en un arreglo
      $mascotas = array ( "dragon" , "unicornio" , "tigre", "escorpion", "serpiente");
      for ($i=0;$i<sizeof($mascotas);$i++){echo "$i $mascotas[$i]<br>";}
      $t = 0;
      for ($i=0,$j=1;$t<=4;$i++,$j++) {$t = $i + $j; echo "$t<br>";}
      //sizeof calcula la cantidad de valores maximo en el arreglo
     */ 
   

////////////////////////////////////////////////////////  
  /*La funcion mysql_fetch_array se usa para extrar los datos de su ubicacion temporal pp.212*/
  /*pp.212 Extraer y usar datos
    mysql_fetch_array($result) usela para extraer una fila de la consulta, 
    usela en un ciclo para varias filas 
   $fila = mysql_fetch_array($identificadorderesultado,tipodeaareglo);
    MYSQL_NUM - MYSQL_ASSOC - MYSQL_BOTH (default)   */
  /*$fila = mysql_fetch_array($resultado);
  extract($fila);
  echo "$fila<br>";*/

    //Liberas el resultado
    mysql_free_result($resultado);   
  
  mysql_close($conexion);
  echo "<br>Conexión terminada<br>";

  
  /*Para el uso de las comillas en las consultas SQL:
   *  Use comillas dobles al comienzo y al final de la cadena.
   * Use comillas simples antes y despues de los nombres de variables.
   * Use comillas simples antes y despues de cualquier valor literal.
   *    */
  ?>
    </BODY>
</HTML>