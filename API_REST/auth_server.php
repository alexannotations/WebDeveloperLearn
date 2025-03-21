<?php
/**
 * SERVER RESTFUL
 * Para trabajar en conjunto con el auth_TokenAccess.php
 * Solicitudes de validación del token
 * 
 * ``` php -S localhost:8001 auth_server.php ```
 * 
 * 
 */

$method = strtoupper( $_SERVER['REQUEST_METHOD'] );

// el token deberia ser almacenado en una base de datos y con una caducidad en el tiempo
$token = sha1('SuperSecreto!');     // "312667e52e9e39a69495b1b3522489901c22617"

if ( $method === 'POST' ) {

    if ( !array_key_exists( 'HTTP_X_CLIENT_ID', $_SERVER ) || !array_key_exists( 'HTTP_X_SECRET', $_SERVER ) ) {
        http_response_code( 400 );

        die( 'Faltan parametros' );
    }

    $clientId = $_SERVER['HTTP_X_CLIENT_ID'];
    $secret = $_SERVER['HTTP_X_SECRET'];

    if ( $clientId !== '1' || $secret !== 'SuperSecreto!' ) {
        http_response_code( 403 );

        die ( "No autorizado");
    }

    echo "$token";

} elseif ( $method === 'GET' ) {

    if ( !array_key_exists( 'HTTP_X_TOKEN', $_SERVER ) ) {
        http_response_code( 400 );

        die ( 'Faltan parametros' );
    }

    if ( $_SERVER['HTTP_X_TOKEN'] == $token ) {
        echo 'true';
    } else {
        echo 'false';
    }

} else {

    echo 'false [METHOD]';
}
