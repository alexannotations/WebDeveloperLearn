<?php
/**
 * # Autenticación Access Token (accesos temporales)
 * Es más compleja, pero es la forma más segura. 
 * El servidor al que le van a hacer las consultas se va a partir en dos:
 * 
 * Uno se va a encargar específicamente de la autenticación. (auth_server.php)
 * El otro se va a encargar de desplegar los recursos de la API.
 * 
 * El flujo de la petición es la siguiente:
 * - El usuario hace una petición al servidor de autenticación para pedir un token.
 * - El servidor le devuelve el token.
 * - El usuario hace una petición al servidor para pedir recursos de la API.
 * - El servidor con los recursos hace una petición al servidor de autenticación para verificar que el token sea válido.
 * - Una vez verificado el token, el servidor le devuelve los recursos al cliente.
 * 
 * https://auth0.com/docs/secure/tokens/access-tokens
 * 
 * Se levantan dos servidores.
 * ``` php -S localhost:8001 auth_server.php ```
 * Considere el require en server.php
 * ``` php -S localhost:8000 router.php ```
 * 
 * Solicitamos un token valido
 * ``` curl http://localhost:8001 -X 'POST' -H 'X-Client-Id: 1' -H 'X-Secret:Esto es secreto' ```
 * 
 * Pedido al servidor de recursos:
 * ``` curl http://localhost:8000/books -H 'X-Token: 5d0937455b6744.68357201' ```
 * 
 */


 // validamos que exista el token recibido del cliente
if ( !array_key_exists( 'HTTP_X_TOKEN', $_SERVER ) ) {
	die;
}

// Hacemos una petición al servidor de autenticación para verificar que el token sea válido
// En este caso, el servidor de autenticación es el mismo servidor de la API
// $url = 'http://'.$_SERVER['HTTP_HOST'].'/auth_server.php';
$url = 'http://localhost:8001';

// llamada via CURL al servidor de autenticación para validar el token
$ch = curl_init( $url );
// informamos que vamos a enviar un header personalizado (el token)
curl_setopt( 
    $ch, 
    CURLOPT_HTTPHEADER, 
    [
	    "X-Token: {$_SERVER['HTTP_X_TOKEN']}",
    ]
);
// informamos que queremos recibir una respuesta
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
// ejecutamos la petición
$ret = curl_exec( $ch );

// verificamos si hubo un error en la petición
// if($ret !== 'true')
if ( curl_errno($ch) != 0 ) {
	die ( curl_error($ch) );
}

if ( $ret !== 'true' ) {
	http_response_code( 403 );
	die;
}

