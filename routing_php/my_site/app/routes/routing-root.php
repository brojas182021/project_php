<?php
//Mapea URLs del sitio según corresponda
$uri = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:"/";// recupera URL de la solicitud
$paths = explode("/", $uri);// se divide la url en partes
// Setea urls del sitio según corresponda
$ruta = new Ruta();
if($uri != "/" && $paths[1] == "web") {
    if($paths[2] == "empresas") {
        $routingBusiness = require('routing-business.php');
        $ruta->controllers($routingBusiness);
    } else {
        echo "Emprendedores/Corporaciones/Pymes";
    }
} else {
    $routingPersons = require('routing-persons.php');
    $ruta->controllers($routingPersons);
}


