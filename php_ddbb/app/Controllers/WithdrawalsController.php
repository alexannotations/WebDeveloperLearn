<?php

namespace App\Controllers;

use DBC\PDO\Connection;

class WithdrawalsController {

    /**
     * Muestra una lista de este recurso
     */
    public function index() {}

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {
        // preparo la conexion
        $connection = Connection::getInstance()->get_database_instance();
/*
        // ejecuta la consulta con $connection->exec, y devuelve el numero de filas afectadas
        $affected_rows = $connection->exec("INSERT INTO 
            withdrawals (payment_method, type, date, amount, description) 
            VALUES (
                {$data['payment_method']},
                {$data['type']},
                '{$data['date']}',
                {$data['amount']},
                '{$data['description']}'
        )");
*/
        
        // Para evitar inyeccion SQL tambien preparamos la consulta
        // ahora devuelve un objeto prepared statement
        // aqui para los valores se utilizan placeholders que consisten en poner :nombre_de_variable
        $stmt = $connection->prepare("INSERT INTO 
            withdrawals (payment_method, type, date, amount, description) 
            VALUES (
                :payment_method, 
                :type, 
                :date, 
                :amount, 
                :description
        )");

        // ejecuta la consulta
        // Recibe un arreglo que cada llave corresponde a los placeholders en prepare VALUES
/*        $stmt->execute([
            ":payment_method"=>1,
            ":type"=>2,
            ":date" => date("Y-m-d H:i:s"),
            ":amount" => 20,
            ":description" => "Compré mucha comida para mis queridos y amados gatos."
        ]);
        */
        // O bien se manda toda la variable tipo array que ya tiene las llaves
        $stmt->execute($data);

        echo "Se han insertado {$stmt->rowCount()} filas en la base de datos.";
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
    public function destroy() {}
    
}