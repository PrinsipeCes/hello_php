<?php
	require('functions.php');
	$pdo = connectToDB();

	$statement = $pdo->prepare('SELECT * FROM graduates WHERE id = :id');
	$statement->execute([
		'id' => $_GET['id']
	]);
	$graduate = $statement->fetch(PDO::FETCH_OBJ);

	require('edit-student.view.php');
?>
