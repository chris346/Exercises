
<?php 
require_once('m2p2product.php');
$option="";

foreach($products as $key => $prod) {
	$option .="<option value='$key'>" . $prod . "</option>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="m2p2styles.css">
</head>

<body>

	<?php 
		require("m2p2header.php");
	?>
	 
	<div class="middle font2">
	<p class="font2 color">Browse Products</p>

	
		<form method="GET" action="m2p2view.php">
			
			Product:
		    <select name="product" required>
		       
		        
		        <?= $option ?>
				
			</select>
		    
		    Quantity:
		    <input type="number" name="quantity" value="0" required>
		    <button type="submit">Submit</button>
		
		</form>
	
	</div>
	
	<?php
		require("m2p2Footer.php");
	?>

</body>
</html>





