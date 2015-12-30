<?php
//must be added anytime a new session is created

session_start(); 


//sets a cookie (gives a nametag)

$_SESSION["isLoggedin"] = true;

if($_SESSION["isLoggedin"]){
	echo "you are logged in";
} else {
	echo "you are NOT logged in";
}

$username = "";
$password = "";

if(isset($_POST["username"])){
	$username = $_POST["username"]
}
if(isset($_POST["password"])){
	$password = $_POST["password"]
}


function isPasswordValid($password){
	return false;
}
function isUsernameValid($username){
	return false;
}
function loginUser(){}
function setMessagePasswordIsBad(){
	echo "Bad Password";
}
function redirectToLogin(){
	echo "redirect to account";
}
function setMessageUserNameIsBad(){
	echo "Bad username";
}
function redirectToAccount(){
	echo "redirect to account";
}



if(isPasswordValid($password)){

	if(isUsernameValid($username)){

		loginUser();
		redirectToAccount();
	}
	else {
		setMessageUserNameIsBad();
	}
}
else {
	setMessagePasswordIsBad();
	redirectToLogin();
}


 ?>