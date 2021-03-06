

<?php 

class User {

	public $name;
	public $email;
	public $type;
		
	public function __construct($name, $email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function getType() {
		return $this->type;
	}

}

class Admin extends User {

	public $permissionLevel;
	public $type = 'Admin';

			
	public function __construct($name, $email, $permissionLevel) {
		parent::__construct($name, $email);	
		$this->permissionLevel = $permissionLevel;	
	}

	public function getType() {
		return 'This is an Admin with a type of .... ' . parent::getType();
	}
}

class Member extends User {

	public $permissionLevel;
	public $type = 'Member';

			
	public function __construct($name, $email, $permissionLevel) {
		parent::__construct($name, $email);	
		$this->permissionLevel = $permissionLevel;	
	}

	public function getType() {
		return 'This is an Member with a type of .... ' . parent::getType();
	}

}




















// == USERS ==

// User
// - Names
// - Emails



// Admin
// - Permission Level


// Members
// - Date Added
