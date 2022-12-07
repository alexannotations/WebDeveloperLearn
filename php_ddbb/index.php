<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

// llamar el archivo de autocarga de composer
require("vendor/autoload.php");

// Insercion de datos con PDO
$withdrawal_controller = new WithdrawalsController();
$withdrawal_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 20,
    "description" => "Compré mucha comida para mis queridos y amados michis."
]);


/*
// Insercion de datos con MySQLi
$incomes_controller = new IncomesController();

// el metodo store() es el que almacena un nuevo recurso (se hara por terminal)
// normalmente se pasan en forma de arreglos asociativos
$incomes_controller->store([
    // la DB recibe un entero, 
    //por lo que se usan los ENUMS para entenderlos con claridad, 
    //pero devolvera un int
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"), // 2022-06-24 15:06:45
    "amount" => 1000000,
    "description" => "Pago de mi salario por mi arduo y muy bien trabajo :D"
]);
*/
