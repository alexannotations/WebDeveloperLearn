<?php
# localhost/WebDeveloperLearn/cookies_sesiones/sesiones/login.php?user=1

session_start();

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

//echo "El usuario elegido es: ".$users[$user]["username"];

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];