<?php
$quantity = null;
$product = null;
$product_num = null;

	
	if(isset($_GET['quantity'])) {
	
		$quantity = $_GET['quantity'];
		
		if($quantity < 8) {
			$product_num = "You want to order";
		} else {
			$quantity = "You cannot order more than 7";
		}

	}


if(isset($_GET['product'])) {
	$product = $_GET['product'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="project1Styles.css">
</head>
<body>
	<?php 
		require("project1Header.php");
	?>
	<div class="middle font2 color">
		<h1>  <?= $product_num?> <?= $quantity ?> <?= $product ?></h1>
	</div>
	
	

	<?php
		require("project1Footer.php");
	?>



</body>
</html>