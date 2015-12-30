
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="m2p2Styles.css">
</head>

<body>

	<?php 
		require("project1Header.php");
	?>
	 
	<div class="middle font2">
	<p class="font2 color">Browse Products</p>

	
		<form method="GET" action="project1view.php">
			Product:
		    <select name="product" required>
		        <option value="product"></option>
		        <option value="prod1">Macs</option>
		        <option value="prod2">Ubuntus</option>
		        <option value="prod3">Windows</option>
		    </select>
		    Quantity:
		    <input type="number" name="quantity" value="0" required>
		    <button type="submit">Submit</button>
		</form>
	
	</div>
	
	

	<?php
		require("project1Footer.php");
	?>


</body>
</html>





