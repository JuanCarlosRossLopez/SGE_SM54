<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM memories WHERE id = '$id'";
$resultado = mysqli_query($conexion, $sql);


?>