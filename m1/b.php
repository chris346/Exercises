<?php
$quantity = null;
$product = null;

	if(isset($_GET['quantity'])) {
	
		$quantity = $_GET['quantity'];
		
		if(! is_numeric($quantity)) {
			$quantity = "not a number";
		} if($quantity < 0) {
			$quantity = "not Positive";
		}

	}

if(isset($_GET['product'])) {
	$product = $_GET['product'];
}


?>
<!-- ------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is BBB</title>
</head>
<body>
	 	
	<h1>The Quantity is <?= $quantity ?> </h1>
	<h1>The Product is <?= $product ?> </h1>
	
</body>
</html>