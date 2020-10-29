<?php
    require_once 'conexion.php';
    require_once 'home.php';

    $id=$_REQUEST['idALUM'];
    $query="DELETE FROM tbl_alumnos WHERE id_alumno = $id";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: tabla.php');

