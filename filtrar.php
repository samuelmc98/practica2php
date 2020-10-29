<?php

if(isset($_POST['filtrar'])) {
  $sql = 'SELECT * FROM tbl_alumnos';
  $where = [];
  $campos = [];
  if (!empty($_POST['nombre_alumno'])) {
    array_push($where, 'INSTR(LOWER(:nombre_alumno)) > 0');
    $campos[':nombre_alumno'] = [
      'valor' => $_POST['nombre_alumno'],
      'tipo' => \PDO::PARAM_STR,
    ];
  }
  $resultado = $consulta->execute();
}