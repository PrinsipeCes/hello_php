<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/create-student.php">Add Student</a>
	<table>
		<thead>
			<tr>
				<th>ID Number</th>
				<th>Name</th>
				<th>Department</th>
				<th>Degree</th>
				
			</tr>

		</thead>
		<tbody>
			<?php foreach($graduates as $graduate): ?>
				<tr>
					<td><?=$graduate->id?></td>
					<td><?=$graduate->name?></td>
					<td><?=$graduate->department?></td>
					<td><?=$graduate->degree?></td>
					<td>
						<a href="/show-student.php?id=<?=$graduate->id?>">Show</a>
						<a href="/delete-student.php?id=<?=$graduate->id?>" onclick='confirmDelete(event)'>Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</body>

</html>
