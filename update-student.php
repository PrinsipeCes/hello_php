<?php
	require('functions.php');
	$pdo = connectToDB();

	$statement = $pdo->prepare('UPDATE graduates SET name = :name, department = :department, degree = :degree WHERE id = :id');
	$statement->execute([
		'id' => $_POST['id'],
		'name' => $_POST['name'],
		'department' => $_POST['department'],
		'degree' => $_POST['degree']
	]);

	header('Location: index.php');

?>
