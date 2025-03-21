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
 * Se levantan dos servidores:
 * - Servidor de autenticación
 * ``` php -S localhost:8001 auth_server.php ```
 * 
 * - Servidor de recursos
 * ``` php -S localhost:8000 router.php ```		Considere el require en server.php
 * 
 * 
 * Solicitamos un (recurso) token valido al servidor de autenticación:
 * ``` curl http://localhost:8001 -X "POST" -H "X-Client-Id: <UID>" -H "X-Secret: <Frase a generar hash>" ```
 * ``` curl http://localhost:8001 -X "POST" -H "X-Client-Id: 1" -H "X-Secret: SuperSecreto!" ```
 * 
 * Pedido al servidor de recursos:
 * ``` curl http://localhost:8000/books -H "X-Token: <hash de la frase>" ```
 * ``` curl http://localhost:8000/books -H "X-Token: 312667e52e9e39a69495b1b3522489901c22617" ```
 * 
 */


echo 'Autenticación Access Token ';
 // validamos que el servidor reciba un token del cliente
if ( !array_key_exists( 'HTTP_X_TOKEN', $_SERVER ) )
{
	echo 'El cliente no envió el token';
	die;
}

// Hacemos una petición al servidor de autenticación para verificar que el token sea válido
$url = 'http://localhost:8001';

// llamada via CURL al servidor de autenticación para validar el token
$ch = curl_init( $url );
// informamos que vamos a enviar un header personalizado (el token)
// en la linea de comandos se hace con el modificador -H
curl_setopt( 
    $ch, 
    CURLOPT_HTTPHEADER, 
    [
	    "X-Token: {$_SERVER['HTTP_X_TOKEN']}",
    ]
);
// informamos que queremos recibir una respuesta (obtenemos el resultado de la petición)
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# el servidor al que estamos llamando esta haciendo otro llamado al servidor de autenticación
// ejecutamos la petición
$ret = curl_exec( $ch );

// verificamos si hubo un error en la petición
if ( curl_errno($ch) != 0 )
{
	echo 'Error: '.curl_error($ch);
	http_response_code( 500 );
	die ( curl_error($ch) );
}

if ( $ret !== 'true' ) 
{
	echo 'El usuario no ha sido correctamente autenticado';
	http_response_code( 403 );
	die;
}

