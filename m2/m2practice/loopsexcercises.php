

<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$opt = '';

foreach($colors as $color) {
	$lis .= "<li>$color</li>"
}



 
?>
 <ol>
 	<?= lis ?>



 </ol>
 

<?php  

//  <ul>
//   <li> color 1: red</li>
//   <li> color 2: green</li>
//   <li> color 3: blue</li>
//   ... all the other colors
// </ul>

foreach($colors as $key=>$color) {
	$out .= '<li>color' . ($key +1) .':  ' . color . '</li>');
}



?>

<ol>
	
	<?= $out ?>


</ol>

//create a dropdown list of all the colors

<select name "col1">
	$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$opt = '';

foreach($colors as $key =>$color){
$opt .='<option value ="' . key . '">  . '$color' . </option\n>
}

?>

</select name "col1"> <?= opt ?> </select>
 

<?php  
foreach($colors as $color) {
	if(strlen($color)<=4) {
		$colors2[] = $color;
	}
}

print_r ($colors)

?>

#8 create a new array that has only....

<?php  


$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];
$colors2 = [];


foreach($colors as $key=>color) {
	if($key%3){
		$colors2[] = $colors
	}
}

print_r($colors2);

 
?>













 ?>

