<?php
//Controlador de sitio personas
use vista\Vista;

class PersonsController {

    public function home() {
        $GLOBALS['tittlePage'] = 'Home movistar Colombia';
        $GLOBALS['descriptionPage'] = 'Página principal movistar Colombia.';
        $GLOBALS['menuActive'] = 'home';
        return Vista::create("persons.home.index");
    }

    public function pospago() {
        $GLOBALS['menuActive'] = 'pospago';
        return Vista::create("persons.pospago.index");
    }

    public function prepago() {
        $GLOBALS['menuActive'] = 'prepago';
        return Vista::create("persons.prepago.index");
    }

}