<?php
# localhost/WebDeveloperLearn/cookies_sesiones/sesiones/login.php?user=1

// Iniciar una nueva sesión o reanudar la existente
session_start();


// arreglo de usuarios (para solventar la tabla de user en DB)
// con fines de explicacion
$users = [
    array(
        "username" => "Lex",
        "email" => "r@noesmiemail.com"
    ),
    array(
        "username" => "Susy",
        "email" => "m@noesmiemail.com"
    )
];

$user = $_GET["user"] ?? "";    // obtiene informacion a traves de la url

//  $users es el array, $user es el index del array, y username es la key
echo "El usuario elegido es: ".$users[$user]["username"];

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

echo "<pre>";
var_dump(session_name());
var_dump($_SESSION);
?>