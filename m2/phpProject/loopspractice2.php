<?php 
$a = 0;
$b = 0;

for( $i=0; $i<5; $i++ ){
    $a += 10;
    $b += 5;
}
echo ("At the end of the loop a=$a and b=$b" );

 ?>
<?php 

$a=0;
$b=0;

for($i = 0; $i <= 10; $i++){
	$a += 10;
	$b += 1;
}
echo "The final answer of a is $a and the final answer of b is $b";



?>
<?php 
$i=0;

while($i<=12) {
	echo $i++ . "<br>";
}



 ?>

 <?php 


$array = ["dog", "ghost", "beer"];

foreach($array as $thing) {
	echo "I would like to have a $thing";
}
?>

<br>
<?php  

$animal = ["cat", "dog", "rat"];

$animal_opt = "";

foreach($animal as $key) {
	$animal_opt .= "<options> $key </option>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<select name="animal">
	<option><?php echo $key ?></option>

</body>
</html>

<?php

$states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut'];
$states_opts = '';

foreach($states as $state) {
    $state_opts .= "<option>$state</option>\n";
}

?>

<select name="states">
    <?php echo $state_opts; ?>
</select>

<?php  
/********************************************************/
$numbers = ["12", "5", "8", "15", "2"];
$number_opts = "";

foreach($numbers as $num) {
	$number_opts .= "<option> $num </option>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select name = "numbers"> <?php echo $number_opts; ?> </select>
</body>
</html>

<?php 

$furn = ["123" => "chair", "234" => "desk", "345" => "lamp"];
$opts = "";

foreach($furn as $num => $product) {
	$opts .= "<option value = \"$key\">$product</option>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 
<form>
	<select name = "product_id"> 
		<?php echo $opts; ?>
	</select>	
</form>


</body>
</html>


   <select name="product_id">
     <?php echo $opts; ?>
   </select>





















 