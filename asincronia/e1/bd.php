<?php
$table = "CREATE TABLE `empleados` (
    `nombre` varchar(100),
    `apellido` varchar(100),
    `web` varchar(100)
  ) CHARSET=utf8mb4;
  ";

$bd_host="localhost";
$bd_usuario="root";
$bd_password="";
$bd_base="test";

$con= mysqli_connect($bd_host,$bd_usuario,$bd_password,$bd_base);
