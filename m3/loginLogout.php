<?php 

require('loginValidator.php');
require('loginUsernameValidator.php');
require('loginPasswordValidator.php');
session_start();

Echo 'You have been logged out <br>';

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="loginIndex.php">BACK TO LOGIN</a>
</body>
</html>



