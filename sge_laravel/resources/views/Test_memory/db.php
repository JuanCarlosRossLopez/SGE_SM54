<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "sge";

$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
    echo"no se realizo la conexion a la base de datos, el error fue:",
    mysqli_connect_error();
}
?>