<?php

// autocarga de composer
namespace App\Enums;

// enum es muy similar a una clase para declararla
// se usan tipos de datos escalares de tipo int
enum IncomeTypeEnum: int {

    case Salary = 1;
    case Refund = 2;

}