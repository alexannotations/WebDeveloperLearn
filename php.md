# php

## Sintaxis basica

### Comillas
```''```     Comillas simples
```""```     Comillas dobles
```\```     Caracter de escape backslash
```\'```    Comilla simple en string con caracter de escape 

```php
echo 'Un texto de una linea
varias lineas
comilla simple \' backslash\\ continuando con mas texto
$variable que se muestra tal cual <br>';

// observe la concatenacion de variables
$name='Lex';
echo "Mi nombre es $name <br>";
echo 'Mi nombre es' . $name;

// con arrays
$courses=[
    'backend'=>[
        'PHP',
        'Lavarel'
    ]
];
echo "{$courses['backend'][0]}"; // cuando una estructura es compleja necesitamos usar llaves

// Se pueden mostrar datos mas complejos 
class User{
    public $name='Lex';
}

$user=new User;     // objeto de User
// para ver el objeto
echo "$user->name quiere 💗"

// variables variables, se accede a los datos
$teacher='karen';
$karen='profesor de php';
echo "$teacher es ${$teacher}";

// en una funcion
function getTeacher()
{
    return 'teacher';
}
$teacher='Alex';
echo "${getTeacher()} enseña";
echo "{${getTeacher()}} enseña";
```

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


## Mostrar errores
```php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
```

## Extraccion de datos
```php
$data='Estudio PHP';
echo $data[0];  // extraer un caracter
echo ($data[0]);    // ya no hay soporte para la otra sintaxis {}

$post='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam ducimus aut vel quasi magnam non aperiam. Maxime reiciendis fugit quisquam dolorem iure deserunt a voluptatem, ab aspernatur illum minima esse?';
$extract=substr($post,0,20);
echo "$extract... [ver mas]";

// El primer parametro define que esta separando los elementos
$dataa='javascript, php, lavarel';  // campo tags
$tags=explode(', ',$dataa); // crea un array de un string
var_dump($tags); // array

$courses=['javascript', 'php', 'lavarel'];
echo implode(', ',$courses); // crea un string de un arrray

// eliminar espacios iniciales y finales
$course="   Curso de PHP   ";
$course=trim($course);  // ltrim() y rtrim(), quita solo los espacios del lado indicado
echo "<pre>";
echo "Quiero aprender $course, y otro curso";


```

