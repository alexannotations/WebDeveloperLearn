
# Patrones de diseño
[DesignPatternsPHP
](https://github.com/DesignPatternsPHP/DesignPatternsPHP)

Estos son soluciones conceptuales que se pueden aplicar a la hora de cómo diseñar tus clases. Y existen 3 tipos de patrones:

- __Creación__ → Se encargan de cómo crear nuevas instancias de nuestro objetos.
- __Estructurales__ → Nos dicen cómo debemos estructurar nuestras clases.
- __Comportamiento__ → Nos dicen cómo deben comportase nuestros objetos.
⚠ Esto no se trata de código, sino de ayudas de cómo pensar nuestra aplicaciones.


## Singleton

El patrón Singleton permite restringir la creación de objetos pertenecientes a una clase o al valor de un tipo a un único objeto. Este patrón se puede pensar como un patrón de creación o de comportamiento. La idea consiste en tener un clase que tenga una sola instancia en nuestra aplicación. Usualmente este patrón se utiliza para optimizar recursos.


```php
class Singleton {
    private static $theInstance = null;

    public static function getInstance(){
        if(self::$theInstance === null){
            self::$theInstance = new self();
        }
        return self::$theInstance;
    }

    private function __construct(){
        $this->property=1:
    }
}
```


```javascript
class Singleton{
    private static instance: Singleton

    public static getInstance(): Singleton{
        if(!Singleton.instance){
            Singleton.instance = new Singleton();
        }
        return Songleton.instance;
    }

    private constructor(){  }
}
```


Usualmente se usan en los logs de errores de las aplicaciones, conectores de DB, aplicacion de bloqueo de archivos.
