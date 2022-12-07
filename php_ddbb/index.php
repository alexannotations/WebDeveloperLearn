<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

// llamar el archivo de autocarga de composer
require("vendor/autoload.php");
/*
// Insercion de datos con PDO
$withdrawal_controller = new WithdrawalsController();
$withdrawal_controller->store([
    // para cada key tambien se puede colocar el bind param :
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 50,
    "description" => "Compré muchos juguetes."
]);
*/

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

// // Index de datos con PDO
// $withdrawal_controller = new WithdrawalsController();
// $withdrawal_controller->index();

// Traemos un solo recurso, por lo que se indica pasandolo por parametro
// $withdrawal_controller = new WithdrawalsController();
// $id = 1;
// $withdrawal_controller->show($id);


// $incomes_controller = new IncomesController();
// $incomes_controller->index();


// Metodo Destroy
$incomes_controller = new IncomesController();
$incomes_controller->destroy(4);
