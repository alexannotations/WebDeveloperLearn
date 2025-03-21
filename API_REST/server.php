<?php
/**
 * Servidor web que devuelve una colección de recursos
 * 
 * 
 * Para iniciar el servidor integrado para el ejemplo, con URL funcional
 * ``` php -S localhost:8000 server.php ```
 * 
 * Estos ejemplos no pasan por el router
 * Para ver la respuesta enviando la peticion GET (colección)
 * ``` curl http://localhost:8000?resource_type=books | jq ```
 * 
 * Para ver los encabezados
 * ``` curl http://localhost:8000?resource_type=books -v ```
 * Se pueden mostrar unicamente los encabezados si lo redireccionamos a null
 * ``` > /dev/null```
 * 
 * Para ver la respuesta enviando la peticion GET (individual)
 * ``` curl "http://localhost:8000?resource_type=books&resource_id=1" | jq ```
 * ``` curl "http://localhost:8000/books/1" | jq ```
 * 
 * Agregar un nuevo libro
 * ``` curl -X "POST" http://localhost:8000/books -d "{ \"titulo\":\"Nuevo Libro\",\"id_autor\": 1,\"id_genero\": 2}" ```
 * Se pueden mover los libros a un archivo json y enviarlo
 * ``` curl -X "POST" http://localhost:8000/books -d @books.json ```
 * 
 * Actualizar un libro
 * ``` curl -X "PUT" http://localhost:8000/books/1 -d "{ \"titulo\":\"Nuevo Libro\",\"id_autor\": 1,\"id_genero\": 2}" ```
 * 
 * Eliminar un libro
 * ``` curl -X "DELETE" http://localhost:8000/books/1 ```
 * 
 * 
 */

header( 'Content-Type: application/json' );     // Se indica al cliente que lo que recibirá es un json

// Aqui va la autenticación (only one)
// require 'auth_HTTP.php';
// require 'auth_HMAC.php';
// require 'auth_TokenAccess.php';


echo '{"status": "OK. Resources Server"}';

$allowedResourceTypes = [
    'books',
    'authors',
    'genres',
];

// Validamos que el recurso solicitado esté dentro de los tipos permitidos
$resourceType = $_GET['resource_type'];

// validamos que un recurso permitido fue solicitado (dentro del array)
if (!in_array($resourceType, $allowedResourceTypes)) {
    http_response_code(400);
    die;
}

// Defino los recursos
$books = [
    1 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_autor' => 2,
        'id_genero' => 2,
    ],
    2 => [
        'titulo' => 'La Iliada',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
    3 => [
        'titulo' => 'La Odisea',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
];


// Verifica si existe el recurso individual
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';

// generamos la respuesta asumiendo que la petición es correcta
switch(strtoupper($_SERVER['REQUEST_METHOD'])) {
    case 'GET':
        // Obtener datos
        if (empty($resourceId)) {
            echo json_encode($books);   // colección completa
        } else {
            if (array_key_exists($resourceId, $books)) {
                echo json_encode($books[$resourceId]); // libro solicitado
            } else {
                http_response_code(404);    // no encontrado
            }
        }
        
        break;

    case 'POST':
        // Crear un nuevo registro
        $json = file_get_contents('php://input');   // proporciona el contenido completo del cuerpo de la petición en crudo
        $books[] = json_decode($json, true);    // se decodifica el json y se agrega al array
        // array_push($books, json_decode($json, true));    // otra forma de agregar al array
        echo array_keys($books)[count($books)-1];    // se devuelve el id del libro creado
        echo json_encode($books);   // se devuelve la colección completa
        break;

    case 'PUT':
        // Actualizar un registro
        // validamos que el recurso buscado exista
        if (!empty($resourceId) && array_key_exists($resourceId, $books)) {
            $json = file_get_contents('php://input');   // tomamos entrada del usuario cruda
            $books[$resourceId] = json_decode($json, true); // recurso a remplazar
            echo json_encode($books[$resourceId]);
            echo json_encode($books); 
        }
        break;

    case 'DELETE':
        // Eliminar un registro
        if ( !empty($resourceId) && array_key_exists( $resourceId, $books ) ) {
			unset( $books[ $resourceId ] );
		}
        echo json_encode($books);
        break;

    default:
        // Método HTTP no permitido
        http_response_code(405);
        break;
}
