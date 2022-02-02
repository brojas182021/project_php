<?php
//Controlador de sitio personas
use vista\Vista;

class PersonsHomeController {

    public function fibra() {
        $GLOBALS['menuActive'] = 'fibra';
        return Vista::create("persons.fibra.index");
    }
    
    public function fija() {
        $GLOBALS['menuActive'] = 'fija';
        return Vista::create("persons.fija.index");
    }

}