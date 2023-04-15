# principios SOLID

SOLID nos habla de 5 principios básicos de la programación orientada a objetos. Estos 5 principios ayudan a tener un código más claro y más limpio aunque no son fáciles de implementar en un principio. La recomendación es que sigas intentando hacerlo, que sigas leyendo, entrenando y preparándote y todo va a ir saliendo de manera natural.

SOLID:

__Single responsibility principle o principio de responsabilidad única__. Quiere decir que cuando crees una clase, ésta sólo debe tener un propósito que debe ser sencillo; el no hacerlo hace que nuestro código se pueda ver afectado ya que una sola cosa controla muchas otras.
__Open-closed principle o principio “abierto-cerrado”__. Trata de explicarnos que deberíamos programar nuestras clases pensando que sean abiertas a la extensión pero cerradas a la modificación. Debemos tratar que nuestras clases estén listas para ser heredadas o extendidas pero no deba ser necesario modificar el código interno.
__Liskov substitution principle o principio de sustitución de Liskov__. Nos dice que cuando tenemos una clase padre y creamos clases hijas, en las partes en las que usemos nuestra clase padre, deberíamos ser capaces de usar nuestras clases hijas. Las clases hijas deben poder funcionar con lo que funcionaba la clase padre.
__Interface segregation principle o segregación de interfaces__. Dice que no debemos implementar o tener interfaces que incluyan métodos o cosas que la clase no necesita.
__Dependency inversion principle o inversión de dependencias__. Trata de desacoplar nuestro código; en lugar de crear clases internamente, vamos a inyectarlas o agregarlas. La inyección de dependencias se usa mucho.


## SOLID a profundidad

Cómo se aplica esto en PHP:
Vamos a comenzar con un ejemplo de código que claramente rompe estos principios de programación y buscaremos la forma de repararlo:
```php
class Reporter {
	public function getExpensesReport($idReport) {
		$expenses = $this->queryDBToGetExpenses($idReport);
		return $this->renderHTML($expenses);
}

… // El código de las funciones va aquí
}
```
En este ejemplo, aunque aparentemente el código no luce tan mal, en realidad estamos violando dos veces el principio de responsabilidad única. Imagina que queremos cambiar la forma en la que se realiza esta consulta a la DB (Data Base o Base de Datos), o queremos cambiar la forma en la que se muestra el HTML del reporte, el tener al menos dos razones tan diferentes para modificar esta clase, nos indica que realmente estamos violando este principio.
Ahora cambiemos el código para ver cómo podríamos solucionar este problema:
```php
class ExpensesRepository {
	public function getExpensesForReport() {
		// Aqui va la consulta  a la DB
    }
}

class ExpensesReportHTMLFormatter {
	public function renderHTML($expenses) {
		// Aquí va el código que crea el código HTML
    }
}

class Reporter {
	private $repository;
	private $formatter;

	public function __construct() {
		$this->repository = new ExpensesRepository();
		$this->formatter = new ExpensesReportHTMLFormatter();
    }

    public function getExpensesReport($idReport) {
        $expenses = $this->repository->getExpensesForReport($idReport);
        return $this->formatter->renderHTML($expenses);
    }
}
```

Ahora este código es un poco mejor, sin embargo estamos rompiendo claramente otro de los cinco principios SOLID: La Inversion de Control, este principio nos dice que debemos evitar que se dependa de clases concretas y tratar de usar siempre abstracciones para solucionar estas dependencias.

En este caso claramente podemos ver que la clase Reporter, depende directamente de la clase ExpensesRepository y de la clase ExpensesReportHTMLFormatter, esto hace que nuestro código esté muy acoplado y nos complique el mantener y extender la funcionalidad del mismo, imagina ahora que queremos imprimir el reporte también en JSON, en ese caso tendríamos que modificar el código existente para cambiar las cosas.

En este caso, el primer paso para invertir el control será evitar crear instancias de otras clases dentro de nuestra Reporter e inyectar esas dependencias a través de nuestro constructor:
```php
class Reporter {
	private $repository;
	private $formatter;

	public function __construct(ExpensesRepository $repo, ExpensesReportHTMLFormatter $formatter) {
		$this->repository = $repo;
		$this->formatter = $formatter;
    }

    public function getExpensesReport($idReport) {
		$expenses = $this->repository->getExpensesForReport($idReport);
		return $this->formatter->renderHTML($expenses);
    }
}
```

Esto ya es un paso inicial para cambiar la forma en la que funciona el código, sin embargo, aun no resolvemos cómo haremos para poder regresar los valores usando otro formato. Bueno, para esto lo que nos recomienda el principio de Inversion de Control es no depender de clases concretas y en lugar de eso depender de abstracciones.

Para este ejemplo lo que podemos hacer es crear una interfaz que sirva como contrato de la forma en la que se imprime un reporte e implementarla en todas las clases que queramos usar para lo mismo:
```php
interface ExpensesReportFormatterInterface {
	public function render($expenses);
}
```

Y esta interfaz la podremos implementar en diferentes clases:
```php
class ExpensesReportHTMLFormatter implements ExpensesReportFormatterInterface {
	public function render($expenses) {
		// Aquí va el código que crea el código HTML
    }
}

class ExpensesReportJSONFormatter implements ExpensesReportFormatterInterface {
	public function render($expenses) {
		// Aquí va el código que crea el código JSON
    }
}
```

Y ahora podemos cambiar el constructor de nuestra clase para usar la abstracción en lugar de la clase concreta:
```php
class Reporter {
	private $repository;
	private $formatter;

	public function __construct(ExpensesRepository $repo, ExpensesReportFormatterInterface $formatter) {
		$this->repository = $repo;
		$this->formatter = $formatter;
    }

    public function getExpensesReport($idReport) {
		$expenses = $this->repository->getExpensesForReport($idReport);
		return $this->formatter->render($expenses);
    }
}
```

De esta forma, ahora cuando queramos cambiar el formato de salida, lo único que tenemos que hacer es inyectar el formatter que queremos y nuestra aplicación funcionará de una forma mucho más clara y orientada a objetos.

Esto es solo un ejemplo de cómo trabajar usando los principios SOLID recuerda que nunca debes considerar nada como simples reglas a seguir, siempre sigue practicando y trata de entender el porqué estos principios te pueden ayudar con tu código, es posible que al principio no sea tan clara la forma de implementarlos en tu código, pero te aseguro que si los tienes en mente y sigues practicando, con el tiempo serán conceptos que podrás implementar de una forma mucho más natural y sencilla.

