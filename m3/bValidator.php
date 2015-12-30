<?php 


echo ("welcome to VALIDATOR");


class Validator {

	protected $pattern = "Billy";


	function isValid($string){
		if($string == $this->pattern){
			return true;
		}
		else {
			return false;
		}
	}
}


class dogValidator extends Validator {
	protected $pattern = "dog";
}

class catValidator extends Validator {
	protected $pattern = "cat";
}

$myValidator = new catValidator();

if($myValidator->isValid("dog")) {
	echo "you are valid";
} else {
	echo "You are NOT valid!!!!!!";
}

 ?>