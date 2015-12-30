	
<?php  
// first
	if(isset($_GET['quantity'])) {
	
		$quantity = $_GET['quantity'];
		
		if($quantity < 8) {
			$msg = "You want to order";
		} else {
			$quantity = "You cannot order more than 7";
		}

	}
?>

<?php 
//second
	if(isset($_GET['quantity'])) {
	
		$quantity = $_GET['quantity'];
		
		if($quantity < 8) {
			$msg = "You want to order";
			if($quantity < 0) {
				$msg = "You cannot order a negative number of";
			}
		} else {
			$quantity = "You cannot order more than 7";
		}
	}







require_once('m2p2product.php');

$prod_name = null;
$quantity = null;
$product = null;
$msg= null;


// first copy of project interview
if(is_numeric($_GET['quantity'])) {
	
	if(isset($_GET['quantity'])) {
	
		$quantity = $_GET['quantity'];
		
		if($quantity < 8) {
			$msg = "You want to order";
			if($quantity < 0) {
				$msg = "You cannot order a negative number of";
				$quantity = "";
			}
		} else {
			$quantity = "You cannot order more than 7";
		}
	}
} else {
	$msg = "You have picked an invalid number of";
}




	
if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
		if(is_numeric($_GET['quantity'])) {

			if($quantity > 0) {

				if($quantity < 8) {
					$msg = "You want to order";
					if($quantity < 0) {
						$msg = "You cannot order a negative number of";
						$quantity = "";
					}
				} else {



				}
			} else{
				$msg = "you must pick more than $quantity";
			}

		} else $msg = "you must pick a valid number of";
				$quantity = "";

	} else $msg = "You must select a quantity of";
 


 ?>


 <?php 


if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
		$product_id = $_GET['product'];
		if(is_numeric($_GET['quantity'])) {

			if($quantity > 0) {

				if(!$quantity == 0) {
										

					if($quantity < 0) {

						if($quantity > 8) {
							if($product_id !== "1") {
								$msg = "You cannot order more than 7 Macs";
							}else {
								$msg = "You want to order";

							}
						} else {
							$msg = "You Want to order";
						}
						 else {
						$msg = "You cannot order a negative number of";
					}
				
				} else {
					$msg = "You must pick a number more than";
				}
			} else{
				$msg = "you must pick more than $quantity";
			}

		} else $msg = "you must pick a valid number of";
				$quantity = "";

	} else $msg = "You must select a quantity of";








/********************************************/
if(isset($_GET['product_id']))
	$quantity = $_GET['quantity'];
	$product_id = $_GET['product'];
	if(isset($_GET['quantity'])) {
		if(is_numeric($_GET['quantity'])){
			if($quantity > 0) {
				if($quantity !== 0) {
					if($quantity > 8) {
						if($product_id = "1") {
							$msg = "You cannot order more than";
						}else {
							$msg = "You want to order";
						}

					} else {
						$msg = "You want to order";
					}
				} else {
					$msg "You must pick a quantity greater than";
				}
			} else {
				$msg "You cannot pick a negative quantity";
			}
		} else {
			$msg "You must a pick a valid quantity";
		}
	} else {
		$msg "You must pick a valid quantity";
	}
} else {
	$msg "You did not pick a product";
}



/******************************************/



	if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
		$product_id = $_GET['product'];
		if(is_numeric($_GET['quantity'])){
			if($quantity > 0) {
				if($quantity !== 0) {
					if($quantity > 7) {
						if($product_id == "1") {
							$msg = "You cannot order more than 7";
							$quantity = "";
						}else {
							$msg = "You want to order";
						}

					} else {
						$msg = "You want to order";
					}
				} else {
					$msg ="You must pick a quantity greater than";
				}
			} else {
				$msg ="You cannot pick a negative quantity of";
			}
		} else {
			$msg ="You must a pick a valid quantity";
		}
	} else {
		$msg ="You must pick a valid quantity";
	}
 
