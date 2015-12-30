<?php
/**
 * Recursive Form
 */
session_start();


function isLoggedIn() {
if(isset($_SESSION["isLoggedin"]) && strlen($_SESSION["username"])) {
        return true;
    } else {
        return false;
    }
}


if(isset($_SESSION["isLoggedin"]) && strlen($_SESSION["username"])) {
    redirect("m3p2account.php");
    exit();

} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // replace below with your code...





        $uv = new UsernameValidator();
        $username='';
        if($uv=isValid($_POST['username'])) {
            $username = $_POST['username'];
        }


// if(isset($_SESSION["isLoggedin"]) && strlen($_SESSION["password"])) {
//     redirect("account.php");
//     exit();

// } else {
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // replace below with your code...
//         $pv = new PasswordValidator();
//         $password='';
//         if($uv=isValid($_POST['password'])) {
//             $username = $_POST['password'];
//         }

     // die('Recursive Submission');
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="m3p1style.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>
?>
