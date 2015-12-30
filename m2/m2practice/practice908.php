<?php 

$regex = '/^[0-9]*-[0-9]*-[0-9]*/';


$phone = '111-111-1111';

if(preg_match($regex, $phone)) {
	echo $phone . ' is valid';

} else $phone . ' is NOT valid';

?>




 


 

