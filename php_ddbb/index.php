<?php

use App\Controllers\IncomesController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;

// llamar el archivo de autocarga de composer
require("vendor/autoload.php");

$incomes_controller = new IncomesController();

// el metodo store() es el que almacena un nuevo recurso (se hara por terminal)
// normalmente se pasan en forma de arreglos asociativos
$incomes_controller->store([
    /* la DB recibe un entero, 
    por lo que se usan los ENUMS para entenderlos con claridad, 
    pero devolvera un int */
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"), // 2022-06-24 15:06:45
    "amount" => 1000000,
    "description" => "Pago de mi salario por mi arduo y muy bien trabajo :D"
]);

