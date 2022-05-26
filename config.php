<?php
try {
	$dsn = "mysql:dbname=cadastro;host=localhost";
	$dbuser = "root";
	$dbpass = "";
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
} catch(PDOException $e) {
	die($e->getMessage());
}
?>
