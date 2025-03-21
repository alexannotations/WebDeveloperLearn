<?php

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 
# Autenticación HTTP básica 
# dentro del archivo server.php
# dentro de los encabezados HTTP
# ``` curl http://localhost:8000/books -v -u admin:admin ``` 
# ``` curl http://admin:admin@localhost:8000/books ``` 

$user = array_key_exists('PHP_AUTH_USER', $_SERVER) ? $_SERVER['PHP_AUTH_USER'] : '';
$pwd = array_key_exists('PHP_AUTH_PW', $_SERVER) ? $_SERVER['PHP_AUTH_PW'] : '';

if ($user !== 'admin' || $pwd !== 'admin') {
    // Autenticación requerida
    header('WWW-Authenticate: Basic realm="Acceso denegado"');
    http_response_code(401);
    die;
}

 
// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

