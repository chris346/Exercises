<?php 




class Validator {

	protected $pattern;


	function isValid($string){
		return preg_match($this->pattern, $string);
	}	

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

//  

