<?php  

require_once('m2p2product.php');

$product_name = null;
$quantity = null;
$product = null;
$msg = null;
$product_id = null;



 
if(isset($_GET["quantity"])) {
	$quantity = $_GET["quantity"];
} else {
	$msg = "Invalid Quantity";
}	
	
if(isset($_GET["product"])) {
	$product_id = $_GET["product"];
} else {
	$msg = "invalid product";
}
	
if(isset($products[$product_id])) {
	$product_name = $products[$product_id];
} else {
	$msg = "invalid product";
}
	
	   



if(is_numeric($quantity)){

    if($quantity >=1) {

    	

		if($quantity > 7) {

			if($product_id == "1") {
				$msg = "You cannot order more than 7";
				$quantity = "";
			} else {
				$msg = "you want to order";
						}
		}else {
			$msg = "you want to order";
		}

    	
    	 

    } else {
    	$msg = "Invalid Quantity";
    }
} else {
	$msg = "Invalid Quantity";
}


if($product_name == null){
	$product_name = "Invalid product(s)";
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
		require("m2p2header.php")
	?>
	
	<div class="middle font2 color">
		<h1>  <?= $msg ?> <?= $quantity ?> <?= $product_name ?></h1>
	</div>
	
	<?php
		require("m2p2Footer.php");
	?>

</body>
</html>