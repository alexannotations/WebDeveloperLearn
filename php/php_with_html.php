<?=
 $usuario="Lex";
 $a=5;
 $hablar_de_bruno=false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinando HTML y PHP</title>
</head>
<body>


<!-- Diferentes formas de escribir texto en php -->
    <?php echo "<b>Hola  $usuario con echo<b>"; ?>
    <br>
    <?=  "<b>Hola $usuario con =<b>"; ?>

    <!-- 
        tres tipos de tag para php, se agrego un espacio intencionalmente entre < y ?
            1.normal tag(< ?php ?>)
            2.short echo tag(< ?= ?>)
            3.short tag(< ? ?>)  está desaconsejada
     -->

    <!-- Sintaxis alternativa de estructuras de control 
             la sintaxis alternativa es cambiar 
             la llave de apertura por dos puntos (:) 
             y la llave de cierre por 
             endif;, endwhile;, endfor;, 
             endforeach;, endswitch;, 
             respectivamente. 
    -->
        <?php if ($a == 5): ?>
            <div>a es igual a 5</div>
        <?php endif; ?>


        <!-- Esto es una mala practica -->
        <?php if ($hablar_de_bruno) {
            echo "<b>😱<b>";
        } else {
            echo "<b>💃<b>";
        }
        ?>


        <!-- Esto es aceptable -->
        <?php if ($hablar_de_bruno) { ?>
            <b>😱<b>";
        <?php } else { ?>
            <b>💃<b>
        <?php } ?>


        <!-- Esto es una buena practica (usar sintaxis de :) -->
        <?php if ($hablar_de_bruno): ?>
            <b>😱<b>";
        <?php  else:  ?>
            <b>💃<b>
        <?php endif; ?>
</body>
</html>