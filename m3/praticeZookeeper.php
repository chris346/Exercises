<?php 

class Animal {
	public $foodtype;
	public function __construct($type) {
		$this->foodType = $type;
	}

}


class Zookeeper {
	private $meat = 10;
	private $veggies = 10;

	public function feed($animal) {
		if($animal->food == 'carnivore') {
			$this->meat -= 2;

		} else if ($animal->food == 'omnivore') {
			$this->meat--;
			$this->veggies--;
		} else if ($animal->foodType == 'herbivore') {
			$this->veggies -= 2;
		} else {
			die('invalid Animal Type')
		}

	}

	$lion = new Animal('carnivore');
	$cow = new Animal('herbivore');
	$pig = new Animal('omnivore');


	public function getFoodStatus() {
		return 'there are ' . $this->meat . ' units of meat and ' . $this->veggies . ' units of veggies left'

		echo $zookeeper->getFoodStatus();

	}














 ?>