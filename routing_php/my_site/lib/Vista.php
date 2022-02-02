<?php namespace vista;

class Vista {
    
    public static function create($path) {
        if($path != "") {
            $paths = explode(".", $path);
            $route = "";
            $sizePaths = count($paths);
            for($i = 0; $i < $sizePaths; $i++) {
                if($i == $sizePaths-1) {
                    $route .= $paths[$i].".php";
                } else {
                    $route .= $paths[$i]."/";
                }
            }
            if(file_exists(VIEW_PATH.$route)) {
                include VIEW_PATH.$route;
            } else {
                die("Vista no existe");
            }
        }
    }
}