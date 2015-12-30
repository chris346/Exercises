<?php 

	session_start();

	function isuserLoggedin(){
		return $_SESSION["isLoggedin"];

	}

	$isuserLoggedin = isuserLoggedin();


?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php
 	if($isuserLoggedin){
 	?>
 	<h1>Welcome user</h1>
	<a href="logout.php">Logout</a>
 	<?php  
 	} ?>
 	<form action="validate.php" method="POST">
 		USERNAME: <input type="text" name="username"><br>
 		PASSWORD: <input type="text" name="password"><br>
 		<button>Submit</button>
 	</form>
 </body>
 </html>