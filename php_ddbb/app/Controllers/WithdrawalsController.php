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

        echo "Se han insertado $affected_rows filas en la base de datos.";
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