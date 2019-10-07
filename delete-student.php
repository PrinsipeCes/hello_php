<?php
	require('functions.php');
	$pdo = connectToDB();

	$statement = $pdo->prepare('DELETE FROM graduates WHERE id = :id');
	$statement->execute([
		'id' => $_GET['id']
	]);

	header('Location: index.php');
?>
