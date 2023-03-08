<?php
echo "<pre>";
// obtener la zona horaria por defecto
echo date_default_timezone_get();

//Establecer la zona horaria
date_default_timezone_set("America/Mexico_City");
echo date_default_timezone_get();

//Obtener la fecha actual
$now_string = date("Y-m-d H:i:s");    # devuelve un string
echo $now_string;

$now_object=date_create();      # object DateTime   new DateTime();


//strtotime transforma una cadena de texto a formato unix time
echo strtotime($now_string);    # considere que se debe usar un formato valido

# acepta varios formatos
echo strtotime("17 April 2020");
echo strtotime("+1 week");
echo strtotime("+1 day");
echo strtotime("next Monday");
echo strtotime("last Wednesday");


# mostrar la fecha del ultimo miercoles
$unix_time_last_wednesday = strtotime("last Wednesday");
echo date("Y-m-d H:i:s", $unix_time_last_wednesday);


// Fechas inmutables, un valor que no se puede modificar
$date_inmutable = new DateTimeImmutable();


// Diferencia de tiempo

# calcula la edad de una persona que nacio antes del unix time
$today = date_create();     # new DateTime();
$dateBirthday = DateTime::createFromFormat("j F Y", "1 April 1960");    # :DateTime
$interval=$dateBirthday->diff($today);                                  # :DateInterval
echo $interval->format("tiene %y años");


// Crear fecha desde un formato dado
$dateNew = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
echo $dateNew->format("Y-m-d H:i:s");


// Modificar una fecha
$dateModified = new DateTime();
$dateModified->modify("-1 year");
echo $dateModified->format("Y-m-d");

$dateModified->modify("+1 day +2 months");
echo $dateModified->format("Y-m-d");
