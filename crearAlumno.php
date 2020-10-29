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

echo '<h3>Crear alumno</h3>';

echo '<table class="table table-striped">';
echo '<tr>';
echo "<td><div class='container'></td>";
echo "<td><form action='crearAlumConfig.php' method='POST'></td>";

echo "<td><label for='fname'>Nombre</label></td>";
echo "<td><input type='text' name='nombre_alumno' class='femail'></td>";

echo "<td><label for='lname'>Primer apellido</label></td>";
echo "<td><input type='text' name='primer_apellido_alummno' class='femail'></td>";

echo "<td><label for='lname'>Segundo apellido</label></td>";
echo "<td><input type='text' name='segundo_apellido_alumno' class='femail'></td>";

echo " <td><label for='lname'>Email</label></td>";
echo "<td><input type='text' name='email_alumno' class='femail'></td>";

echo "<td><label for='lname'>Grupo</label></td>";
echo "<td><input type='text' name='grupo_alumno' class='femail'></td>";

echo "<td><label for='lname'>Contraseña</label></td>";
echo "<td><input type='text' name='passwd_alumno' class='femail'></td>";

echo "<br><br><input type='submit' class='btn btn-primary' value='Enviar'></td>";
echo "</form>";
echo "</div>";
echo '</tr>';
echo '</table>';
//}
