<HTML>
	<HEAD> <TITLE> Pagina de Bloques</TITLE></HEAD>
     <BODY>
         
  <?php 
  // Adm1n1strad0rS1t1o
 // Enunciados Codicionales utiles  pp.179
/*
   if (condicion necesaria ...)
    {
     bloque de enunciados
    }
   elseif (condicion opcional se pueden repetir varias veces ...)
    {
     bloque de enunciados
    }
   else (condicion opcional solo se puede utilizar una vez...)
    {
     bloque de enunciados
    }
*/ 
  $pais = "Ale";
            if ($pais == "Alemania")
                {
                $version = "aleman";
                $mensaje = "Sie sehen unseren Katalog auf Deutsch";
                }
               elseif ($pais == "Francia")
                {
                $version = "frances";
                $mensaje = "Vous verrez notre catalogue en francais";
                }
               elseif ($pais == "Italia")
                {
                $version = "italiano";
                $mensaje = "Vedrete il nostro catalogo in italiano";            
                }
              else 
                {
                $version = "ingles"; // la variable se establece en ingles, aunq no se necesita en este momento
                $mensaje = "You will see our catalog in english";                 
                }
            echo "$mensaje<br>";
  
//Se pueden anidar los enunciados condicionales, aqui buscara si cumple con el pais chile, si es asi elegira un metodo de contacto
            $paiscliente = "méxico";
            if ($paiscliente == "Chile")
            {
                if ($direccionemail != "")
                    { $metodocontacto = "carta";
                    }
                else
                    {$metodocontacto = "email";
                    }
            }
            else
                {
                $metodocontacto = "no se contactara a clientes de otro pais";
                }
            
// Enuncioados switch  pp.183 
  $estadocliente = "CA";
  $costototalpedido = 62;
  
  switch ( $estadocliente ) {
      case "OR":
          $tasaimpuestoventa = 0;
          break; //se puede omitir el enunciado break
      case "CA":
          $tasaimpuestoventa = 1.0;
          break;
      default:
          $impuestoventas = .5;
          break;
  }
      $impuestoventas = $costototalpedido * $tasaimpuestoventa;          
      echo "Usted pagara de impuesto $impuestoventas <br>" ;    
      
 // Usar ciclos for pp.185
      // for (valorinicial;condicionfinal;incremento) {bloque de enunciados;}
      for ($i=1;$i<=10;$i++){echo "$i. ¡Hola mundo!<br>";}
      // usted puede preguntarle a php cuantos valores hay en un arreglo
      $mascotas = array ( "dragon" , "unicornio" , "tigre", "escorpion", "serpiente");
      for ($i=0;$i<sizeof($mascotas);$i++){echo "$i $mascotas[$i]<br>";}
      $t = 0;
      for ($i=0,$j=1;$t<=4;$i++,$j++) {$t = $i + $j; echo "$t<br>";}
      //sizeof calcula la cantidad de valores maximo en el arreglo
      
        // ciclos while pp.176, la condicion se verifica al inicio del ciclo, si no es verdadera no se ejecuta.
      $clientes = array("Huang","Perez","Herrera");
      $variabledeprueba = "no";
      $k = 0;
      while ( $variabledeprueba != "si")
      {
          if ($clientes[$k] == "Perez")
          {
              $variabledeprueba = "si";
              echo "Perez<br>";
          }
          else
          {
              echo "$clientes[$k], no Peraz<br>";
          }   
          $k++;
      }
      
	$x =1;
	while ($x<=10)
	{
	echo "<p>X tiene el valor de :".$x."</p>";
	$x=$x+1;
	}

      /* ciclos do ... while  pp.178, se utilizaran las variables anteriores, 
       * la condicion se revisa al final del ciclo, se ejecuta incluso si 
       * la condicion nunca es verdadera al menos una vez */
      do 
         {
          if ($clientes[$k] == "Perez")
          {
              $variabledeprueba = "si";
              echo "Perez<br>";
          }
          else
          {
              echo "$clientes[$k], no Paraz<br>";
          }   
          $k++;
      } while ($variabledeprueba != "si");
      
      /*ciclos infinitos, 
       * signo igual almacena un valor en una variable, 
       * y doble igual comprueba si dos valores son iguales 
       * "si" == $variable; 
       * no olvidar dejar fuera el contador   
       * 
       *  Para escapar de ciclos puede usarse break  o  continue  pp.181   */
      
   /*   $prueba4iniinito = 0;
      $prueba4infinito++;
      if ($prueba4infinito > 100)
      {
          break;
      }
  pp.195 Funciones, se acostumbran poner al principio o final del programa*/   
    mostrarlogo(); 
    
    /* Puede usar variables que sean locales a la funcion, pero no estara disponible
     * fuera de la funcion, pero si usa el enunciado global estara disponible en todo
     * el programa. */
      
    function mostrarlogo()
    {
      echo '<hr width="50" align="left">',"\n";
      echo '<img src="img.png" width="50" height="50><br>',"\n";
      echo '<hr width="50" align="left"><br>',"\n";
      global $nvariable;
      $nvariable = "<br>\nlogo\n<br>";
      echo $nvariable;
      return;
    }
      
    ?>
         
         
                   
	</BODY>
</HTML>