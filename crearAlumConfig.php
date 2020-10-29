<?php
require_once 'home.php';
require_once 'conexion.php';

$nombre_alu=$_REQUEST['nombre_alumno'];
$primer_apellido=$_REQUEST['primer_apellido_alummno'];
$segun_apellido=$_REQUEST['segundo_apellido_alumno'];
$grupo_alu=$_REQUEST['grupo_alumno'];
$email_alu=$_REQUEST['email_alumno'];
$passwd_alu=$_REQUEST['passwd_alumno'];

$query="INSERT INTO tbl_alumnos (nombre_alumno, primer_apellido_alummno, segundo_apellido_alumno, grupo_alumno, email_alumno, passwd_alumno) VALUES ('$nombre_alu','$primer_apellido','$segun_apellido','$grupo_alu','$email_alu','$passwd_alu')";

$result = $pdo->prepare($query);
$result->execute();
header('Location: tabla.php');