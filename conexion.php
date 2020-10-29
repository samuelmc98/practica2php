<?php 
try {
	$pdo = new PDO('mysql:host=localhost;dbname=bd_gestion_de_notas;charset=utf8mb4', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);	
} catch (PDOException $e) {
	echo "Connection failed : ". $e->getMessage();
}
?>