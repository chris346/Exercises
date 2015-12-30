<?php 

 function isLoggedIn() {
 
 	if(isset($_SESSION['username'])){
 		return true;

 	} else {
 		return false;
 	}
 }


 function isUsernameValid($x) {
 	$usernameValidator = new UsernameValidator();
 	return $usernameValidator->isValid($x);
 	
 }

 function isPasswordValid($y) {
 	$passwordValidator = new PasswordValidator();
 	return $passwordValidator->isValid($y);
 }



 ?>