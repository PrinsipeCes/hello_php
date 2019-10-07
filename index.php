<?php
	require('functions.php');
	$pdo = connectToDB();
	$statement = $pdo->prepare('SELECT * FROM graduates');
	$statement->execute();
	$graduates = $statement->fetchAll(PDO::FETCH_OBJ);
	require('index.view.php');
?>
