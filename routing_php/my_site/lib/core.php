<?php
define('APP_PATH',BASE_PATH.'app/');
define('VIEW_PATH',BASE_PATH.'pages/');
define('PATH',APP_PATH.'routes/');

include 'Ruta.php';
include 'Vista.php';
include PATH . 'routing-root.php';