<?php

namespace Dbc\PDO;

class Connection{

    private static $instance;
    private $connection;
    

    private function __construct(){
        $this->make_connection();
    }


    public static function getInstance():Connection{
        if(!self::$instance instanceof self)
            self::$instance=new self();

        return self::$instance;
    }


    public function get_database_instance(){
        return $this->connection;
    }


    private function make_connection(){
        $serverdb = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "";

        try {
            $connection = new \PDO("mysql:host=$serverdb;dbname=$database", $username, $password);
            $setnames = $connection->prepare("SET NAMES 'utf8'");
            $setnames->execute();
        } catch(\PDOException $e){
            die("Connection failed: {$e->getMessage()}");
        }

        //var_dump($setnames);
        $this->connection = $connection;
        }
}
