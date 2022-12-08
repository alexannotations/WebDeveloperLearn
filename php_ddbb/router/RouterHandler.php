<?php

namespace Router;

class RouterHandler {

    // metodo de la peticion
    protected $method;
    protected $data;    // informacion que se mande

    public function set_method($method) {
        $this->method = $method;
    }

    public function set_data($data) {
        $this->data = $data;
    }

    // incomes/1
    public function route($controller, $id) {
        // creamos la instancia del controlador
        $resource = new $controller();

        // segun el metodo por el que se haya solicitado el recurso
        switch($this->method) {

            case "get":
                if ($id && $id == "create")
                    $resource->create(); // muestra el formulario para crear un nuevo recurso
                else if($id)
                    $resource->show($id);
                else
                    $resource->index();
                break;

            case "post":
                $resource->store($this->data);
                break;

            case "delete":
                $resource->delete($id);
                break;

        }

    }
    
}