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



# https://www.w3.org/wiki/CORS_Enabled#What_is_CORS_about.3F
header("Access-Control-Allow-Origin: *");   // Permite que cualquier origen (dominio) acceda a los recursos.
header("Access-Control-Allow-Credentials: true");   // Permite el uso de credenciales (como cookies) en las solicitudes
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");  // Especifica qué encabezados HTTP pueden ser utilizados durante la solicitud.
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");    // Especifica los métodos HTTP permitidos (PUT, POST, GET, OPTIONS, DELETE).
header("Content-Type: application/json");     // Se indica al cliente que lo que recibirá es un json


// Aqui va la autenticación (only one)
// require 'auth_HTTP.php';
// require 'auth_HMAC.php';
// require 'auth_TokenAccess.php';


// echo '{"status": "OK. Resources Server"}';

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
    header( 'Status-Code: 400' );
    echo json_encode(['error' => "$resourceType is un unkown",]);
    die;
}

// Función para leer los datos del archivo JSON
function readData($filename) {
    if (!file_exists($filename)) {
        return [];
    }
    $json = file_get_contents($filename);
    return json_decode($json, true);
}

// Función para escribir los datos en el archivo JSON
function writeData($filename, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filename, $json);
}


// // Defino los recursos
$filename = 'books.json';
$books = readData($filename);
// $books = [
//     1 => [
//         'titulo' => 'Lo que el viento se llevo',
//         'id_autor' => 2,
//         'id_genero' => 2,
//     ],
//     2 => [
//         'titulo' => 'La Iliada',
//         'id_autor' => 1,
//         'id_genero' => 1,
//     ],
//     3 => [
//         'titulo' => 'La Odisea',
//         'id_autor' => 1,
//         'id_genero' => 1,
//     ],
// ];



// Verifica si existe el recurso individual
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';
$method = $_SERVER['REQUEST_METHOD'];

// generamos la respuesta asumiendo que la petición es correcta
switch(strtoupper($method)) {
    case 'GET':
        // Obtener datos
        if (empty($resourceId)) {
            echo json_encode($books);   // colección completa
        } else {
            if (array_key_exists($resourceId, $books)) {
                echo json_encode($books[$resourceId]); // libro solicitado
            } else {
                http_response_code(404);    // no encontrado
                header( 'Status-Code: 404' );
                echo json_encode(['error' => $resourceType.' not yet implemented',]);
                die;
            }
        }
        
        break;

    case 'POST':
        // Crear un nuevo registro
        $json = file_get_contents('php://input');   // proporciona el contenido completo del cuerpo de la petición en crudo
        $newBook = json_decode($json, true);    // se decodifica el json
        $books[] = $newBook;    // se agrega al array
        writeData($filename, $books);   // se guarda en el archivo JSON
        // array_push($books, $newBook);    // otra forma de agregar al array
        // echo array_keys($books)[count($books)-1];    // se devuelve el id del libro creado
        echo json_encode($books);   // se devuelve la colección completa
        break;

    case 'PUT':
        // Actualizar un registro
        // validamos que el recurso buscado exista
        if (!empty($resourceId) && array_key_exists($resourceId, $books)) {
            $json = file_get_contents('php://input');   // tomamos entrada del usuario cruda
            $books[$resourceId] = json_decode($json, true); // recurso a remplazar
            writeData($filename, $books);   // se guarda en el archivo JSON
            echo json_encode($books[$resourceId]);
            echo json_encode($books); 
        }
        break;

    case 'DELETE':
        // Eliminar un registro
        if ( !empty($resourceId) && array_key_exists( $resourceId, $books ) ) {
			unset( $books[ $resourceId ] );
            writeData($filename, $books);   // se guarda en el archivo JSON
		}
        echo json_encode($books);
        break;

    default:
        // Método HTTP no permitido
        http_response_code(405);
        break;
}
