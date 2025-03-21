<?php
/**
 * Manejo de errores en RESTful APIs
 * 
 *  ``` php client.php http://localhost:8000/books ```
 * 
 * Considere que el servidor puede estar devolviendo un error el cual permite ver con -v
 *  ``` php -v client.php http://localhost:8000/books/1 ```
 * Pero el cliente no lo este manejando, por ejemplo comente el case 404 y ejecute
 * 
 */


$ch = curl_init($argv[1]);
curl_setopt($ch, CURLOPT_URL, $argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // ver lo que el servidor devuelve (headers)
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

switch ( $httpCode ) {
    case 200:
        echo 'Respuesta correcta';
        break;
    case 400:
        echo 'Pedido incorrecto';
        break;
    case 404:   // Comente este case para ver el error
        echo 'Recurso no encontrado';
        break;
    case 500:
        echo 'Falló el servidor';
        break;
}
