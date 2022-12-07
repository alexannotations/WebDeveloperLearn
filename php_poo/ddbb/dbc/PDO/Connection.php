<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    // Permite usar caracteres especiales en las consultas
    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();
} catch(PDOException $e){
    die("Connection failed: {$e->getMessage()}");
}

var_dump($setnames);