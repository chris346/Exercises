<?php 
$person = ['name' => 'Daniel', 'age' => 40];

class Person {
	private $first_name;
	public $last_name;
	private $age


	function__construct($fname, $lname, $age=null) {
		$this->first_name = $fname;
		$this->last_name = $lname;
		$this->age = $age;
	}

	function setFirstName($name) {
		$this->first_name = $name;
	}

	function setAge($age) {
		if(is_numeric($age)) {

			$this->age = $age;
		}
	}
}

$bob = new Person('Bob', 'Ross');
print_r($bob);

$fred = new Person('Fred', 'Smith',99);
print_r($fred);
// print_r($fred);

//output person's last name

echo $fred->getFirstName(), $fred->last_name;




 ?>