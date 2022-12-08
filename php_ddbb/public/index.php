<?php

require("../vendor/autoload.php");

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use Router\RouterHandler;

// si no esta definida $slug. .htaccess esta pasando la variable
$slug = $_GET["slug"] ?? "";
// Obtener la URL separando los segmentos de la direccion
$slug = explode("/", $slug);

echo "<pre>";   var_dump($slug);    echo "</pre>";

// en el primer segmento es igual a nada, estan accediendo a la raiz
// entonces el resource valdra / la raiz y si no el valor en la posicion 0
$resource = $slug[0] == "" ? "/" : $slug[0];
// el slug en la posicion uno existe asignalo, en caso contrario null
// ?? verifica si existe, si existe lo asigna o si no valdra null
$id = $slug[1] ?? null;

// incomes/1

// Intancia del router

//$router = new RouterHandler();

switch ($resource) {

    case '/':
        echo "Estás en la front page";
        break;

    case "incomes":
        echo "Incomes";

        break;

    case "withdrawals":
        echo "Withdrawals";

        break;
    
    default:
        echo "404 Not Found";
        break;

}