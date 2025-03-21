<?php

# Autenticación HMAC
# para utilizar la autenticación HMAC se debe enviar un hash en los encabezados de la petición
# ``` curl http://localhost:8000/books -H "X-HASH: <hash del script generate_hash.php>" -H "X-UID: <uid>" -H "X-TIMESTAMP: <timestamp del script generate_hash.php>" ```
# ``` curl http://localhost:8000/books -H "X-HASH: 24002c925bb88a0b9dd48eec262bdd5805ec5dd" -H "X-UID: 1" -H "X-TIMESTAMP: 1742411690" ```
if (
    # verifica que existan los encabezados no estandard
    !array_key_exists('HTTP_X_HASH', $_SERVER) ||   /* hash recibido */
    !array_key_exists('HTTP_X_TIMESTAMP', $_SERVER) ||
    !array_key_exists('HTTP_X_UID', $_SERVER)
) {
    echo 'No autorizado';
    die;
}
    list($hash, $uid, $timestamp) = [
        $_SERVER['HTTP_X_HASH'],
        $_SERVER['HTTP_X_UID'],
        $_SERVER['HTTP_X_TIMESTAMP'],
    ];
    echo "{\"UID\": ".$uid.",\"TIME\": ".$timestamp.",\"HASH\": \"".$hash."\"}";

    // clave que solo conoce el servidor del cliente
    $secret = 'No se lo cuentes a nadie!';

    $newHash = sha1($uid.$timestamp.$secret);   // generamos el hash

    // comparamos el hash recibido con el generado
    if ($newHash !== $hash) {
        die;    // no se puede autenticar
    }


