<?php 
//implement implode
function myjoin($glue, $pieces) {
	$output = '';
	foreach($pieces as $idx => $piece) {
		$output .= $piece;
		if($idx < (count($pieces)-1)) {
			$output .= $glue;
		} 
	}
	return $output;
}

$a = ['cat', 'bat', 'rat'];
echo myjoin(':',$a);

//should return "cat:dog:rat:"

//THIS IS CORRECT




 ?>