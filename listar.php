<?php
include_once("conexion.php");

$sentencia=$pdo->query("SELECT * FROM tbl_alumnos");
$personas=$sentencia->fetchAll(PDO::FETCH_OBJ);

?>