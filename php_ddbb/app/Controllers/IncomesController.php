<?php

namespace App\Controllers;

use DBC\MySQLi\Connection;

class IncomesController{
    
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
        
        // observe que se encadenan ambos metodos para obtener la instancia de la conexion; 
        // el estatico para crear la instancia, y obtener la conexion
        // evitando el $connection = new Connection()->get_database_instance();
        // objetivo del patron singleton
        $connection = Connection::getInstance()->get_database_instance();

        // esto es una consulta plana a la base de datos
        // observe las comillas en date y description para pasarlo como string
        $connection->query("INSERT INTO 
            incomes (payment_method, type, date, amount, description) 
                VALUES(
                    {$data['payment_method']},
                    {$data['type']},
                    '{$data['date']}',
                    {$data['amount']},
                    '{$data['description']}'
        );");
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