<?php 

	
include('OOP2user.php');

$user1 = new Member('Chris' , 'chris_i808@hotmail.com', 'Nov 14');
echo $user1->getType();

echo "<br><br>";

$user2 = new Admin('Quincy' , 'quincy_m623@hotmail.com', 3);
echo $user2->getType();

echo "<br><br>";

$user3 = new Member('Isi' , 'isi_v602@hotmail.com', 'Apr 23');
echo $user3->getType();












 ?>