/*********************************/
if(isset($_GET['product'])) {
	$product_id = $_GET['product'];
	
		$prod_name = $products[$product_id]


/*******************************/ 
<option value="product"></option>



if(isset($_GET['product'])) {
$product_id = $_GET['product'];	
$prod_name = $products[$product_id]

/*******************************/

	if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
		$product_id = $_GET['product'];
		
		if(is_numeric($_GET['quantity'])){
			
			if($quantity > 0) {
				
				if($quantity !== 0) {
					
					if($quantity > 7) {
						
						if($product_id == "1" or "2" or "3") {

							if($product_id = "1") {
								$msg = "You cannot order more than 7";
								$quantity = "";
							}else {
								$msg = "You want to order";
							}

							
						}else {
							$msg = "THAT WASNT ON THE LIST!";
						}

					} else {
						$msg = "You want to order";
					}
				} else {
					$msg ="You must pick a quantity greater than";
				}
			} else {
				$msg ="You cannot pick a negative quantity of";
			}
		} else {
			$msg ="You must a pick a valid quantity";
		}
	} else {
		$msg ="You must pick a valid quantity";
	}





if(isset($_GET['product'])) {
$product_id = $_GET['product'];	
$prod_name = $products[$product_id];
	if($quantity > "7" and $product_id = "1") {
		$prod_choice = $prod_id;
	}else $prod_name;
} else $msg = "invalid product"



if(isset($_GET['product'])) {
	if(is_numeric($_GET['product'])){
		if($quantity < "7" and $_GET['product'] = "1" or "2" or "3") {
			$product_id = $_GET['product'];	
			$prod_name = $products["$product_id"];
	} else  $msg = "Invalid choice";
} else {
	$msg="Invalid choice";
	$quantity="";
	}
} else {
	$msg= "Invalid product";
}
/*******************/


if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
		if(isset($_GET['product'])) {
			$product_id = $_GET['product_id'];
			
			if(is_numeric($_GET['quantity'])){
				
				if($quantity > 0) {
					
					if($quantity !== 0) {
						
						if($quantity > 7) {
							
							if($product_id == "1") {
									$msg = "You cannot order more than 7";
									$quantity = "";
								}else {
									$msg = "You want to order";
								}
							}else $msg = "You want to order";

						} else {
							$msg = "You want to order";
						}
					} else {
						$msg ="You must pick a quantity greater than";
					}
				} else {
					$msg ="You cannot pick a quantity of";
				}
			} else {
				$msg ="You must a pick a valid quantity";
			}
		} else {
			$msg = "You did not pick a valid product of";
		}
	
if(isset($_GET['product'])) {
	if(is_numeric($_GET['product'])){
		if($quantity < "7" and $_GET['product'] = "1" or "2" or "3") {
			$product_id = $_GET['product'];	
			$prod_name = $products["$product_id"];
	} else  $msg = "Invalid product";
} else {
	$msg="Invalid product";
	$quantity="";
	}
} else {
	$msg= "Invalid product";
	$quantity= "";
}

