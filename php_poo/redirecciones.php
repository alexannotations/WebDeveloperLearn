<?php
/** la funcion header
 * https://www.php.net/manual/es/function.header
 * 
 * En el modelo cliente/servidor es comun querer enviar informacion extra
 * (autenticacion, control de cookies, control de cache, etc)
 * 
 * Los encabezados siempre deben ser enviados antes de enviar el cuerpo de la peticion
 * 
 * location: hace una redireccion
 * 
 */
echo "Redirigiendo";


header("location: http://example.com");

/** Se recomienda colocar exit; o die(); para evitar que los robots accedan a la pagina.
 * al hacer caso omizo a la instruccion de redireccion header()
 * evitando que se cargue mas informacion
 */
exit;