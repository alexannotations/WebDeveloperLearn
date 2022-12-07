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

/*        // esto es una consulta plana a la base de datos (peligro de sql injection)
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
*/
        // Para evitar el sqlinjection se prepara previamente la consulta 
        //(observe que cambio el metodo query por prepare y se agregaron signos en lugar de valores para el filtrado
        // el metodo devuelve un objeto que tiene un metodo llamado bind_param()
        // usualmente la variable se llama $stmt
        $stmt=$connection->prepare("INSERT INTO 
        incomes (payment_method, type, date, amount, description) 
            VALUES(?,?,?,?,?);");

        // observe que no estan aun asignadas las variables, se asignan mas abajo
        // el metodo depura los datos a insertar segun su tipo definido por una letra en el primer argumento
        // mysqli_stmt_bind_param()
        $stmt->bind_param("iisds",$payment_method, $type, $date, $amount, $description);
        // aqui se asignan los valores
        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

        // ejecuta la consulta
        $stmt->execute();

        echo "Se han insertado {$stmt->affected_rows} filas en la base de datos";
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