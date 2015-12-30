<?php 

class User {

		public $age;
		private $password;

		public function __construct($age) {
				$this->age = $age;
				$this->password = 'ragnarok' ;
		}

		public function getPassword($hint) {
			if ($hint == 'getit') {
				return $this->password;
			} else {
				return " You Don't have permisson";
			}
		}
}

	


	$brad = new User(31);

	echo $brad->getPassword('getit');













 ?>