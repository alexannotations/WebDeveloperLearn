[DesignPatternsPHP
](https://github.com/DesignPatternsPHP/DesignPatternsPHP)

## command

Un patrón de comportamiento.
Se utiliza cuando existe alguna operación especialmente compleja que debe ser realizada desde diferentes puntos de entrada (web o cli). Es decir se agrupa la funcionalidad en una clase para llevar a cabo la tarea.

```php
interface CommandInterface{
    // este comando se convierte en un wrapper
    public function execute();
}
```
