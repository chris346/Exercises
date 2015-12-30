<?php 


echo ("welcome to VALIDATOR");


class Validator {

	protected $pattern = "Christopher";


	function isValid($string){
		if($string == $this->pattern){
			return true;
		}
		else {
			return false;
		}
	}
}


class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";

}

class PasswordValidator extends Validator {
	protected $pattern = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";

}
// class dogValidator extends Validator {
// 	protected $pattern = "dog";
// }

// class catValidator extends Validator {
// 	protected $pattern = "cat";
// }

// $myValidator = new catValidator();

// if($myValidator->isValid("dog")) {
// 	echo "you are valid";
// } else {
// 	echo "You are NOT valid!!!!!!";
// }

//  ?>

