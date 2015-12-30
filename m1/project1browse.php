


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="project1styles.css">
</head>

<body>

	<?php
		require("project1Header.php");
	?>

	<div class="middle">
		<p class="font2 color">Browse Products</p>
		<form action="products.php" method:"POST">
    		
    		Product:
    		<select name="product">
        		<option>Mac</option>
        		<option>Ubuntu</option>
        		<option>Windows</option>
    		</select>
			
			<label>Quantity: <input type="number" name="product_num"></label>
    		
    		<input type="submit" value="Submit">
		
		</form>
		

		
	



	</div>
	
	<?php
		require("project1Footer.php");
	?>
</body>
</html>