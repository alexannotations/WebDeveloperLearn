# ¿Cuál es la diferencia entre bindParms y bindValue?

La diferencia principal entre _bindParam()_ y _bindValue()_ en PDO radica en cuándo se evalúa el valor de la variable que se está vinculando al marcador de posición en la consulta preparada:



## _bindParam()_ Vincula una referencia a la variable:

__Evaluación__: El valor de la variable se evalúa en el momento en que se llama a ```PDOStatement::execute()```.
__Paso por referencia__: ```bindParam()``` vincula la variable por referencia. Esto significa que si el valor de la variable PHP cambia después de llamar a _bindParam()_ pero antes de llamar a _execute()_, la consulta utilizará el valor actualizado de la variable.
__Uso__: Es útil cuando necesitas ejecutar la misma consulta preparada varias veces con diferentes valores sin tener que volver a vincular cada vez. Simplemente modificas el valor de la variable vinculada antes de cada llamada a _execute()_.

__Sintaxis__:
El segundo argumento de _bindParam()_ debe ser una variable. No puedes pasar un valor literal directamente.

```php
$stmt->bindParam(':nombre', $nombreVariable, PDO::PARAM_STR);
$stmt->bindParam(1, $idVariable, PDO::PARAM_INT); // Para marcadores de posición con signo de interrogación
```





## _bindValue()_ Vincula el valor de la variable:

_Evaluación_: El valor de la variable se evalúa en el momento en que se llama a ```PDOStatement::bindValue()```.
_Paso por valor_: ```bindValue()``` vincula el valor de la variable en ese instante. Si la variable PHP cambia después de llamar a _bindValue()_ pero antes de llamar a _execute()_, la consulta no se verá afectada por el cambio. La consulta utilizará el valor que tenía la variable cuando se llamó a _bindValue()_.
_Uso_:_ Es más adecuado para vincular valores literales o el valor actual de una variable que no se espera que cambie antes de la ejecución de la consulta.

_Sintaxis_:
El segundo argumento de _bindValue()_ puede ser tanto una variable como un valor literal.

```php
$stmt->bindValue(':email', $emailVariable, PDO::PARAM_STR);
$stmt->bindValue(2, 123, PDO::PARAM_INT); // También puedes pasar valores literales
```





| Característica | bindParam()                                    | bindValue()                                      |
|----------------|------------------------------------------------|--------------------------------------------------|
| Evaluación     | Al llamar a `execute()`                        | Al llamar a `bindValue()`                        |
| Paso           | Por referencia (requiere una variable)        | Por valor (acepta variables y valores literales) |
| Comportamiento | Los cambios en la variable antes de `execute()` afectan la consulta. | Los cambios en la variable después de `bindValue()` no afectan la consulta. |
| Casos de uso   | Ejecuciones múltiples con diferentes valores.  | Vincular valores literales o el valor actual de una variable. |



## Ejemplo Ilustrativo
Este ejemplo claramente muestra cómo bindParam utiliza la referencia de la variable al momento de _execute()_, mientras que bindValue utiliza el valor de la variable al momento de _bindValue()_.


```php
<?php
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT :value";
$stmt = $pdo->prepare($sql);

$valor = 1;
$stmt->bindParam(':value', $valor, PDO::PARAM_INT);
echo "Valor antes de ejecutar (bindParam): " . $valor . "\n";
$stmt->execute();
echo "Resultado (bindParam): " . $stmt->fetchColumn() . "\n";

$valor = 2;
echo "Valor antes de la segunda ejecución (bindParam): " . $valor . "\n";
$stmt->execute();
echo "Resultado (bindParam - segunda ejecución): " . $stmt->fetchColumn() . "\n";

echo "---\n";

$sql2 = "SELECT :value";
$stmt2 = $pdo->prepare($sql2);

$valor2 = 1;
$stmt2->bindValue(':value', $valor2, PDO::PARAM_INT);
echo "Valor antes de ejecutar (bindValue): " . $valor2 . "\n";
$stmt2->execute();
echo "Resultado (bindValue): " . $stmt2->fetchColumn() . "\n";

$valor2 = 2;
echo "Valor antes de la segunda ejecución (bindValue): " . $valor2 . "\n";
$stmt2->execute();
echo "Resultado (bindValue - segunda ejecución): " . $stmt2->fetchColumn() . "\n";

$stmt = null;
$stmt2 = null;
$pdo = null;
?>
```

