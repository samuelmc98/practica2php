<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
</html>

<?php
require_once 'home.php';
require_once 'conexion.php';

$id=$_REQUEST['idALUM'];
$query="SELECT * FROM tbl_alumnos WHERE id_alumno = $id";

echo '<h1>Actualizar</h1>';

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

if($row =$result->fetch()){
echo '<table class="table table-striped">';
echo '<tr>';
echo "<td><div class='container'></td>";
echo "<td><form action='actualizaralumno.php' method='POST'></td>";

echo "<td><label for='fname'>Nombre</label></td>";
echo "<td><input type='text' name='nombre_alumno' class='femail' value='{$row["nombre_alumno"]}'></td>";

echo "<td><label for='lname'>Primer apellido</label></td>";
echo "<td><input type='text' name='primer_apellido_alummno' class='femail' value='{$row["primer_apellido_alummno"]}'></td>";

echo "<td><label for='lname'>Segundo apellido</label></td>";
echo "<td><input type='text' name='segundo_apellido_alumno' class='femail' value='{$row["segundo_apellido_alumno"]}'></td>";

echo " <td><label for='lname'>Email</label></td>";
echo "<td><input type='text' name='email_alumno' class='femail' value='{$row["email_alumno"]}'></td>";

echo "<td><label for='lname'>Grupo</label></td>";
echo "<td><input type='text' name='grupo_alumno' class='femail' value='{$row["grupo_alumno"]}'></td>";

echo "<td><input type='hidden' name='id_alumno' value='{$id}'></td>";
echo "<br><br><input type='submit' class='btn btn-primary' value='Enviar'></td>";
echo "</form>";
echo "</div>";
echo '</tr>';
echo '</table>';

}