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

