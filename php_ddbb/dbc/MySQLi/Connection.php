<?php
namespace Dbc\MySQLi;

class Connection{

    /**
     * Se usa el patron singleton, para asegurarnos 
     * que solo exista una instancia, que es retornada por getInstance()
     */
    private static $instance;
    private $connection;

    // El constructor es privado para que no se puedan crear mas instancias a partir de el
    // sino utilizando el metodo getInstance(), el cual comprueba si ya exite la instancia
    private function __construct(){
        // hacemos la conexion a la base de datos
        $this->make_connection();
    }

    // para obtener la instancia singletoon debemos acceder a esta instancia
    // cuando un metodo es estatico no se requiere la instancia de la clase,
    // solo el nombre de la clase y el metodo
    public static function getInstance(){
        // self se refiere a una propiedad estatica de la misma clase
        // si $instance todavia no es una instancia de mi misma clase 
        // haz la instancia de la clase y asignala en la variable $instance
        // en esta clase self:: es lo mismo que Connection:: 
        if(!self::$instance instanceof self)
            self::$instance=new self();

        return self::$instance;
    }


    // Devuelve la conexion a la DB que ya esta lista
    // no se vuelve a hacer
    public function get_database_instance(){
        return $this->connection;
    }


    // no debe poder llamarse a esta funcion para que se cree una conexion repetidas veces
    // por lo que no regresara $mysqli, en su lugar se asignara a la variable de clase $connection
    // este metodo hace la conexion a la DB y la guarda en $connection
    // la cual se puede obtener con su getter
    private function make_connection(){
/**
 * Estas variables deberian definirse en un archivo .env
 * composer require vlucas/phpdotenv 
 * */
$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

// Forma procedural
//$mysqli = mysqli_connect($server, $username, $password, $database);

// Forma orientada a objetos
// con los namespace genera error, por que la clase mysqli existe de manera global
// para evitar el error del namespace local, se agrega una diagonal invertida al principio de la clase
// que indica que se ocupa el namespace global
$mysqli = new \mysqli($server, $username, $password, $database);

// Comprobar conexión de manera procedural, si la variable no fue definida
/* if (!$mysqli)
    die("Falló la conexión: " . mysqli_connect_error()); */

// Comprobar conexión de manera orientada a objetos
if ($mysqli->connect_errno)
    die("Falló la conexión: {$mysqli->connect_error}");

// Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

//var_dump($setnames);
//var_dump($mysqli);

        // se asigna a la variable de clase, para no crear muchas conexiones
        $this->connection = $mysqli;
    }
}