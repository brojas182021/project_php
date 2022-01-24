<?php
$server = $_SERVER['SERVER_NAME'];
$user = "root";
$pss = "";
$BBDD = "project_php";
$Cnn = mysqli_connect($server,$user,$pss,$BBDD);
mysqli_set_charset($Cnn,"utf-8");
return $Cnn;
?>