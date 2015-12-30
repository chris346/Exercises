
<?php  

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




$username = null;
$password = null;



 function isLoggedIn() {
 	if(isset($_SESSION['username'])){
 		return true;

 	} else {
 		return false;
 	}
 }


 function isUsernameValid($username) {
 	$usernameValidator = new UsernameValidator();
 	return $usernameValidator->isValid($username);
 	
 }

 function isPasswordValid($password) {
 	$passwordValidator = new PasswordValidator();
 	return $passwordValidator->isValid($password);
 }



if(isLoggedIn()) {
	redirect('demoAccount.php');
	exit();

} else {

	if(isUsernameValid($username)) {

		if(isPasswordValid($password)) {
			redirect('demoAccount.php');
			exit();

		} else {
			echo 'invalid password';
		}


	} else {
		echo 'invalid username';
	}

} 
	



