<?php 

require('loginValidator.php');
require('loginUsernameValidator.php');
require('loginPasswordValidator.php');
require('loginHelpers.php');
session_start();


if(!isLoggedIn()) {
	header('Location: loginIndex.php');
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo "Hello " . $_SESSION['username']; ?></h1>
	<a href="loginLogout.php">Logout</a>

</body>
</html>