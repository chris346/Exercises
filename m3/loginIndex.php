
<?php  


require('loginValidator.php');
require('loginUsernameValidator.php');
require('loginPasswordValidator.php');
require('loginHelpers.php');

session_start();
//  function loggedIn() {
// 	return true;
//  }
// function isUsernameValid() {
//  	return true;
//  }
//  function isPasswordValid() {
//  	return true;
//  }
// $loggedIn =true;
// $isUsernameValid = true;
// $isPasswordValid = false;




$error = null;
 





if(isLoggedIn()) {
	header('Location: loginAccount.php');
	exit();
} else {
	if(isset($_POST['username']) && isset($_POST['password'])){
			
			$password=$_POST['password'];
			$username=$_POST['username'];


		if(isUsernameValid($username)) {
			
			if(isPasswordValid($password)) {

				$_SESSION['username'] = $username;
				header('Location: loginAccount.php');
				exit();
			

			} else {
				$error = 'Invalid password';
			}


		} else {
			$error = 'Invalid username';
		}

	}
		
} 
	


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <form method="POST" action="loginIndex.php">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">
            <span class="error"><?= $error ?></span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <span class="error"></span>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>