/******************************************/
if(isset($_GET['product'])) {
$product_id = $_GET['product'];


/******************************************/

if(isset($products[$product_id])) {
	$product_name = $products[$product_id];


/******************************************/

if(isset($_GET['quantity'])) {
$quantity = $_GET['quantity'];

/**************************************/

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
} $msg = "invalid Product";

if(isset($products[$product_id])) {
	$product_name = $products[$product_id];
} else {
	$msg = "invalid Product";
}
   		   



if(is_numeric($quantity)){

    if($quantity >=1) {

    	if($quantity !== 0) {

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
    		$msg = "You must pick a number higher than 0";
    	} 

    } else 
    	$msg = "Invalid Quantity";
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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="m3p1styles.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="parent">
	
	<div class="Outerhero">
		
		<div class="heroInner">
			
			<div class="topheroOuter">
				
				<div class="topheroInner">
					
					<div class="titlediv">
						<p>Puppy Love</p>
					</div>
						
					<form action="" method: "GET">
						<input type="text" name="search" placeholder="Search">
						<button type"submit">Search</button>
					</form>
					
				</div>
			
			</div>
			
			<div class="navBarOuter">
				
				<div class="navBarInner">
					
					<div>
						<a href="">HOME</a>
					</div>	
						
					<div>
						<a href="">SERVICES</a>
					</div>

					<div>
						<a href="">PORTFOLIO</a>
					</div>	
						
					<div>
						<a href="">ABOUT</a>
					</div>
						
					<div>
						<a href="">MEMBERSHIP</a>
					</div>

					<div>
						<a href="">TESTEMONIALS</a>
					</div>
						
					<div>
						<a href="">FAQ</a>
					</div>

					<div>
						<a href="">CONTACT</a>
					</div>
				
				</div>
			
			</div>
			
			<div class="bottomhero">
				
				<div class="greatHero">
					
					<p class="title2">
						<b>Great</b> People <b>Better</b> Dogs
					</p>
					
					<p class="content2">Welcome to the best site in the internet. We really hope you buy our products because we really love to make money!</p>
					
				</div>
			
			</div>
		
		</div>
	
	</div>
		
		<div class="primary-content">
			
			<div class="topprimary">
				
				<div class="primechild">
					
					
					<b>Raise a litter</b>
					
					<p>
						Lorem ipsum dolor sit amet,
						consectur adipiscing elit sed do
						elusmod tempor incididunt ut labore
					</p>
					
					<button>Get Help</button>
				
				</div>
					
				<div class="primechild">
					
					<b>Feed'em right</b>
					
					<p>
						Lorem ipsum dolor sit amet,
						consectur adipiscing elit sed do
						elusmod tempor incididunt ut labore
					</p>
					
					<button>Get Food</button>
				
				</div>
				
				<div class="primechild">
					
					<b>Sell your pups</b>
					
					<p>
						Lorem ipsum dolor sit amet,
						consectur adipiscing elit sed do
						elusmod tempor incididunt ut labore
					</p>
					
					<button>Sell Dogs to China</button>
				
				</div>
						
			</div>
			
			<div class="bottomprimary">
				
				<div class="mediasection">
					
					<div class="media">
					
						<div class="mediaimage">
							<img src="dog1.png"  height="85" width="85">
						</div>	
						
						<div class="mediatitle">
							
							<b>Ralf</b>
						
							<div class="mediacontent">
								This old mutt likes to roll in the dirt
							</div>
						
						</div>
						
					</div>
						
					<div class="media">
						
						<div class="mediaimage">
							
							<img src="dog2.png"  height="85" width="85">
						
						</div>	
						
						<div class="mediatitle">
							
							<b>Max</b> 
							
							<div class="mediacontent">
								if there was ever a young pup that liked grass' it's Max
							</div>
						
						</div>

					</div>
						
					<div class="media">					
						
						<div class="mediaimage">
							<img src="dog3.png"  height="85" width="85">
						</div>
						
						<div class="mediatitle">
						
							<b>Rudy</b>
						
							<div class="mediacontent">
								Young and Fierce, that's all I have to say
							</div>
					
						</div>
						
					</div>

				</div>
		
			
				<div class="mainsection">

					<div class="main">
						
						<div class="mainimage">
							<img src="dog1.png" height="160" width="160">
						</div>
						
						<div>
							<div class="maintitle">
								<b>Ralf</b>
							</div>
							
							This old mutt likes to roll in the dirt
							
						</div>
					
					</div>
					
					<div class="main">
						
						<div class="mainimage">
							<img src="dog2.png" height="160" width="160">
						</div>
						<div>
							
							<div class="maintitle">
								<b>Max</b>
							</div>
							
							If there was ever a young pup that liked grass, it's Max
							
						</div>
					
					</div>				
					
					<div class="main">
						
						<div class="mainimage">
							<img src="dog3.png" height="160" width="160">
						</div>
						
						<div>
							<div class="maintitle">
								<b>Rudy</b>
							</div>
							
							Young and Fierce, that's all I have to say
							
						</div>
					</div>
					
					<div class="main">
						
						<div class="mainimage">
							<img src="dog2.png" height="160" width="160">					
						</div>
						
						<div>
							
							<div class="maintitle">
								<b>Max</b>
							</div>
							
							If there was ever a young pup that liked grass, it's Max
							
						</div>
					
					</div>
					
					<div class="main">
						
						<div class="mainimage">
							<img src="dog3.png" height="160" width="160">
						</div>
						
						<div>
							
							<div class="maintitle">
								<b>Rudy</b>
							</div>
							
							Young and Fierce, that's all I have to say
							
						</div>
					</div>
					
					<div class="main">
						
						<div class="mainimage">
							<img src="dog1.png" height="160" width="160">					
						</div>
						
						<div>
							
							<div class="maintitle">
								<b>Ralf</b>
							</div>
							
							This old mutt likes to roll in the dirt
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>

</div>
	
</body>
</html>