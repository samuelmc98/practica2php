<?php
require_once 'admin.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:index.php');
}
echo '</h1><h1 style="float: right;"><a href="logout.php">Cerrar Sesion</a></h1></div>';
