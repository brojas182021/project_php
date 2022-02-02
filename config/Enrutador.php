<?php

    class Enrutador{
        
        public function cargarVista($vista){

            switch ($vista):

                case "home":
                    include_once('../pages/'.$vista.'/'.$vista.'.php');
                    break;
                case "hombre":
                    include_once('../pages/'.$vista.'/'.$vista.'.php');
                    break;
                case "mujer":
                    include_once('../pages/'.$vista.'/'.$vista.'.php');
                    break;
                case "ofertas":
                    include_once('../pages/'.$vista.'/'.$vista.'.php');
                    break;
                default:
                    include_once('../pages/home/home.php');
                endswitch;
        }

        
    }
?>