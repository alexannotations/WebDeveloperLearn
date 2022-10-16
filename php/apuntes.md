 WSL: ```sudo service apache2 start``` 
 ```sudo /etc/init.d/apache2 start```

Se usa la etiqueta de apertura para indicar el comienzo del script, la etiqueta de cierre es opcional, a menos que este combinado con HTML, donde si sera obligatorio.
```php
<?php
    // NO funcionan los saltos de linea \n en la consola
    echo '\n salto de linea (recomendable solo en linea de comandos)';
    echo '<br> salto de linea (recomendable para el navegador)';

    // Si funcionan los saltos de linea \n en la consola
    echo "\n salto de linea (recomendable solo en linea de comandos)";
    echo "<br> salto de linea (recomendable para el navegador)";
?>
```

# Debugging en PHP
Para ver las variables, nos ofrece 2 funciones: ```var_dump()``` y ```print_r()```


# Precedencia
https://www.php.net/manual/es/language.operators.precedence.php
La asociatividad indica el orden de ejecucion.
De izquierda indica que primero se ejecuta lo del lado izquierdo
para el lado derecho primero se ejecuta lo del lado derecho, 
y segun el orden de la tabla, más arriba tiene mayor prioridad de precedencia.
Para un orden particular de ejecución use parentesis.
```php
// asociatividad izquierda
// (((1 - 2) - 3) -4)
echo 1 - 2 - 3 -4;

// asociatividad derecha
$c=10;
// ($a = ($b = $c))
$a = $b = $c;
```
