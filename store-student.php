<?php
	require('functions.php');
	$pdo = connectToDB();

	$statement = $pdo->prepare("INSERT INTO graduates (id, name, department, degree)  VALUES (:id, :name, :department, :degree)");
	
	$statement->execute([
		'id' => $_POST['id'],
		'name' => $_POST['name'],
		'department' => $_POST['department'],
		'degree' => $_POST['degree']
	]);

	header("Location: index.php"); 
?>
