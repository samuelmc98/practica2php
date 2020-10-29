<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<?php
require_once 'home.php';
require_once 'conexion.php';
echo '<div class="logo"><h1>WELCOMEEEEE';

$query='SELECT id_alumno, nombre_alumno, primer_apellido_alummno, segundo_apellido_alumno FROM tbl_alumnos';
$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
    echo '<form action="crearAlumno.php "method="POST"> <input type="submit" class="btn btn-primary" value="Crear alumno"></form>';
    echo '<form action="filtrar.php "method="POST">Filtrar alumno<input type="text" class="filtroNombre"> <input type="text" class="filtroApellido"><input type="submit" class="btn btn-primary" value="Filtrar"></form>';
    echo '<table class="table table-striped">';
    echo '<tr>';
    echo '<td>Nombre</td>';
    echo '<td>Primer Apellido</td>';
    echo '<td>Segundo Apellido</td>';
    echo '<td>Actualizar Alumno</td>';
    echo '<td>Borrar Alumno</td>';
    echo '</tr>';

if ($result) {
    while ($row=$result->fetch()) {
        echo '<tr>';
        echo '<td>'.$row['nombre_alumno'].'</td>';
        echo '<td>'.$row['primer_apellido_alummno'].'</td>';
        echo '<td>'.$row['segundo_apellido_alumno'].'</td>';
        echo '<td><form action="actualizar.php?idALUM='.$row['id_alumno'].'" method="POST"> <input type="submit" class="btn btn-success" value="Actualizar"></form></td>';
        echo '<td><form action="delete.php?idALUM='.$row['id_alumno'].'" method="POST"> <input type="submit" class="btn btn-danger" value="Borrar"></form></td>';
        echo '</tr>';
    }
}
echo '</table>';
?>
</html>
