<html>
	<body>
		<form action="/update-student.php" method="POST">
			<input type="hidden" name = 'id' value ="<?=$graduate->id?>">
			<input type="text" name="name" placeholder="Name"  value='<?=$graduate->name?>'>
			<input type="text" name="department" placeholder="Department" value='<?=$graduate->department?>'>
			<input type="text" name="degree" placeholder="Degree" value='<?=$graduate->degree?>'>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
