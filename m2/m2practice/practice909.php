
<?php 


function isValidUsername($username) {
	return strlen($username) >= 7;
}

$u = " ";

	if(isValidUsername($u)) {
		echo "ya, this is valid. WHOOOOOOOOO!!!!";
	} else {
		echo "no, this is not valid. DAMN IT!!!";
	}

 ?>
<?php
// getNthchar ('don', 1) wil return 'd'
function getNthchar($string, $n) {
	
	return substr($string, $n - 1, 1);
}

if(getNthchar('don', 2) == "o") {
	echo 'this is correct';
} else {
	echo 'FAIL';
}

?>
motorcycle
<?php 

//my_strrev('cat')
function my_strrev($input) {
	$char = str_split($input);
}


for($i=count($char)-1; $i >= 0; $i-- ) {
	$chars = str_split($input);
	$output = " ";

	for($i = count($chars)-1; $i >= 0; $i--) {
		$output .= $char[$i];
		
	}

	return $output;



}

echo my_strrev("motorcycle");

?>

<?php 
if(isset($_GET['name'])) {
	$name = $_GET['name'];
}
//return $_GET[parameter_name] or '' if it doesn't exist
function getStuff($parameter_name) {
	if(isset($_GET[$parameter_name])) {
		return $_GET[$parameter_name];
	}else {
		return ' ';
	}
	

}

$name = getStuff('name');
$age = getStuff('age');

/*******************************************************/
 ?>

 


 <?php 
 //changes made
if(isset($_GET['name'])) {
	$name = $_GET['name'];
}
//return $_GET[parameter_name] or '' if it doesn't exist
function getStuff($parameter_name, $default= '') {
	if(isset($_GET[$parameter_name])) {
		return $_GET[$parameter_name];
	}else {
		return ' ';
	}
	

}

$name = getStuff($x, 'no value');

echo 'name is' . $name;

 
?> 



<?php 
//implement implode
function join($glue, $pieces) {
	$output = '';
	foreach($pieces as $piece) {
		return $piece.":";
	}

}

$a = ['cat', 'dog', 'rat'];
echo join(':',$a);

//should return "cat:dog:rat:"






 ?>