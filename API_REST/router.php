<?php
/**
 * <iniciar el servidor integrado para el ejemplo>
 * ``` php -S localhost:8000 router.php ```
 * 
 * <ver la respuesta enviando la peticion GET (colección)>
 * ``` curl http://localhost:8000/books ```
 * 
 * <ver la respuesta enviando la peticion GET (individual)>
 * ``` curl http://localhost:8000/books/1 ```
 * 
 */

$matches=[];

// echo json_encode( $_SERVER);

// Excepcion para las url principal index.html
if (in_array( $_SERVER["REQUEST_URI"], [ '/index.html', '/', '' ] )) {
    echo file_get_contents( 'index.html' );
    die;
}

if(preg_match('/\/([^\/]+)\/([^\/]+)/',$_SERVER["REQUEST_URI"],$matches)){
    
    $_GET['resource_type']=$matches[1];    
    $_GET['resource_id']=$matches[2];
    error_log(print_r($matches,1));
    require 'server.php';
}
else if(preg_match('/\/([^\/]+)\/?/',$_SERVER["REQUEST_URI"],$matches)){
    // pedido para todos los recursos
    $_GET['resource_type']=$matches[1];        
    error_log(print_r($matches,1));
    require 'server.php';
}
else{

    error_log('No matches');
    http_response_code(404);
}

