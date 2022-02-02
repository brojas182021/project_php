<?php

class Ruta {

    private $_controllers = array();
    
    public function controllers($controller) {
        $this->_controllers = $controller;
        self::submit();
    }

    public function submit() {
        $uriOutParams = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);//Obtiene la url de la solicitud sin parámetros

        $uri = isset($uriOutParams)?$uriOutParams:"/";// Valida url que no sea vacía, por default asigna /
        $paths = explode("/", $uri);// se divide la url en partes

        if($uri == "/") {
            //home
            $res = array_key_exists("/", $this->_controllers);
            if($res != "" && $res == 1) {
                foreach($this->_controllers as $key=>$value) {
                    if($key == "/") {
                        $controller = explode(".",$value)[0];
                    }
                }
                $this->getController("home", $controller);
            }
        } else {
            //print_r($paths);
            $state = false;
            foreach($this->_controllers as $key=>$value) {
                if($key == $uri) {
                    $state = true;
                    $controller = explode(".",$value)[0];
                    $method = explode(".",$value)[1];
                    $this->getController($method,$controller);
                }
            }
            if(!$state) {
                die("Error en la ruta");
            }
        }


    }

    public function getController($method, $controller) {
        $methodController = "";
        if($method == "index" || $method == "") {
            $methodController = "index";
        } else {
            $methodController = $method;
        }
        $this->includeController($controller);
        if(class_exists($controller)) {//Se valida que la clase (controlador) existe
            $classTemp = new $controller();
            if(is_callable(array($classTemp, $methodController))) {//Se valida la llamada del método de la clase
                $classTemp->$methodController();//Se llama el método
            } else {
                echo "Method not exist!";
            }
        } else {
            echo "No existe la clase";
        }
    }

    public function includeController($controller) {
        if(file_exists(APP_PATH."controllers/".$controller.".php")) {//Se valida si el archivo existe
            include APP_PATH."controllers/".$controller.".php"; 
        } else {
            die("Error al encontrar controlador");
        }
    }
}