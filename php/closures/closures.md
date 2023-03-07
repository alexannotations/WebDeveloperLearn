# Closures

- Son conocidos como funciones anónimas, permiten la creación de funciones que no tienen un nombre específico.
- Pueden ser asignadas a funciones, variables, o usadas como parámetros y valores de retorno.
- Las variables pueden contener cualquier tipo de dato como enteros, cadenas y objetos, pero también pueden contener funciones.
- Para usar variables del scope superior en los closures, es necesario usar el `use` y entre paréntesis las variables.

```php
$closure = function(){
    echo 'Hello!';
};
$closure();
```


```php
$jobs= Job::all();
int $limitMonths=15;

$filterFunction = function (array $job) use ($limitMonths){
    return $job['months'] >= $limitMonths;
}

$jobs= array_filter($jobs->toArray(),$filterFunction);
```


# Type Hinting

Type Hinting nos permite especificar el tipo de los parámetros que recibe una función y el tipo de los parámetros de retorno de esa función. Valido sólo desde la version php7.1, pudiéndose usar para clases, interfaces y tipos escalares.

