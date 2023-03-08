<?php
# agrega 5 dias al dia actual, con dos paradigmas

// Por procedimientos / estructurada / funciones
$intervalps = date_interval_create_from_date_string("5 days");
$dateps = date_create();
date_add($dateps, $intervalps);
echo date_format($dateps, "Y-m-d").PHP_EOL;


// POO
$intervalpoo = DateInterval::createFromDateString("5 days");
$datepoo = new DateTime();
$datepoo->add($intervalpoo);
echo $datepoo->format("Y-m-d").PHP_EOL;
