<?php

namespace App\Controllers;

use DBC\PDO\Connection;

class WithdrawalsController {

        private $connection;

    /**
     * Se crea in metodo constructor para que cuando se instancie la clase
     * tenga disponible tambien la conexion
     */
    public function __construct(){
        $this->connection=Connection::getInstance()->get_database_instance();
    }


    /**
     * Muestra una lista de este recurso
     */
    public function index() {
        // observe que selecciono todo
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
        $stmt->execute();

        // fetchAll para sacar datos de columnas
        // observe que devuelve el arreglo con indices numericos y asociativos
        // Devuelve la lista de todas las filas que existen en la tabla withdrawals
        // Recorremos las filas devueltas con fetchAll para devolverlas en forma de arreglo

        $results = $stmt->fetchAll();
                //var_dump($stmt);
                //var_dump($results);
        // Recorremos el array
        foreach($results as $result)
            echo "Gastaste " . $result["amount"] . " USD en: " . $result["description"] . PHP_EOL;

            // otro metodo fetch() trae una sola fila
/*        // Esto es usando Fetch Column, observe que selecciono dos columnas
        $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
        $stmt->execute();
        // se pasa un flag que devuelve la columna con el indice indicado basado en 0
        // el cero filtra y equivale a amount. Y unicamente se trae una columna con el tipo de dato
        $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
        //var_dump($results);
        foreach($results as $result)
            echo "Gastaste $result USD" . PHP_EOL; 
*/
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {
/*
        // ejecuta la consulta con $this->connection->exec, y devuelve el numero de filas afectadas
        $affected_rows = $this->connection->exec("INSERT INTO
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
        $stmt = $this->connection->prepare("INSERT INTO
            withdrawals (payment_method, type, date, amount, description)
            VALUES (
                :payment_method,
                :type,
                :date,
                :amount,
                :description
        )");

        // bindparams es una alternativa para ligas los datos que nos da el usuario con la consulta sql
        // $stmt es la variable que mantiene la consulta preparada,
        // observe que el metodo se escribe diferente a mysqli bind_param
        // Recibe primero el nombre del placeholder y despues el valor
        // sin : porque desde el index se manda sin ellos
/*        $stmt->bindParam(":payment_method", $data["payment_method"]);
        $stmt->bindParam(":type", $data["type"]);
        $stmt->bindParam(":date", $data["date"]);
        $stmt->bindParam(":amount", $data["amount"]);
        $stmt->bindParam(":description", $data["description"]);

        // con bindParam se puede sobreescribir el valor ligado, se esta cambiando la descripcion enviada por index
        $data["description"]="Compre cosas para mi 💞";
        $stmt->execute(); 
*/
        // con bind value
        // $stmt->bindValue(":payment_method", $data["payment_method"]);
        // $stmt->bindValue(":type", $data["type"]);
        // $stmt->bindValue(":date", $data["date"]);
        // $stmt->bindValue(":amount", $data["amount"]);
        // $stmt->bindValue(":description", $data["description"]);

        // con bindValue no se puede sobreescribir el valor ligado, pese a que se cambie
        //$data["description"]="Compre cosas para mi 💕";
        // con bindvalue() no se envia ningun parametro
        //$stmt->execute();

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