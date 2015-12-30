
<?php 



$db = new PDO('mysql:host=localhost;dbname=pos;charset=utf8', 'root', '');

print_r($db);

$statement = $db->prepare('SELECT * FROM items');
$statement->execute();
$results = $statement ->fetchall();


print_r($results);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td>Description</td>
			<td>Cost</td>
		</tr>
		<?php foreach ($results as $row) { ?>
		<tr>
			<td>
				1111
			</td>
			<td>
				Apple
			</td>
			<td>
				s$500.00
			</td>
		</tr>
		<?php } ?>
	

	</table>
</body>
</html>