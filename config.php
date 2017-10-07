<?php
 try {
		$dbh = new PDO("mysql:dbname=animalitos;host=127.0.0.1","root","123456");
	}catch(PDOException $e) {
		die('Error');
	}
?>