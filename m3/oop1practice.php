


<?php 

class MyClass
{
public $prop1 = "I'm a class property!";

public static $count = 0;




public function __construct() {
	echo 'The class "', __CLASS__, '" was created! <br />';
}

public function __destruct() {
	echo 'The class "', __CLASS__, '" was detroyed! <br />';
}

public function __toString() {
	echo "Using the string method: ";
	return $this->getProperty();
}

public function setProperty($newval){
	$this->prop1 = $newval;
}

private function getProperty()
{
	return $this->prop1 . "<br />";
}

public static function plusone()
{
	return "The count is " . ++self::$count . ".<br />";
}
/**
*This is a very basic DocBlock
*@paramint 
*/





}

class MyOtherClass extends myClass
{
	public function __construct()
	{
		parent::__construct();
		echo "A new contructor in" . __CLASS__ . "<br />";
	}

	public function newMethod() 
	{
		echo "From a new method in " . __CLASS__ . ".<br />";
	}

	public function callProtected()
	{
		return $this->getProperty();
	}



}

do
{
	echo MyClass::plusOne();
} while ( MyClass::$count < 10)






 ?>


<!-- 
$obj = new MyClass;
$obj2 = new MyClass;

echo $obj->getProperty();
echo $obj2->getProperty();

echo $obj->setProperty("I am a new fucking value");
echo $obj2->setProperty("I belong to the second instance!");

echo $obj->getProperty();
echo $obj2->getProperty();

unset($obj);
unset($obj2);

echo "THIS IS THE END OF THE FILE";
-->

<?php
 
function changeJob($person, $newjob)
{
  $person['job'] = $newjob; // Change the person's job
  return $person;
}
 
function happyBirthday($person)
{
  ++$person['age']; // Add 1 to the person's age
  return $person;
}
 
$person1 = array(
  'name' => 'Tom',
  'job' => 'Button-Pusher',
  'age' => 34
);
 
$person2 = array(
  'name' => 'John',
  'job' => 'Lever-Puller',
  'age' => 41
);

echo "<pre>Person 1: ", print_r($person1, True), "</pre>";
echo "<pre>Person 2: ", print_r($person2, True), "</pre>";

?>