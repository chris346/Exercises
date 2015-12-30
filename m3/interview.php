
<?php 
$sum="";

function addfour($a, $b, $c, $d) {
	$sum = $a+$b+$c+$d;
	return $sum;
}
 $answer=addfour(20,54234,6234234,33123);

echo $answer;

 ?>

 <?php 
function combine($a, $b) {

	$fullName = $a." ".$b;
	return $fullName;
	


}

echo combine('Christopher', 'Igaya') ."<br>";


?>


<?php 

function checkSentence($sentence){

	if(strlen($sentence)>=20 && is_numeric(substr($sentence,0,2))) {
		echo "This sentence has 20 or more characters and the first two numbers characters are numeric";
	}else echo "Fuck no";
}

checkSentence("43 people in the classroom need to take a lunch break");
 ?>