


<?php 
// $message = "the system is down";
// $text = "i can program";
// $password = "5rep-thucat_at&56AfecRafum";
// $age = 25;
$fruits = ["1"=>"apple", "2" => "orange","3"=>"grape"];
$berries = array_pop($fruit);

print_r($fruit);
print_r($berries);
$i = 0;




for($q=0; $q<10; $q++){
	echo $q;
}


$opts = "";
$fruit = null;
$fruits = 0;

foreach($fruits as $key => $product) {
	$opts .= "<option></option>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select name="fruit">
		
		<?php "<option>$opts</option>;" ?>
	</select>
</body>
</html>








