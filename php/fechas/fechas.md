# Fechas

[funcion date](https://www.php.net/manual/es/function.date.php)

[Funciones de Fecha/Hora](https://www.php.net/manual/es/ref.datetime.php)

[The DateTime class](https://www.php.net/manual/en/class.datetime.php)

[DateInterval::format](https://www.php.net/manual/es/dateinterval.format.php)

[DateTime::createFromFormat](https://www.php.net/manual/es/datetime.createfromformat.php)

[List of Supported Timezones](https://www.php.net/manual/en/timezones.php)

## Tiempo Unix o Tiempo POSIX 
El tiempo en Unix se mide a partir de 00:00:00 UTC del 1 de enero de 1970. Hay un problema con esta definición, puesto que UTC no existió en su forma actual sino hasta 1972, cuando se establece como referencia 1970-01-01T00:00:00Z.


## Fecha inmutables
La característica curiosa de DateTimeImmutable es que a diferencia de DateTime no se modifica a sí misma sino que nos retorna un nuevo objeto. Por ejemplo si usamos add con DateTime esta modificará la instancia, por el contrario con DateTimeImmutableno se modifica sino que nos da un nuevo objeto para trabajar dejandonos la fecha original


```php

```
