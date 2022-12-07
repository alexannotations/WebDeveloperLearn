<?php

namespace App\Controllers;

use DBC\PDO\Connection;

class IncomesController{

    private $connection;

    public function __construct(){
        $this->connection=Connection::getInstance()->get_database_instance();
    }
    
    /**
     * Muestra una lista de este 
     * hack: consultando varios datos usando fetch()
     */
    public function index() {
        
        $stmt = $this->connection->prepare(
            "SELECT * FROM incomes"
        );
        $stmt->execute();   // devuelve todas las filas de la base de datos

        // bindColumn sirve para las columnas de seleccion
        // ligamos las columnas de la DB a una variable
        // bindColumn asigna la informacion, por lo que no genera error
        // pese a que lo indica, porque las variables no estan definidas
        // por cada fila que exista se define
        $stmt->bindColumn("amount",$amount);
        $stmt->bindColumn("description",$description);

        // mientras hayan filas por ser recorridas, devolvera esa fila
        // y si hay una siguiente fila, la cargara automaticamente
        // con bindColumn se puede eliminar $row
        while ($row = $stmt->fetch()) {
            // usamos un arreglo, pero se puede usar bindColumn
            //echo "Ganaste " . $row["amount"] . " USD en: " . $row["description"] . PHP_EOL;
            echo "Ganaste $amount USD por: $description" . PHP_EOL;

        }
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    
    /**
     * Guarda un nuevo recurso en la base de datos
     * Al cambiar el controlador de DB de MySQLi a PDO, 
     * el metodo deja de funcionar, por lo que se comento
     */
    public function store($data) {
        $stmt = $this->connection->prepare(
            "INSERT INTO incomes 
                (payment_method, type, date, amount, description) 
                    VALUES (
                        :payment_method, 
                        :type, 
                        :date, 
                        :amount, 
                        :description)"
            );
            // se asocia cada placeholder con su respectivo valor
        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $stmt->execute();
//         // observe que se encadenan ambos metodos para obtener la instancia de la conexion; 
//         // el estatico para crear la instancia, y obtener la conexion
//         // evitando el $connection = new Connection()->get_database_instance();
//         // objetivo del patron singleton
//         $connection = Connection::getInstance()->get_database_instance();

// /*        // esto es una consulta plana a la base de datos (peligro de sql injection)
//         // observe las comillas en date y description para pasarlo como string
//         $connection->query("INSERT INTO 
//             incomes (payment_method, type, date, amount, description) 
//                 VALUES(
//                     {$data['payment_method']},
//                     {$data['type']},
//                     '{$data['date']}',
//                     {$data['amount']},
//                     '{$data['description']}'
//         );");
// */
//         // Para evitar el sqlinjection se prepara previamente la consulta 
//         //(observe que cambio el metodo query por prepare y se agregaron signos en lugar de valores para el filtrado
//         // el metodo devuelve un objeto que tiene un metodo llamado bind_param()
//         // usualmente la variable se llama $stmt
//         $stmt=$connection->prepare("INSERT INTO 
//         incomes (payment_method, type, date, amount, description) 
//             VALUES(?,?,?,?,?);");

//         // observe que no estan aun asignadas las variables, se asignan mas abajo
//         // el metodo depura los datos a insertar segun su tipo definido por una letra en el primer argumento
//         // mysqli_stmt_bind_param()
//         $stmt->bind_param("iisds",$payment_method, $type, $date, $amount, $description);
//         // aqui se asignan los valores
//         $payment_method = $data['payment_method'];
//         $type = $data['type'];
//         $date = $data['date'];
//         $amount = $data['amount'];
//         $description = $data['description'];

//         // ejecuta la consulta
//         $stmt->execute();

//         echo "Se han insertado {$stmt->affected_rows} filas en la base de datos";
    }


    /**
     * Muestra un único recurso especificado
     */
    public function show() {}

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update() {}

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id) {
        // al ser una consulta riesgosa para que no se ejecuten las consultas instantaneamente
        $this->connection->beginTransaction();

        // Esto no funciona en MySQL, se ejecuta, sin importar si hay una transaction en proceso
        // Hay ciertas consultas que no funcionan con beginTransaction
        // $this->connection->beginTransaction();
        // $this->connection->exec("DROP TABLE incomes_test");
        // $this->pdo->rollBack();
        // $this->pdo->commit();

        $stmt = $this->connection->prepare(
            "DELETE FROM incomes WHERE id = :id"
        );
        $stmt->execute([
            ":id" => $id
        ]);

        $sure = readline("¿De verdad quieres eliminar este registro? ");

        if (!$sure == "no") {
            echo ("borrando");
            $this->connection->rollBack(); // revertimos la transaction
        } else {
            echo ("deshacer");
            $this->connection->commit(); // confirmamos la transaction
        }

    }
}