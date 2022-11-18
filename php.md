# php

## Sintaxis basica


### Variables
```php
$mivariable='variable';
$variable='valor';
echo $mivariable;   // variable
echo $$mivariable;    // valor
```
### Asignacion
```
=
=>
```


### Comparacion
 comprobación de identidad ```===``` (valor y tipo)
 comprobación de igualdad débil ```==``` (valor)


### Aritmetica
```+```
```-```
```*```
```/```
```%```
```**```

### Operadores

[operador splat en PHP (token ...)](https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list)
Denota que la función acepta un número variable de argumentos.
Los argumentos serán pasados a la variable dada como un array.
```
...
data(...$_POST)
```


### Estructuras de control
el constructor foreach permite iterar arrays
```php
$array = [1,2,3,4,5];
foreach ($array as $valor)  
{
    echo "{$indice} => {$valor}";
}
foreach ($array as $indice => $valor) 
{
    echo "{$indice} => {$valor}";
}
```
